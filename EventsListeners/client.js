import { deleteUser } from "../EventManagers/client.js";
import { addUser } from "../EventManagers/client.js";
import { collectEditFormData } from "../EventManagers/client.js";
import { getUserById } from "../EventManagers/client.js";
export class ClientEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteUser");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteUser(id);
      });
    });
  }

  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editUser");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getUserById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editUserForm");
    editForm?.addEventListener("submit", function (e) {
      collectEditFormData(e);
    });
  }

  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addUserForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addUser();
    });
  }

  __invokListeners() {
    this.clickOnDeleteBtns();
    this.clickOnEditBtns();
    this.clickOnSubmitAddForm();
    this.clickOnSubmitUpdateForm();
  }
}
