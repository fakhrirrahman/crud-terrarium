// Toggle class active
const navbar1Nav = document.querySelector(".navbar1-nav");

// ketika humburger menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbar1Nav.classList.toggle("active");
};

//Klik diluar sidebar untuk menghilangkan nav
const humburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!humburger.contains(e.target) && !navbar1Nav.contains(e.target)) {
    navbar1Nav.classList.remove("active");
  }
});

document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const menu = document.getElementById("menu");

    hamburgerMenu.addEventListener("click", function(event) {
        event.preventDefault();
        menu.classList.toggle("menu-visible");
        menu.classList.toggle("menu-hidden");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const navbar1Height = document.querySelector('.navbar11').offsetHeight;
    document.querySelectorAll('.navbar11-nav a').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - navbar1Height;
        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      });
    });
  });