window.addEventListener('load', () => {
    let panel = document.getElementById(window.sessionStorage.getItem("current-panel-stat") || "v-graphs");
    panel.classList.add("show");
    panel.classList.add("active");
    let tab = document.getElementById(window.sessionStorage.getItem("current-tab-stat") || "v-graphs-tab");
    tab.classList.add("active");
});

const selectTab = (panel) => {
    window.sessionStorage.setItem("current-panel-stat", panel);
    window.sessionStorage.setItem("current-tab-stat", panel + "-tab");
};