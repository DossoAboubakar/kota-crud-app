import { deleteVendeur } from "../EventManagers/vendeur.js";
export class VendeurEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteVendeur");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteVendeur(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
