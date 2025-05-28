import { deleteRecherche } from "../EventManagers/recherche.js";
export class RechercheEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteRecherche");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteRecherche(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
