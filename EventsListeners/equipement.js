
import { deleteEquipement } from "../EventManagers/equipement.js";
export class EquipementEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteEquipement");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteEquipement(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
    
  }
}
