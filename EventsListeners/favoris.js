import { addFavoris } from "../EventManagers/favoris.js";
import { getFavorisById } from "../EventManagers/favoris.js";
import { collectEditFormData } from "../EventManagers/favoris.js";
import { deleteFavoris } from "../EventManagers/favoris.js";
export class FavorisEventListeners {
  constructor() {
    this.__invokListeners();
  }
  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addFavorisForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addFavoris();
    });
  }

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editFavoris");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log('id',id)
        getFavorisById(id);
      });
    });
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteFavoris");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteFavoris(id);
      });
    });
  }

  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editFavorisForm");
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
