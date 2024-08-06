/* mobile navbar */
const mobileNav = document.getElementById("mobileNav");
const navLinks = document.querySelector(".nav-links");
const navItems = document.querySelectorAll(".nav-links a");

mobileNav.addEventListener("click", () => {
  if (navLinks.style.transform === "translateX(0%)") {
    navLinks.style.transform = "translateX(-100%)";
  } else {
    navLinks.style.transform = "translateX(0%)";
  }
});

navItems.forEach(item => {
  item.addEventListener("click", () => {
    navLinks.style.transform = "translateX(-100%)";
  });
});
