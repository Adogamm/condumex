var mediaqueryList = window.matchMedia("(max-device-width : 480px)");
if (mediaqueryList.matches) {
    document.getElementById("sidebar").classList.add("close");
    document.getElementById("open_sidebar").classList.remove("bx");
    document.getElementById("open_sidebar").classList.remove("bx-menu");
    document.getElementById("close_sidebar").classList.add("bx");
    document.getElementById("close_sidebar").classList.add("bx-menu");
} else {
    document.getElementById("sidebar").classList.remove("close");
    document.getElementById("close_sidebar").classList.remove("bx");
    document.getElementById("close_sidebar").classList.remove("bx-menu");
    document.getElementById("open_sidebar").classList.add("bx");
    document.getElementById("open_sidebar").classList.add("bx-menu");
}
let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
    });
}
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});


