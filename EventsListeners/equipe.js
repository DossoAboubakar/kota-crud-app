
import { deleteEquipe } from "../EventManagers/equipe.js";
export class EquipeEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteEquipe");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteEquipe(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
