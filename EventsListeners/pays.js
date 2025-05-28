import { deletePays } from "../EventManagers/pays.js";
export class PaysEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deletePays");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deletePays(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
