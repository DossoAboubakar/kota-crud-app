import {
  deleteTransaction,
  getTransactionById,
  collectEditFormData,
  addTransaction,
} from "../EventManagers/transaction.js";
export class TransactionEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteTransaction");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteTransaction(id);
      });
    });
  }
  clickOnSubmitAddForm() {
    const addmodalForm = document.querySelector("#addTransactionForm");
    addmodalForm?.addEventListener("submit", function (e) {
      e.preventDefault();
      addTransaction();
    });
  }
  clickOnEditBtns() {
    const editButtons = document.querySelectorAll(".btn-editTransaction");
    editButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        getTransactionById(id);
      });
    });
  }
  clickOnSubmitUpdateForm() {
    const editForm = document.querySelector("#editTransactionForm");
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
