
import { deleteAnnonceCmdt } from "../EventManagers/annonce-cmdts.js";
export class AnnonceCmdtEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteAnnonceCmdt");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteAnnonceCmdt(id);
      });
    });
  }

 

  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
