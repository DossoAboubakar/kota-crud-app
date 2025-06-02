import { addCategorieActu } from "../EventManagers/categorie-actu.js";
import { getCategorieActuById } from "../EventManagers/categorie-actu.js";
import { collectEditFormData } from "../EventManagers/categorie-actu.js";
import { deleteCategorieActu } from "../EventManagers/categorie-actu.js";
export class CategoriesActuEventListeners {
  constructor() {
    this.__invokListeners();
  }
  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addCategorieActuForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addCategorieActu();
    });
  }

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editCategorieActu");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        getCategorieActuById(id);
      });
    });
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteCategorieActu");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log('id', id);
        deleteCategorieActu(id);
      });
    });
  }

  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editCategorieActuForm");
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
