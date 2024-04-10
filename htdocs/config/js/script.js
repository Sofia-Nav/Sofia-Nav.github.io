document.addEventListener("DOMContentLoaded", function() {
    const tabLinks = document.querySelectorAll(".tab-link");
    const tabs = document.querySelectorAll(".tab");

    tabLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const targetTabId = link.getAttribute("href");
            showTab(targetTabId);
        });
    });

    const subTabLinks = document.querySelectorAll(".sub-tab-link");
    const subTabs = document.querySelectorAll(".tab");

    subTabLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const targetTabId = link.getAttribute("href");
            showTab(targetTabId);
        });
    });

    function showTab(tabId) {
        tabs.forEach(tab => {
            tab.style.display = "none";
        });

        const targetTab = document.querySelector(tabId);
        targetTab.style.display = "block";
    }

    // Mostrar la primera pestaña por defecto
    tabs[0].style.display = "block";
});