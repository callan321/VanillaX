// public/layout.js
function adjustMainHeight() {
  const header = document.querySelector("header");
  const footer = document.querySelector("footer");
  const main = document.querySelector("main");

  if (!main) return;

  const headerHeight = header ? header.offsetHeight : 0;
  const footerHeight = footer ? footer.offsetHeight : 0;
  const availableHeight = window.innerHeight - headerHeight - footerHeight;

  main.style.minHeight = availableHeight + "px";
}

window.addEventListener("load", adjustMainHeight);
window.addEventListener("resize", adjustMainHeight);
