import {
  deleteImageAgence,
  getImageAgenceById,
} from "../EventManagers/image-agence.js";
import { addImageAgence } from "../EventManagers/image-agence.js";
import { collectEditFormData } from "../EventManagers/image-agence.js";
export class ImageAgenceEventListeners {
  constructor() {
    this.__invokListeners();
  }
  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteImageAgence");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteImageAgence(id);
      });
    });
  }
  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editImageAgence");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log('id',id)
        getImageAgenceById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editImageAgenceForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addImageAgenceForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addImageAgence();
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnSubmitAddForm();
    this.clickOnEditBtns();
    this.clickOnSubmitUpdateForm();
  }
}
