import.meta.glob(["../img/**"]);
import Alpine from "alpinejs";
import persist from "@alpinejs/persist";

window.Alpine = Alpine;

Alpine.plugin(persist);
Alpine.start();

const dialogs = Array.from(document.querySelectorAll("button[dialog]"));

console.log(dialogs);

dialogs.map((dialog) =>
    dialog.addEventListener("click", (event) =>
        event.target.parentNode.querySelector("dialog").showModal()
    )
);
