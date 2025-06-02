import {
  deleteSituation,
  getSituationById,
  collectEditFormData,
  addSituation,
} from "../EventManagers/situation.js";
export class SituationEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteSituation");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteSituation(id);
      });
    });
  }
  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addSituationForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();

      addSituation();
    });
  }
  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editSituation");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getSituationById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editSituationForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitUpdateForm();
    this.clickOnSubmitAddForm();
  }
}
