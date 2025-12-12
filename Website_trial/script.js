document.addEventListener("DOMContentLoaded", function () {
  fetch("navbar.html")
    .then(response => response.text())
    .then(data => {
      document.getElementById("navbar-container").innerHTML = data;
    })
    .catch(error => console.error("Error loading navbar:", error));
});
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('show');
  hamburger.classList.toggle('active');
});
document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".btn");
    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            alert(`You clicked on "${btn.innerText}"`);
        });
    });
});
 document.querySelectorAll(".dropdown").forEach(drop => {
    drop.querySelector(".drop-btn").addEventListener("click", () => {
        // Close others
        document.querySelectorAll(".dropdown").forEach(item => {
            if (item !== drop) item.classList.remove("active");
        });
        // Toggle current
        drop.classList.toggle("active");
    });
});

// Optional: click anywhere else closes menu
document.addEventListener("click", e => {
    if (!e.target.closest(".dropdown")) {
        document.querySelectorAll(".dropdown").forEach(item => item.classList.remove("active"));
    }
});
