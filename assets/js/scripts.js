function toggleNotifications() {
    var notifications = document.getElementById("notifications");
    if (notifications.style.display === "block") {
        notifications.style.display = "none";
    } else {
        notifications.style.display = "block";
    }
}

function openSidebar() {
    document.getElementById("sidebar").style.width = "250px";
}

function closeSidebar() {
    document.getElementById("sidebar").style.width = "0";
}

function openSidebar1() {
    var sidebar1 = document.getElementById("sidebar1");
    sidebar1.style.width = "250px";
}

function closeSidebar1() {
    var sidebar1 = document.getElementById("sidebar1");
    sidebar1.style.width = "0";
    document.getElementById("notifications").style.display = "none"; // Cierra notificaciones al cerrar sidebar
}
// assets/js/scripts.js

function previewImage(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('imagePreview');

    // Clear previous preview
    preview.innerHTML = '';

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
        };

        reader.readAsDataURL(file);
    } else {
        preview.innerHTML = '<p>No se seleccionó ninguna imagen.</p>';
    }
}
