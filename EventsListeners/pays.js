import { deletePays } from "../EventManagers/pays.js";
import { addPays } from "../EventManagers/pays.js";
import { collectEditFormData } from "../EventManagers/pays.js";
import { getPaysById } from "../EventManagers/pays.js";
export class PaysEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deletePays");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deletePays(id);
      });
    });
  }

    clickOnEditBtns() {
      const editButtons = document.querySelectorAll(".btn-editPays");
      editButtons?.forEach((button) => {
        button.addEventListener("click", function () {
          const id = this.dataset.id;
          console.log("id", id);
          getPaysById(id);
        });
      });
    }
    clickOnSubmitUpdateForm() {
      const editForm = document.querySelector("#editPaysForm");
      editForm?.addEventListener("submit", function (e) {
        collectEditFormData(e);
      });
    }
  
    clickOnSubmitAddForm() {
      const addmodalForm = document.querySelector("#addPaysForm");
      addmodalForm?.addEventListener("submit", function (e) {
        e.preventDefault();
        addPays();
      });
    }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitAddForm();
    this.clickOnSubmitUpdateForm();
  }
}
