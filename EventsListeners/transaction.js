import { deleteTransaction } from "../EventManagers/transaction.js";
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
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
