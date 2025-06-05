import { deleteVille } from "../EventManagers/ville.js";
import { addVille } from "../EventManagers/ville.js";
import { collectEditFormData } from "../EventManagers/ville.js";
import { getVilleById } from "../EventManagers/ville.js";
export class VilleEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteVille");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteVille(id);
      });
    });
  }

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editVille");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getVilleById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editVilleForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addVilleForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addVille();
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitAddForm();
    this.clickOnSubmitUpdateForm();
  }
}
