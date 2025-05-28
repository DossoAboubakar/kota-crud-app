import { deleteSituation } from "../EventManagers/situation.js";
export class SituationEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteSituation");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteSituation(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
