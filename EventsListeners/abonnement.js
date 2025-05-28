import { deleteAbonnement } from "../EventManagers/abonnement.js";
export class AbonnementEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteAbnmtButtons = document.querySelectorAll(".btn-deleteAbnmt");
    deleteAbnmtButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteAbonnement(id);
      });
    });
  }
 
  __invokListeners() {
    this.clickOnDeleteBtns();
  
  }
}
