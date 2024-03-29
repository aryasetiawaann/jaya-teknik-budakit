<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->name }} | Jaya Teknik Global</title>
    <link rel="stylesheet" href="/css/detail-produk.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    @include('partials.navbar')
    <div class="produk">
        <div class="produk-images">
            @if (count($product->images) > 0)
        <img id="top-image" class="top-image" src="/storage/{{ $product->images->first()->url}}" alt="">

    @if (count($product->images) > 1)
            <div class="bottom-images">
                <svg class="kategori-icon" id="left" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
                <div class="bottom-images-inner">
                    @foreach ($product->images as $key => $image)
                    <img id="bottom-image-{{ $key }}" class="bottom-image" src="/storage/{{ $image->url }}" alt="">
                    @endforeach
                </div>
                <svg class="kategori-icon" id="right" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
            @endif
        @else
            <img id="top-image" class="top-image" src="/assets/default.png" alt="">
        @endif

        </div>
        <div class="produk-detail">
            <h3 class="kategori">{{ $product->category->name }}</h3>
            <h1>{{ $product->name }}</h1>
            <p>
            {{ $product->description }}
            </p>
            <h3 class="detail-harga">Rp @php echo number_format($product->price, 0, ',', '.'); @endphp</h3>
            <div class="detail-buttons">
                <a href="/send-message/{{ $product->id }}" class="wa-button">
                    <button>Order Sekarang <svg width="29" height="25" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_0_38)">
                            <path d="M15.2215 15.2302L14.6818 15.6868C14.6818 15.6868 13.3972 16.7713 9.89223 13.81C6.38722 10.8486 7.67179 9.76409 7.67179 9.76409L8.01103 9.47582C8.84962 8.76824 8.92909 7.63128 8.19725 6.80073L6.70273 5.10436C5.79652 4.07626 4.04698 3.94018 3.00912 4.8171L1.1469 6.38949C0.633304 6.82492 0.289327 7.38736 0.330841 8.01228C0.437593 9.61189 1.28923 13.052 6.03849 17.0656C11.076 21.3212 15.8027 21.4905 17.7349 21.3373C18.347 21.2889 18.8783 21.0249 19.3065 20.662L20.9908 19.2388C22.1295 18.2782 21.8093 16.6302 20.3527 15.9579L18.0872 14.9107C17.1312 14.4692 15.9688 14.5992 15.2215 15.2302Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_0_38">
                            <rect x="0.327454" y="0.115845" width="28.4671" height="24.1907" rx="12.0953" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg></button>
                </a>
                <a href="{{ $product->url }}" class ="tokopedia-button" target="_blank"><img src="/assets/tokopedia.png" alt="tokopedia"></a>
            </div>
        </div>
    </div>
    <div class="produk-spek">
        <h1>Spesifikasi</h1>
        <div class="spek-detail">
            @php
                echo $product->spesification;
            @endphp
        </div>

    </div>
</body>
@include('partials.footer')

<script>
    

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

        var bottomImages = document.querySelectorAll('.bottom-image');
        var topImageFirst = document.getElementById('top-image');
        var topImageOri = topImageFirst.src;

        bottomImages.forEach(function(image) {
        image.addEventListener('click', function() {
            var topImage = document.getElementById('top-image');
            topImage.src = this.src;
        });
});

    });

const innerImage = document.querySelector(".bottom-images-inner");
const arrowicons = document.querySelectorAll(".kategori-icon");

let scrollLeft = 0;

arrowicons.forEach((element) => {
    element.addEventListener("click", (e) => {
        innerImage.scrollLeft -= element.id === "left" ? 350 : -350;
    });
});

</script>
</html>