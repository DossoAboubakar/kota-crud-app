import {
  deleteTypeBienDetail,
  getTypeBienDetailById,
  collectEditFormData,
  addTypeBienDetail,
} from "../EventManagers/types_de_bien.js";
export class TypeDeBienEventListeners {
  constructor() {
    this.__invokListeners();
  }
  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(
      ".btn-deleteTypeBienDetail"
    );
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteTypeBienDetail(id);
      });
    });
  }
  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addTypeBienDetailForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addTypeBienDetail();
    });
  }
  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editTypeBienDetail");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getTypeBienDetailById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editTypeBienDetailForm");
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
