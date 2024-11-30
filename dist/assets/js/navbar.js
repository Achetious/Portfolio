// Function to toggle responsive menu
document.getElementById("burgerBtn").addEventListener("click", function () {
  document
    .getElementById("responsiveMenu")
    .classList.toggle("-translate-x-full");
});

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
  hamburgers.forEach(function (hamburger) {
    hamburger.addEventListener(
      "click",
      function () {
        this.classList.toggle("is-active");
      },
      false
    );
  });
}
