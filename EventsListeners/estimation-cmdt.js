
import { deleteEstimationCmdt } from "../EventManagers/estimation-commodites.js";
export class EstimationCmdtEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteEstimationCmdt");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteEstimationCmdt(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
