// Function to toggle responsive menu
document.getElementById("burgerBtn").addEventListener("click", function () {
  var menu = document.getElementById("responsiveMenu");
  var mainContent = document.querySelector(".main-content");

  menu.classList.toggle("-translate-x-full");

  // Toggle blur effect on .main-content
  if (!menu.classList.contains("-translate-x-full")) {
    mainContent.classList.add("blur");
  } else {
    mainContent.classList.remove("blur");
  }
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

// Function to close sidebar when clicking outside
function closeSidebarOnClickOutside(event) {
  var sidebar = document.getElementById("responsiveMenu");
  var burgerBtn = document.getElementById("burgerBtn");
  var mainContent = document.querySelector(".main-content");

  // Check if the clicked element is outside the sidebar and burger button
  if (
    !sidebar.contains(event.target) &&
    event.target !== burgerBtn &&
    !burgerBtn.contains(event.target)
  ) {
    sidebar.classList.add("-translate-x-full");
    burgerBtn.classList.remove("is-active"); // Remove is-active class from hamburger icon
    mainContent.classList.remove("blur"); // Remove blur effect from .main-content
    return;
  }
}

// Add event listener to close sidebar on click outside
document.body.addEventListener("click", closeSidebarOnClickOutside);
