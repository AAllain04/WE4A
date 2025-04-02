document.addEventListener("DOMContentLoaded", function () {
    const drawer = document.getElementById('drawer-1');
    const drawerBackdrop = document.getElementById('drawer-backdrop');
    const toggleBtn = document.getElementById('drawerToggle');
    const closeBtn = document.getElementById('drawerClose');

    // Toggle drawer
    function toggleDrawer() {
        const isOpen = drawer.classList.contains('show');
        drawer.classList.toggle('show', !isOpen);
        drawer.setAttribute("aria-hidden", isOpen ? "true" : "false");
        toggleBtn.setAttribute("aria-expanded", !isOpen);
        drawerBackdrop.classList.toggle('show', !isOpen);

    }

    toggleBtn.addEventListener('click', toggleDrawer);
    closeBtn.addEventListener('click', toggleDrawer);

    // Close drawer when clicking outside
    drawerBackdrop.addEventListener('click',toggleDrawer)
    drawer.addEventListener('click', function(event) {
        if (event.target === drawer) {
            toggleDrawer();
        }
    });
});

document.getElementById("saveAccount").addEventListener("click", async function() {
    const firstName = document.getElementById("userFirstName").value;
    const lastName = document.getElementById("userLastName").value;
    const password = document.getElementById("userPassword").value;

    const requestData = { firstName, lastName };
    if (password) requestData.password = password;

    console.log("Données envoyées :", requestData);

    const response = await fetch("../../src/update_account.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(requestData)
    });

    try {
        const result = await response.json();
        console.log("Réponse du serveur :", result);
    } catch (error) {
        console.error("Erreur lors de l'analyse de la réponse :", error);
    }
});