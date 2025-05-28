import { deleteImageAgence } from "../EventManagers/image-agence.js";
export class ImageAgenceEventListeners {
  constructor() {
    this.__invokListeners();
  }
  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteImageAgence");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteImageAgence(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
