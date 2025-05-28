import { deleteSignalement } from "../EventManagers/signalement.js";
export class SignalementEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteSignalement");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteSignalement(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
