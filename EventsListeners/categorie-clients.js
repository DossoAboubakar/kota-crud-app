import { addCategorieClient } from "../EventManagers/categorie-clients.js";
import { getItemById } from "../EventManagers/categorie-clients.js";
import { collectEditFormData } from "../EventManagers/categorie-clients.js";
import { deleteCategorieClient } from "../EventManagers/categorie-clients.js";
export class CategorieClientsEventListeners {
  constructor() {
    this.__invokListeners();
  }
  clickOnSubmitAddForm() {
    const addForm = document.querySelector("#addCategorieClientForm");
    addForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addCategorieClient();
    });
  }

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editCategorieClient");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        getItemById(id);
      });
    });
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(
      ".btn-deleteCategorieClient"
    );
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteCategorieClient(id);
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
