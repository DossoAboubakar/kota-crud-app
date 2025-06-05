import { deleteSignalement } from "../EventManagers/signalement.js";
import { addSignalement } from "../EventManagers/signalement.js";
import { collectEditFormData } from "../EventManagers/signalement.js";
import { getSignalementById } from "../EventManagers/signalement.js";
export class SignalementEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteSignalement");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteSignalement(id);
      });
    });
  }

    clickOnEditBtns() {
      const editButtons = document.querySelectorAll(".btn-editSignalement");
      editButtons?.forEach((button) => {
        button.addEventListener("click", function () {
          const id = this.dataset.id;
          console.log("id", id);
          getSignalementById(id);
        });
      });
    }
    clickOnSubmitUpdateForm() {
      const editForm = document.querySelector("#editSignalementForm");
      editForm?.addEventListener("submit", function (e) {
        collectEditFormData(e);
      });
    }
  
    clickOnSubmitAddForm() {
      const addmodalForm = document.querySelector("#addSignalementForm");
      addmodalForm?.addEventListener("submit", function (e) {
        e.preventDefault();
        addSignalement();
      });
    }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitAddForm();
    this.clickOnSubmitUpdateForm();
  }
}
