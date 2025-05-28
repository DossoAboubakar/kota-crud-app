import { deleteIndicateur } from "../EventManagers/liste-indicateur.js";
export class IndicateurEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteIndicateur");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteIndicateur(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
