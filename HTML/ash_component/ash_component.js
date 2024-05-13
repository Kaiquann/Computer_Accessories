window.onload = addEvent;

function addEvent() {
    document.getElementById("mouse").addEventListener("click", run1);
    document.getElementById("keyboard").addEventListener("click", run1);
    document.getElementById("cooler").addEventListener("click", run1);
    document.getElementById("headset").addEventListener("click", run2);
    document.getElementById("monitor").addEventListener("click", run2);
    document.getElementById("projector").addEventListener("click", run2);
    document.getElementById("speaker").addEventListener("click", run2);
    document.getElementById("processor").addEventListener("click", run3);
    document.getElementById("ram").addEventListener("click", run3);
    document.getElementById("hdd").addEventListener("click", run3);
    document.getElementById("ssd").addEventListener("click", run3);
    document.getElementById("flash").addEventListener("click", run3);
    document.getElementById("laptop").addEventListener("click", run4);
    document.getElementById("mobile").addEventListener("click", run4);
}

function run1() {
    window.location.replace((document.src = "/ash_peripherals/ash_peripherals.html"));
}

function run2() {
    window.location.replace((document.src = "/ash_display_audio/ash_display_audio.html"));
}

function run3() {
    window.location.replace(
        (document.src = "/ash_storage_ram_processor/ash_storage_ram_processor.html")
    );
}

function run4() {
    window.location.replace((document.src = "/ash_laptop_mobile/ash_laptop_mobile.html"));
}
