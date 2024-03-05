<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jaya Teknik Global</title>
</head>
<body>
    <section id="header">
        <nav>
            <div>
                <img src="" alt="">
                <h1>JAYA TEKNIK GLOBAL</h1>
            </div>
            <div>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Benefit</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
        </nav>

        <div>
            <div>
                <h1>KESEMPURNAAN ADALAH INOVASI</h1>
                <p>Melangkah Bersama Menuju Kehidupan Lebih Berkualitas dan Sejuk. Temukan Solusi Terbaik Anda dalam Dunia Pompa Air Bersama Kami</p>
                <div>
                    <button>Order Sekarang</button>
                    <a href="">Lihat semua produk</a>
                </div>
            </div>
            <div>
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </div>
    </section>

    <section id="benefit">
        <h1>Murah, Original, Awet BANGET</h1>
        <p>Menyediakan Keunggulan dalam Aliran Kualitas: Menjadi Mitra Pilihan sebagai Suplier Pompa Terbaik di Seluruh Indonesia</p>
        <div>
            @for($i = 0; $i < 3; $i++)
            <div>
                <img src="" alt="">
                <h3>Benefit 1</h3>
                <p>Menyediakan Keunggulan dalam Aliran Kualitas: Menjadi Mitra Pilihan sebagai Suplier Pompa Terbaik di Seluruh Indonesia</p>
            </div>
            @endfor
        </div>
    </section>

    <section id="produk">
        <h1>Daftar Produk Kami</h1>
        <div>
            <h5>Kategori</h5>
            <h5>Kategori</h5>
            <h5>Kategori</h5>
        </div>

        <div>
            @for ($i = 0; $i < 5; $i++)
                <div>
                    <img src="" alt="">
                    <h5>Rp 50.000</h5>
                    <p>Esbray Pump V25</p>
                    <button>
                        Order Sekarang
                    </button>
                </div>
            @endfor
        </div>
    </section>

    <section id="kontak">
        <div>
            <div>
                <label for="nama">Nama</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
        </div>
        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject">
        </div>
        <div>
            <label for="pesan">Pesan</label>
            <textarea name="pesan"></textarea>
        </div>
        <button>Kirim Pesan</button>
    </section>

</body>
<footer>
    <div>
        <div>
            <img src="" alt="">
            <h3></h3>
        </div>
        <div>
            <img src="" alt="">
            <p>Jakarta Selatan</p>
        </div>
    </div>

    <div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Benefit</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
        <p>© Jaya Teknik Global 2024</p>
    </div>

    <div>
        <div>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
        <p>0881 0823 78299</p>
    </div>
</footer>
</html>