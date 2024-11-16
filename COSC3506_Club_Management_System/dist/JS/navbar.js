document.addEventListener("DOMContentLoaded", function () {
  var accordionContent = document.getElementById("accordionContent");
  var sidebar = document.getElementById("sidebar");

  // Ensure the overflow-y-auto class is not applied initially
  sidebar.classList.remove("overflow-y-auto");

  document.getElementById("loginSignup").addEventListener("click", function () {
    accordionContent.classList.toggle("hidden");

    // Toggle overflow-y-auto class on the sidebar
    if (!accordionContent.classList.contains("hidden")) {
      sidebar.classList.add("overflow-y-auto");
    } else {
      sidebar.classList.remove("overflow-y-auto");
    }
  });
});

function toggleNav() {
  const nav = document.querySelector(
    ".fixed.top-0.left-0.bg-white.h-full.w-20"
  );
  const sidebar = document.getElementById("sidebar");
  nav.classList.toggle("hidden");
  sidebar.classList.toggle("hidden");
}
