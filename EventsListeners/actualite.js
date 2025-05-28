import { deleteActualite } from "../EventManagers/actualite.js";
export class ActualiteEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteActualite");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteActualite(id);
      });
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
