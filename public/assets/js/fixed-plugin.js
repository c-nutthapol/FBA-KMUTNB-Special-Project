var pageName = window.location.pathname.split("/").pop().split(".")[0];

var fixedPlugin = document.querySelector("[fixed-plugin]");
var fixedPluginButton = document.querySelector("[fixed-plugin-button]");
var fixedPluginButtonNav = document.querySelector("[fixed-plugin-button-nav]");
var fixedPluginCard = document.querySelector("[fixed-plugin-card]");
var fixedPluginCloseButton = document.querySelector(
    "[fixed-plugin-close-button]"
);

var navbar = document.querySelector("[navbar-main]");

var buttonNavbarFixed = document.querySelector("[navbarFixed]");

var sidenav = document.querySelector("aside");
var sidenav_icons = sidenav.querySelectorAll("li a div");

var sidenav_target = "../pages/" + pageName + ".html";

var whiteBtn = document.querySelector("[transparent-style-btn]");
var darkBtn = document.querySelector("[white-style-btn]");

var non_active_style = [
    "bg-none",
    "bg-transparent",
    "text-blue-500",
    "border-blue-500",
];
var active_style = [
    "bg-gradient-to-tl",
    "from-blue-500",
    "to-violet-500",
    "bg-blue-500",
    "text-white",
    "border-transparent",
];

var white_sidenav_classes = ["bg-white", "shadow-xl"];
// var white_sidenav_highlighted = ["shadow-xl"];
// var white_sidenav_icons = ["bg-white"];

var black_sidenav_classes = ["bg-slate-850", "shadow-none"];
// var black_sidenav_highlighted = ["shadow-none"];
// var black_sidenav_icons = ["bg-gray-200"];

var sidenav_highlight = document.querySelector(
    "a[href=" + CSS.escape(sidenav_target) + "]"
);

// fixed plugin toggle
if (pageName != "rtl") {
    fixedPluginButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });

    fixedPluginButtonNav.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });

    fixedPluginCloseButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-right-90");
        fixedPluginCard.classList.toggle("right-0");
    });

    window.addEventListener("click", function (e) {
        if (
            !fixedPlugin.contains(e.target) &&
            !fixedPluginButton.contains(e.target) &&
            !fixedPluginButtonNav.contains(e.target)
        ) {
            if (fixedPluginCard.classList.contains("right-0")) {
                fixedPluginCloseButton.click();
            }
        }
    });
} else {
    fixedPluginButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });

    fixedPluginButtonNav.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });

    fixedPluginCloseButton.addEventListener("click", function () {
        fixedPluginCard.classList.toggle("-left-90");
        fixedPluginCard.classList.toggle("left-0");
    });

    window.addEventListener("click", function (e) {
        if (
            !fixedPlugin.contains(e.target) &&
            !fixedPluginButton.contains(e.target) &&
            !fixedPluginButtonNav.contains(e.target)
        ) {
            if (fixedPluginCard.classList.contains("left-0")) {
                fixedPluginCloseButton.click();
            }
        }
    });
}

// color sidenav

function sidebarColor(a) {
    var color = a.getAttribute("data-color");
    var parent = a.parentElement.children;
    var activeColor;

    var activeSidenavIconColorClass;

    var checkedSidenavIconColor = "bg-" + color + "-500/30";

    var sidenavIcon = document.querySelector(
        "a[href=" + CSS.escape(sidenav_target) + "]"
    );

    for (var i = 0; i < parent.length; i++) {
        if (parent[i].hasAttribute("active-color")) {
            activeColor = parent[i].getAttribute("data-color");

            parent[i].classList.toggle("border-white");
            parent[i].classList.toggle("border-slate-700");

            activeSidenavIconColorClass = "bg-" + activeColor + "-500/30";
        }
        parent[i].removeAttribute("active-color");
    }

    var att = document.createAttribute("active-color");

    a.setAttributeNode(att);
    a.classList.toggle("border-white");
    a.classList.toggle("border-slate-700");

    //   remove active style

    sidenavIcon.classList.remove(activeSidenavIconColorClass);

    //   add new style

    sidenavIcon.classList.add(checkedSidenavIconColor);
}

var dark_mode_toggle = document.querySelector("[dark-toggle]");
var root_html = document.querySelector("html");
var get_dark_mode = localStorage.getItem("dark-mode-fba");

if (get_dark_mode) {
    root_html.classList.add("dark");
    dark_mode_toggle.setAttribute("manual", "true");
    dark_mode_toggle.checked = true;
}

dark_mode_toggle.addEventListener("change", function () {
    dark_mode_toggle.setAttribute("manual", "true");

    if (this.checked) {
        localStorage.setItem("dark-mode-fba", true);
        root_html.classList.add("dark");
    } else {
        localStorage.removeItem("dark-mode-fba");
        root_html.classList.remove("dark");
    }
});
