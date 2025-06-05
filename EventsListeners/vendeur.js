import { deleteVendeur } from "../EventManagers/vendeur.js";
import { addVendeur } from "../EventManagers/vendeur.js";
import { collectEditFormData } from "../EventManagers/vendeur.js";
import { getVendeurById } from "../EventManagers/vendeur.js";
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

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editVendeur");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getVendeurById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editVendeurForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addVendeurForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addVendeur();
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitAddForm();
    this.clickOnSubmitUpdateForm();
  }
}
