
import { deleteAlerte } from "../EventManagers/alerte.js";
export class AlerteEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteAlerte");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteAlerte(id);
      });
    });
  }

 

  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
