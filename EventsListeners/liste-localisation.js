import { deleteListeLocalisation } from "../EventManagers/liste-localisation.js";
export class ListeLocalisationEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteListeLocalisation");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteListeLocalisation(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
