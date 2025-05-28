import { deleteVille } from "../EventManagers/ville.js";
export class VilleEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteVille");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteVille(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
