import { addAnnee, updateAnnee } from "../EventManagers/annee.js";
import { getAnneeById } from "../EventManagers/annee.js";
import { collectEditFormData } from "../EventManagers/annee.js";
import { deleteAnnee } from "../EventManagers/annee.js";
export class AnneeEventListeners {
  constructor() {
    this.__invokListeners();
  }
  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addAnnee();
    });
  }

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editAnnee");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        getAnneeById(id);
      });
    });
  }

  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editForm");
    editForm?.addEventListener("submit", function (e) {
      updateAnnee(e);
    });
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteAnnee");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteAnnee(id);
      });
    });
  }

  __invokListeners() {
    this.clickOnSubmitAddForm();
    this.clickOnEditBtns();
    this.clickOnSubmitUpdateForm();
    this.clickOnDeleteBtns();
  }
}
