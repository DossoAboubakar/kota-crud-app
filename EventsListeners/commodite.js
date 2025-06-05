import { deleteCommodite } from "../EventManagers/commodite.js";
import { addCommodite } from "../EventManagers/commodite.js";
import { collectEditFormData } from "../EventManagers/commodite.js";
import { getCommoditeById } from "../EventManagers/commodite.js";
export class CommoditeEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteCommodite");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteCommodite(id);
      });
    });
  }

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editCommodite");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getCommoditeById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editCommoditeForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addCommoditeForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addCommodite();
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitAddForm();
    this.clickOnSubmitUpdateForm();
  }
}
