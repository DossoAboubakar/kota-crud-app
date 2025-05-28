import { deleteAlerteCmdt } from "../EventManagers/alerte-cmdt.js";
export class AlerteCmdtEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteAlerteCmdt");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        deleteAlerteCmdt(id);
      });
    });
  }

 

  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
