
import { deleteDossier } from "../EventManagers/dossier.js";
export class DossierEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteDossier");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteDossier(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
