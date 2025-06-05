import { deleteContact } from "../EventManagers/contact.js";
import { addContact } from "../EventManagers/contact.js";
import { collectEditFormData } from "../EventManagers/contact.js";
import { getContactById } from "../EventManagers/contact.js";
export class ContactEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteContact");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteContact(id);
      });
    });
  }

    clickOnEditBtns() {
      const editButtons = document.querySelectorAll(".btn-editContact");
      editButtons?.forEach((button) => {
        button.addEventListener("click", function () {
          const id = this.dataset.id;
          console.log("id", id);
          getContactById(id);
        });
      });
    }
    clickOnSubmitUpdateForm() {
      const editForm = document.querySelector("#editContactForm");
      editForm?.addEventListener("submit", function (e) {
        collectEditFormData(e);
      });
    }
  
    clickOnSubmitAddForm() {
      const addmodalForm = document.querySelector("#addContactForm");
      addmodalForm?.addEventListener("submit", function (e) {
        e.preventDefault();
        addContact();
      });
    }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitAddForm();
    this.clickOnSubmitUpdateForm();
  }
}
