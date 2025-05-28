
import { deleteCommune } from "../EventManagers/commune.js";
export class CommuneEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteCommune");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteCommune(id);
      });
    });
  }

 

  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
