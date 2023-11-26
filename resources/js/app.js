const dialogs = Array.from(document.querySelectorAll("button[dialog]"));

console.log(dialogs);

dialogs.map((dialog) =>
    dialog.addEventListener("click", (event) =>
        event.target.parentNode.querySelector("dialog").showModal()
    )
);
