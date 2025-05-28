
import { deleteCommodite } from "../EventManagers/commodite.js";
export class CommoditeEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteCommodite");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteCommodite(id);
      });
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
