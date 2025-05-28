
import { deleteAnnonce } from "../EventManagers/annonce.js";
export class AnnonceEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteAnnonce");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteAnnonce(id);
      });
    });
  }

 

  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
