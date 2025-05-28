import { addCategorie } from "../EventManagers/categorie.js";
import { getCategorieById } from "../EventManagers/categorie.js";
import { collectEditFormData } from "../EventManagers/categorie.js";
import { deleteCategorie } from "../EventManagers/categorie.js";
export class CategoriesEventListeners {
  constructor() {
    this.__invokListeners();
  }
  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addCategorieForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addCategorie();
    });
  }

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editCategorie");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        getCategorieById(id);
      });
    });
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteCategorie");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log('id', id);
        deleteCategorie(id);
      });
    });
  }

  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editCategorieForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  __invokListeners() {
    this.clickOnSubmitAddForm();
    this.clickOnEditBtns();
    this.clickOnSubmitUpdateForm();
    this.clickOnDeleteBtns();
  }
}
