let togglebtn = document.querySelectorAll(".btnThem");

togglebtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        let icons = btn.querySelector(".icon-light");
        let changeIcon = document.querySelectorAll(".icon-light");
        let c = document.querySelector(".changeName");

        if (localStorage.theme === "dark") {
            document.documentElement.classList.remove("dark");
            changeIcon.forEach(function (item) {
                item.setAttribute("href", "#moon");
            });

            c.innerHTML = "تم تیره";
            localStorage.theme = "light";
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme", "dark");
            changeIcon.forEach(function (item) {
                item.setAttribute("href", "#sun");
            });

            c.innerHTML = "تم روشن";
            localStorage.theme = "dark";
            console.log("sa");
        }
    });
});
////
// meno
let btnclose = document.querySelector(".close");
let blur = document.getElementById("overlay");
let meno = document.querySelector("#submeno");
let submenu = document.querySelector(".hambergermeno");

submenu.addEventListener("click", function () {
    meno.classList.remove("hidden");
    meno.classList.add("menos");

    blur.classList.add("overlay");
});

btnclose.addEventListener("click", () => {
    meno.classList.remove("menos");
    meno.classList.add("hidden");
    blur.classList.remove("overlay");
});
///
let close = document.getElementById("closebtn");
let shopping = document.getElementById("shopping");
shopping.addEventListener("click", function () {
    close.classList.remove("hidden");
    close.classList.add("menosShop");

    blur.classList.add("overlay");
});
let btnclosed = document.querySelector(".closed");
btnclosed.addEventListener("click", () => {
    close.classList.remove("menosShop");
    close.classList.add("hidden");
    blur.classList.remove("overlay");
});
///
let openmeno = document.getElementById("Menosub");
let Mmeno = document.getElementById("MMeno");
let downarrow = document.querySelector(".up");

Mmeno.addEventListener('click', () => {
    openmeno.classList.toggle("hidden");
    openmeno.classList.toggle("subopenmeno");
console.log("openmeno");
    let flag = openmeno.classList.contains("hidden");
    if (!flag) {
        downarrow.setAttribute("href", "#up");
    } else {
        downarrow.setAttribute("href", "#down");
    }
});
