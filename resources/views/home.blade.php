<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>Jaya Teknik Global</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header" id="header">
        <nav>
            <a href="/">
                <div class="nav-left">
                    <img src="/assets/header/logo.png" alt="logo">
                    <h1>JAYA TEKNIK GLOBAL</h1>
                </div>
            </a>
            <div class="nav-right">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#benefit">Benefit</a></li>
                    <li><a href="#produk">Produk</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </nav>

        <div class="hero">
            <div class="hero-left">
                <h1>KESEMPURNAAN ADALAH INOVASI</h1>
                <p>Melangkah Bersama Menuju Kehidupan Lebih Berkualitas dan Sejuk. Temukan Solusi Terbaik Anda dalam Dunia Pompa Air Bersama Kami</p>
                <div class="hero-button">
                    <button class="hero-order-btn">Order Sekarang <svg width="29" height="25" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_0_38)">
                        <path d="M15.2215 15.2302L14.6818 15.6868C14.6818 15.6868 13.3972 16.7713 9.89223 13.81C6.38722 10.8486 7.67179 9.76409 7.67179 9.76409L8.01103 9.47582C8.84962 8.76824 8.92909 7.63128 8.19725 6.80073L6.70273 5.10436C5.79652 4.07626 4.04698 3.94018 3.00912 4.8171L1.1469 6.38949C0.633304 6.82492 0.289327 7.38736 0.330841 8.01228C0.437593 9.61189 1.28923 13.052 6.03849 17.0656C11.076 21.3212 15.8027 21.4905 17.7349 21.3373C18.347 21.2889 18.8783 21.0249 19.3065 20.662L20.9908 19.2388C22.1295 18.2782 21.8093 16.6302 20.3527 15.9579L18.0872 14.9107C17.1312 14.4692 15.9688 14.5992 15.2215 15.2302Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_0_38">
                        <rect x="0.327454" y="0.115845" width="28.4671" height="24.1907" rx="12.0953" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        </button>
                    <a class="hero-produk-btn" href="">Lihat semua produk</a>
                </div>
            </div>
            <div class="hero-right">
                <img class="hero-image" src="/assets/header/image.png" alt="">
            </div>
        </div>
    </section>

    <section class="benefit" id="benefit">
        <h1>Murah, Original, Awet BANGET</h1>
        <p>Menyediakan Keunggulan dalam Aliran Kualitas: Menjadi Mitra Pilihan sebagai Suplier Pompa Terbaik di Seluruh Indonesia</p>
        <div class="benefit-list">
            @for($i = 0; $i < 3; $i++)
            <div class="benefit-item">
                <div class="benefit-item-img-base">
                    <img src="" alt="">
                </div>
                <h3>Benefit 1</h3>
                <p>Menyediakan Keunggulan dalam Aliran Kualitas: Menjadi Mitra Pilihan sebagai Suplier Pompa Terbaik di Seluruh Indonesia</p>
            </div>
            @endfor
        </div>
    </section>

    <section class="produk" id="produk">
        <h1>Daftar Produk Kami</h1>
        <div class="kategori">
            <h5>Kategori</h5>
            <h5>Kategori</h5>
            <h5>Kategori</h5>
        </div>
        <hr style="width: 80%; margin:auto; margin-bottom: 80px;">

        <div class="card-container">
            @for ($i = 0; $i < 10; $i++)
                <div class="card-produk">
                    <img src="/assets/produk.png" alt="produk">
                        <h3 class="card-harga">Rp 50.000</h3>
                        <h3>Esbray Pump V25</h3>
                        <button class="card-button">Order Sekarang <svg width="29" height="25" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_0_38)">
                            <path d="M15.2215 15.2302L14.6818 15.6868C14.6818 15.6868 13.3972 16.7713 9.89223 13.81C6.38722 10.8486 7.67179 9.76409 7.67179 9.76409L8.01103 9.47582C8.84962 8.76824 8.92909 7.63128 8.19725 6.80073L6.70273 5.10436C5.79652 4.07626 4.04698 3.94018 3.00912 4.8171L1.1469 6.38949C0.633304 6.82492 0.289327 7.38736 0.330841 8.01228C0.437593 9.61189 1.28923 13.052 6.03849 17.0656C11.076 21.3212 15.8027 21.4905 17.7349 21.3373C18.347 21.2889 18.8783 21.0249 19.3065 20.662L20.9908 19.2388C22.1295 18.2782 21.8093 16.6302 20.3527 15.9579L18.0872 14.9107C17.1312 14.4692 15.9688 14.5992 15.2215 15.2302Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_0_38">
                            <rect x="0.327454" y="0.115845" width="28.4671" height="24.1907" rx="12.0953" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            </button>
                </div>
            @endfor
        </div>
    </section>

    <section class="kontak" id="kontak">
        <h1>Hubungi Kami</h1>
        <div class="kontak-top">
            <div class="top-nama">
                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="Masukan nama">
            </div>
            <div class="top-email">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Masukan email">
            </div>
        </div>
        <div class="kontak-mid">
            <label for="subject">Subjek</label>
            <input type="text" name="subject" placeholder="Masukan subjek">
        </div>
        <div class="kontak-bottom">
            <label for="pesan">Pesan</label>
            <textarea name="pesan" placeholder="Tuliskan pesanmu disini"></textarea>
        </div>
        <button>Kirim Pesan</button>
    </section>

</body>
<footer>
    
    <div class="footer-left">
        <div class="footer-logo">
            <img src="/assets/header/logo.png" alt="">
            <p>JAYA TEKNIK GLOBAL</p>
        </div>
        <div class="footer-location">
            {{-- <img src="/assets/Vector.png" alt="vector"> --}}
            <p><svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 9.5C6.33696 9.5 5.70107 9.23661 5.23223 8.76777C4.76339 8.29893 4.5 7.66304 4.5 7C4.5 6.33696 4.76339 5.70107 5.23223 5.23223C5.70107 4.76339 6.33696 4.5 7 4.5C7.66304 4.5 8.29893 4.76339 8.76777 5.23223C9.23661 5.70107 9.5 6.33696 9.5 7C9.5 7.3283 9.43534 7.65339 9.3097 7.95671C9.18406 8.26002 8.99991 8.53562 8.76777 8.76777C8.53562 8.99991 8.26002 9.18406 7.95671 9.3097C7.65339 9.43534 7.3283 9.5 7 9.5ZM7 0C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 5.14348 13.2625 3.36301 11.9497 2.05025C10.637 0.737498 8.85652 0 7 0Z" fill="white"/>
                </svg>
                 Jakarta Selatan</p>
        </div>
    </div>

    <div class="footer-middle">
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Benefit</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
        <p>© Jaya Teknik Global 2024</p>
    </div>

    <div class="footer-right">
        <div class="right-media">
            <a href=""><img src="/assets/instagram.png" alt="instagram"></a>
            <a href=""><img src="/assets/whatsapp.png" alt="whatsapp"></a>
            <a href=""><img src="/assets/email.png" alt="email"></a>
        </div>
        <p>0881 0823 78299</p>
    </div>

</footer>
</html>