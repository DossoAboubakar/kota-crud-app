import { deleteSave } from "../EventManagers/saves.js";
export class SaveEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteSave");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteSave(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
