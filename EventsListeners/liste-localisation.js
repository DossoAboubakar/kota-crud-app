import { deleteListeLocalisation } from "../EventManagers/liste-localisation.js";
import { addListeLocalisation } from "../EventManagers/liste-localisation.js";
import { collectEditFormData } from "../EventManagers/liste-localisation.js";
import { getListeLocalisationById } from "../EventManagers/liste-localisation.js";
export class ListeLocalisationEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(
      ".btn-deleteListeLocalisation"
    );
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteListeLocalisation(id);
      });
    });
  }
  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editListeLocalisation");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getListeLocalisationById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editListeLocalisationForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addListeLocalisationForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addListeLocalisation();
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitUpdateForm();
    this.clickOnSubmitAddForm();
  }
}
