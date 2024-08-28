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
