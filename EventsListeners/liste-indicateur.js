import { deleteIndicateur } from "../EventManagers/liste-indicateur.js";
import { addIndicateur } from "../EventManagers/liste-indicateur.js";
import { collectEditFormData } from "../EventManagers/liste-indicateur.js";
import { getIndicateurById } from "../EventManagers/liste-indicateur.js";
export class IndicateurEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteIndicateur");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteIndicateur(id);
      });
    });
  }
  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editIndicateur");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getIndicateurById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editIndicateurForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addIndicateurForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addIndicateur();
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitUpdateForm();
    this.clickOnSubmitAddForm();
  }
}
