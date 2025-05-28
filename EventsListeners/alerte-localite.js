
import { deleteAlerteLocalite } from "../EventManagers/alerte-localite.js";
export class AlerteLocaliteEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteAlerteLocalite");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteAlerteLocalite(id);
      });
    });
  }

 

  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
