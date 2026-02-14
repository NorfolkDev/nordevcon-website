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

// Wave morph: detect when the sticky wave container becomes "stuck"
// and toggle a class to trigger the CSS d-path transition
const waveSentinel = document.getElementById("wave-sentinel");
const waveContainer = document.getElementById("wave-container");

if (waveSentinel && waveContainer) {
    const observer = new IntersectionObserver(
        ([entry]) => {
            waveContainer.classList.toggle("wave-stuck", !entry.isIntersecting);
        },
        { threshold: 0 }
    );
    observer.observe(waveSentinel);
}
