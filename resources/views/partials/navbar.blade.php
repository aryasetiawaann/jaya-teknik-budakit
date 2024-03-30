<nav class="navbar" data-aos="fade-down" data-aos-duration="1000">
    <a href="/">
        <div class="nav-left">
            <img src="/assets/header/logo-new.webp" alt="logo">
            {{-- <h1>JAYA TEKNIK GLOBAL</h1> --}}
        </div>
    </a>
    <div class="nav-right">
        <ul>
            <li><a href="/#">Beranda</a></li>
            <li><a href="/#benefit">Benefit</a></li>
            <li><a href="/#produk">Produk</a></li>
            <li><a href="/#kontak">Kontak</a></li>
        </ul>
    </div>
    <div class="nav-bars">
        <ul>
            <li><a href="/#">Beranda</a></li>
            <li><a href="/#benefit">Benefit</a></li>
            <li><a href="/#produk">Produk</a></li>
            <li><a href="/#kontak">Kontak</a></li>
        </ul>
    </div>
    <svg class="closed" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
    <svg class="opened" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
</nav>

<script>
const closed = document.querySelector(".closed");
const opened = document.querySelector(".opened");
const bar = document.querySelector(".nav-bars");
const item = document.querySelectorAll(".nav-bars li");

closed.addEventListener('click', (e) => {
    closed.style.display = "none";
    bar.style.display = "block";
    opened.style.display = "block";
});

opened.addEventListener('click', (e) => {
    opened.style.display = "none";
    bar.style.display = "none";
    closed.style.display = "block";
});

item.forEach((e) => {
    e.addEventListener("click", (e) => {
        opened.style.display = "none";
        bar.style.display = "none";
        closed.style.display = "block";
    })
})

</script>