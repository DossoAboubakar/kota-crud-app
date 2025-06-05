import { deleteCommune } from "../EventManagers/commune.js";
import { addCommune } from "../EventManagers/commune.js";
import { collectEditFormData } from "../EventManagers/commune.js";
import { getCommuneById } from "../EventManagers/commune.js";
export class CommuneEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteCommune");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteCommune(id);
      });
    });
  }

    clickOnEditBtns() {
      const editButtons = document.querySelectorAll(".btn-editCommune");
      editButtons?.forEach((button) => {
        button.addEventListener("click", function () {
          const id = this.dataset.id;
          console.log("id", id);
          getCommuneById(id);
        });
      });
    }
    clickOnSubmitUpdateForm() {
      const editForm = document.querySelector("#editCommuneForm");
      editForm?.addEventListener("submit", function (e) {
        collectEditFormData(e);
      });
    }
  
    clickOnSubmitAddForm() {
      const addmodalForm = document.querySelector("#addCommuneForm");
      addmodalForm?.addEventListener("submit", function (e) {
        e.preventDefault();
        addCommune();
      });
    }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitAddForm();
    this.clickOnSubmitUpdateForm();
  }
}
