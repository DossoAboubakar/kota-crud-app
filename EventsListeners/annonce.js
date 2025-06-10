import {
  deleteAnnonce,
  collectEditFormData,
  getAnnonceById,
} from "../EventManagers/annonce.js";
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

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editAnnonce");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        getAnnonceById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editAnnonceForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitUpdateForm();
  }
}
