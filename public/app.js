const innerKategori = document.querySelector(".inner-kategori");
const arrowicons = document.querySelectorAll(".kategori-icon");

const innerPorto = document.querySelector(".inner-porto");
const arrowPorto = document.querySelectorAll(".porto-icon");

let isDragging = false;
let startX = 0;
let scrollLeft = 0;

arrowicons.forEach((element) => {
    element.addEventListener("click", (e) => {
        innerKategori.scrollLeft -= element.id === "left" ? 500 : -500;
    });
});

const startDragging = (e) => {
    isDragging = true;
    startX = e.pageX - innerKategori.offsetLeft;
    scrollLeft = innerKategori.scrollLeft;
};

const dragging = (e) => {
    if (!isDragging) return;
    const x = e.pageX - innerKategori.offsetLeft;
    const walk = (x - startX) * 2;
    innerKategori.scrollLeft = scrollLeft - walk;
};

const dragStop = () => {
    isDragging = false;
};

innerKategori.addEventListener("mousedown", startDragging);
innerKategori.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);

arrowPorto.forEach((element) => {
    element.addEventListener("click", (e) => {
        innerPorto.scrollLeft -= element.id === "left" ? 200 : -200;
    });
});
