<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jaya Teknik Global</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <script src="/app.js" defer></script>

    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <section class="header">
        @include('partials.navbar')

        <div class="hero">
            <div class="hero-left">
                <h1 data-aos="fade-up" data-aos-duration="1000">KESEMPURNAAN ADALAH INOVASI</h1>
                <p data-aos="fade-up" data-aos-duration="1000">Melangkah Bersama Menuju Kehidupan Lebih Berkualitas dan
                    Sejuk. Temukan Solusi Terbaik Anda dalam
                    Dunia Pompa Air Bersama Kami</p>
                <div class="hero-button" data-aos="fade-up" data-aos-duration="1000">
                    <a href="https://tokopedia.link/bjYCI0x4QHb" target="_blank">
                        <button class="hero-order-btn">Order Sekarang <svg
                                width="29" height="25" viewBox="0 0 29 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_0_38)">
                                    <path
                                        d="M15.2215 15.2302L14.6818 15.6868C14.6818 15.6868 13.3972 16.7713 9.89223 13.81C6.38722 10.8486 7.67179 9.76409 7.67179 9.76409L8.01103 9.47582C8.84962 8.76824 8.92909 7.63128 8.19725 6.80073L6.70273 5.10436C5.79652 4.07626 4.04698 3.94018 3.00912 4.8171L1.1469 6.38949C0.633304 6.82492 0.289327 7.38736 0.330841 8.01228C0.437593 9.61189 1.28923 13.052 6.03849 17.0656C11.076 21.3212 15.8027 21.4905 17.7349 21.3373C18.347 21.2889 18.8783 21.0249 19.3065 20.662L20.9908 19.2388C22.1295 18.2782 21.8093 16.6302 20.3527 15.9579L18.0872 14.9107C17.1312 14.4692 15.9688 14.5992 15.2215 15.2302Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_0_38">
                                        <rect x="0.327454" y="0.115845" width="28.4671" height="24.1907" rx="12.0953"
                                            fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </a>
                    <a class="hero-produk-btn" href="#produk">Lihat semua produk</a>
                </div>
            </div>
            <div class="hero-right" data-aos="fade-up" data-aos-duration="1000">
                <img class="hero-image" src="/assets/header/image.png" alt="">
            </div>
        </div>
    </section>

    <section class="porto" id="benefit">
        <h1>Lorem ipsum dolor sit.</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere in nostrum, aspernatur est asperiores vel.
        </p>
        <div class="porto-list">
            @php
                $delay = 50;
            @endphp
            <svg class="porto-icon" id="left" xmlns="http://www.w3.org/2000/svg" width="52" height="52"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-chevron-left">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
            <div class="inner-porto">
                @foreach ($porto as $item)
                    <a href="/portfolio/{{ $item->title }}" class="porto-item">
                        <div class="porto-item-img-base">
                            <img src="/storage/{{ $item->image }}" alt="">
                        </div>
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </a>
                @endforeach
            </div>
            <svg class="porto-icon" id="right" xmlns="http://www.w3.org/2000/svg" width="52" height="52"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
            @php
                $delay += 100;
            @endphp
        </div>
        <button class="porto-button">
            <a href="/download">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-download">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg>
                <p>Company Profile</p></button>
        </a>
    </section>

    <section class="produk" id="produk">
        <h1>Daftar Produk Kami</h1>
        <div class="kategori-wrap">
            <svg class="kategori-icon" id="left" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
            <ul class="inner-kategori">
                @foreach ($category as $item)
                    <a class="kategori <?php $url = parse_url($_SERVER['REQUEST_URI']);
                    $pemisah = explode('/', $url['path']);
                    $id = end($pemisah);
                    
                    if ($id == $item->id) {
                        echo 'active';
                    } else {
                        echo '';
                    } ?>"
                        href="/category/{{ $item->id }}#produk">
                        <li data-id="{{ $item->id }}">{{ $item->name }}
                        </li>
                    </a>
                @endforeach
            </ul>
            <svg class="kategori-icon" id="right" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
        <hr style="width: 87%; margin:auto; margin-bottom: 80px;">

        <div class="card-container" id="all-product">
            @php
                $delay = 50;
            @endphp
            @foreach ($product as $item)
                <div class="card-produk" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="{{ $delay }}"">
                    @if ($item->images->first() == null)
                        <img src="/assets/default.png" alt="default">
                    @else
                        <img src="{{ Storage::url($item->images->first()->url) }}" alt="produk">
                    @endif
                    <div class="card-desc">
                        <p class="card-nama">{{ $item['name'] }}</p>
                        <h3 class="card-harga">Rp @php echo number_format($item['price'], 0, ',', '.'); @endphp</h3>
                    </div>
                    <a href="/{{ $item['name'] }}" class="card-button">Detail Produk
                    </a>
                </div>
            @endforeach
            @php
                $delay += 50;
            @endphp
        </div>


    </section>

    <section class="paginate">
        {{ $product->links('partials.pagination') }}
    </section>

    <form action="/hubungi" method="POST">
        @csrf
        <section class="kontak" id="kontak">
            <h1>Hubungi Kami</h1>
            <div class="kontak-top" data-aos="fade-up" data-aos-duration="1000">
                <div class="top-nama">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Masukan nama">
                </div>
                <div class="top-email">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Masukan email">
                </div>
            </div>
            <div class="kontak-bottom" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                <label for="pesan">Pesan</label>
                <textarea name="pesan" placeholder="Tuliskan pesanmu disini"></textarea>
            </div>
            <button>Kirim Pesan</button>
        </section>
    </form>


</body>
@include('partials.footer')

<script>
    AOS.init();

    document.addEventListener('DOMContentLoaded', function() {
        const img = document.querySelectorAll('img');

        img.forEach((element) => {
            const img = document.querySelectorAll('img');

            img.forEach((element) => {
                element.addEventListener('contextmenu', (e) => {
                    e.preventDefault();
                });
            });
        });
    });
</script>

</html>
