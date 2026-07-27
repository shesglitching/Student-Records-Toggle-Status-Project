
function toggleStatus(id) {
    const statusSpan = document.getElementById("status-" + id);

    fetch("toggle.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "id=" + encodeURIComponent(id)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            statusSpan.textContent = data.status;
        } else {
            alert("Error: " + (data.message || "Could not update status."));
        }
    })
    .catch(error => {
        console.error("Toggle request failed:", error);
        alert("Something went wrong while toggling status.");
    });
}
