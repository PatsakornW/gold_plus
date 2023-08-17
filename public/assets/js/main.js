const toggleMenu = document.querySelector(".btn-toggle-menu");
const overlay = document.querySelector(".overlay");
toggleMenu.addEventListener("click", () => {
  document.querySelector(".layout-sidenav").classList.toggle("sidenav-toggled");
  overlay.classList.toggle("d-none");
});
overlay.addEventListener("click", () => {
  document.querySelector(".layout-sidenav").classList.toggle("sidenav-toggled");
  overlay.classList.toggle("d-none");
});

function toggleResize() {
  if (window.innerWidth <= 768) {
    document.querySelector(".layout-sidenav").classList.add("sidenav-toggled");
    overlay.classList.add("d-none");
  } else if (window.innerWidth >= 992) {
    // document
    //   .querySelector(".layout-sidenav")
    //   .classList.remove("sidenav-toggled");
  }
}

toggleResize();
onresize = (event) => {
  toggleResize();
};

document.querySelector("#btnFullscreen").addEventListener(
  "click",
  function (e) {
    toggleFullScreen();
  },
  false
);

function toggleFullScreen() {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen();
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    }
  }
}