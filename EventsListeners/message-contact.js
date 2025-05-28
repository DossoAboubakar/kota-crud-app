import { deleteMessageContact } from "../EventManagers/message-contact.js";
export class MessageContactEventListeners {
  constructor() {
    this.__invokListeners();
  }

  clickOnDeleteBtns() {
    const deleteButtons = document.querySelectorAll(".btn-deleteMessageContact");
    deleteButtons?.forEach((button) => {
      button.addEventListener("click", function () {
        const id = this.dataset.id;
        console.log("id", id);
        deleteMessageContact(id);
      });
    });
  }
  __invokListeners() {
    this.clickOnDeleteBtns();
  }
}
