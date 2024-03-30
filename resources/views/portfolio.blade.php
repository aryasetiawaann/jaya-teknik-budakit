<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/porto.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Teknik Hub</title>
</head>

<body>
    @include('partials.navbar')

    <div class="porto">
        <img src="/storage/{{ $porto->image }}" alt="">

        <div class="head">
            <h1>{{ $porto->title }}</h1>
            <p>
                @php
                    use Jenssegers\Date\Date;

                    Date::setLocale('id');

                    echo Date::parse($porto->created_at)->format('l, j F Y');
                @endphp
            </p>
        </div>

        <div class="content">
            <p>
                @php
                    echo $porto->description;
                @endphp
            </p>
        </div>

    </div>
    @include('partials.footer')
</body>

</html>
