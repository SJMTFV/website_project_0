document.addEventListener("scroll", function () {
    const nav = document.querySelector(".hb-nav");
    if (!nav) return;
    if (window.scrollY > 20) {
        nav.classList.add("shrink");
    } else {
        nav.classList.remove("shrink");
    }
});

