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

const qrs = Array.from(document.querySelectorAll('[js-qr]'));

console.log(qrs);

qrs.map(function(form) {
    const input = form.querySelector('[js-qr-input]');
    const button = form.querySelector('[js-qr-button]');
    const section = form.querySelector('[js-qr-webcam]');
    const webcam = section.querySelector('video');

    console.log(input, button, section, webcam);

    const barcodeDetector = new BarcodeDetector({
        formats: ["qr_code"]
    });

    button.addEventListener('click', async function() {
        const stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
        webcam.srcObject = stream;
        webcam.play();
        section.classList.remove('hidden');

        webcam.addEventListener("loadeddata", function() {
            const scan = setInterval(async function() {
                try {
                    const barcodes = await barcodeDetector.detect(webcam);

                    if (barcodes.length > 0) {
                        const code = barcodes[0].rawValue;

                        if (code.startsWith('ti_')) {
                            clearInterval(scan);
                            section.classList.add('js-qr-success');

                            setTimeout(function() {
                                input.value = code;
                                form.submit();
                            }, 200);
                        }
                    }
                } catch (err) {
                    console.error("Detection failed: ", err);
                    clearInterval(scan);
                }
            }, 100);
        });
    })
});
