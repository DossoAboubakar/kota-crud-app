import { deleteTypeBienDetail } from "../EventManagers/types_de_bien.js";
export class TypeDeBienEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteTypeBienDetail");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteTypeBienDetail(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
