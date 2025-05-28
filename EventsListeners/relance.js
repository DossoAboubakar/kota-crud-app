import { deleteRelance } from "../EventManagers/relance.js";
export class RelanceEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteRelance");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteRelance(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
