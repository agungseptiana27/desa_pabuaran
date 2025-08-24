<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon/logo_desa') }}" type="image/png">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @php
    $isProduction = app()->environment('production');
    $manifestPath = public_path('build/manifest.json');
    @endphp

    @if ($isProduction && file_exists($manifestPath))
    @php
    $manifest = json_decode(file_get_contents($manifestPath), true);
    @endphp
    <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
    <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
    @else
    @viteReactRefresh
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @endif

    @yield('style')
</head>

<body class="bg-[#FFFDF7]">
    @if (!isset($noNavbar) || $noNavbar !== true)
    @include('template.navbar')
    @endif

    @yield('content')

    @if (!isset($noFooter) || $noFooter !== true)
    @include('template.footer')
    @endif

    @yield('script')

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll(".angka");

        const formatRupiah = (angka) => {
            return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        };

        const animateCount = (el) => {
            const target = +el.getAttribute("data-target");
            const duration = 2000; // 2 detik
            const stepTime = 20;
            const increment = target / (duration / stepTime);
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.textContent = "Rp. " + formatRupiah(Math.floor(current));
            }, stepTime);
        };

        // Pakai IntersectionObserver biar animasi jalan saat muncul di layar
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCount(entry.target);
                    obs.unobserve(entry.target); // animasi hanya sekali
                }
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });

    // document.addEventListener("DOMContentLoaded", () => {
    //     const elements = document.querySelectorAll(".animate-text");

    //     elements.forEach(el => {
    //         const text = el.textContent;
    //         el.textContent = "";

    //         [...text].forEach((char, i) => {
    //             const span = document.createElement("span");
    //             span.textContent = char === " " ? "\u00A0" : char; // <-- perbaikan
    //             span.className =
    //                 "inline-block opacity-0 translate-y-3 transition-all duration-300";
    //             span.style.transitionDelay = `${i * 50}ms`; // delay per huruf
    //             el.appendChild(span);

    //             // trigger animation
    //             setTimeout(() => {
    //                 span.classList.remove("opacity-0", "translate-y-3");
    //                 span.classList.add("opacity-100", "translate-y-0");
    //             }, 50);
    //         });
    //     });
    // });
    </script>
</body>

</html>