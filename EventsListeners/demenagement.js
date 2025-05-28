
import { deleteDemenagement } from "../EventManagers/demenagement.js";
export class DemenagementEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteDemenagement");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteDemenagement(id);
      });
    });
  }

 

  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
