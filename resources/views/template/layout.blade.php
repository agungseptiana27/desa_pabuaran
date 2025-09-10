<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>

    <link rel="shortcut icon" href="{{ asset('images/logo/logo_desa_pabuaran.png') }}" type="image/png">

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+4fA9VfT1gqL6RlmJf0J7mF0z5M6pV7Y+Gk5qUj0Q1YfJv1a35rYPx4FZ9W+9C5YKg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="bg-[#FFFDF7] overflow-x-hidden" >

    <style>
        * {
            box-sizing: border-box;
        }


a{
    text-decoration: none;
}




/* slider section  */

.slider{
    height: 100vh;
    margin-top: 0px;
    width: 100vw;
    overflow: hidden;
    position: relative;
}
.slider .list .item{
    width: 100%;
    height: 100%;
    position: absolute;
    inset: 0 0 0 0;
}
.slider .list .item img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.slider .list .item .content{
    position: absolute;
    top: 20%;
    width: 1140px;
    max-width: 80%;
    left: 50%;
    transform: translateX(-50%);
    padding-right: 30%;
    box-sizing: border-box;
    color: #fff;
    text-shadow: 0 5px 10px #0004;
}

.slider .list .item .content .title,
.slider .list .item .content .type{
    font-size: 5em;
    font-weight: bold;
    line-height: 1.3em;
}
.slider .list .item .type{
    color: #14ff72cb;
}
.slider .list .item .button{
    display: grid;
    grid-template-columns: repeat(2, 130px);
    grid-template-rows: 40px;
    gap: 5px;
    margin-top: 20px;
}
.slider .list .item .button button{
    border: none;
    background-color: #eee;
    font-family: Poppins;
    font-weight: 500;
    cursor: pointer;
    transition: 0.4s;
    letter-spacing: 2px;
}


.slider .list .item .button button:hover{
    letter-spacing: 3px;
}
.slider .list .item .button button:nth-child(2){
    background-color: transparent;
    border: 1px solid #fff;
    color: #eee;
}





/* Thumbnail Section  */
.thumbnail{
    position: absolute;
    bottom: 50px;
    left: 50%;
    width: max-content;
    z-index: 100;
    display: flex;
    gap: 20px;
}

.thumbnail .item{
    width: 150px;
    height: 220px;
    flex-shrink: 0;
    position: relative;
}

.thumbnail .item img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 5px 0 15px rgba(0, 0, 0, 0.3);
}


/* nextPrevArrows Section  */
.nextPrevArrows{
    position: absolute;
    top: 80%;
    right: 52%;
    z-index: 100;
    width: 300px;
    max-width: 30%;
    display: flex;
    gap: 10px;
    align-items: center;
}
.nextPrevArrows button{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #14ff72cb;
    border: none;
    color: #fff;
    font-family: monospace;
    font-weight: bold;
    transition: .5s;
    cursor: pointer;
}
.nextPrevArrows button:hover{
    background-color: #fff;
    color: #000;
}

/* Animation Part */
.slider .list .item:nth-child(1){
    z-index: 1;
}


/* animation text in first item */
.slider .list .item:nth-child(1) .content .title,
.slider .list .item:nth-child(1) .content .type,
.slider .list .item:nth-child(1) .content .description,
.slider .list .item:nth-child(1) .content .buttons
{
    transform: translateY(50px);
    filter: blur(20px);
    opacity: 0;
    animation: showContent .5s 1s linear 1 forwards;
}
@keyframes showContent{
    to{
        transform: translateY(0px);
        filter: blur(0px);
        opacity: 1;
    }
}
.slider .list .item:nth-child(1) .content .title{
    animation-delay: 0.4s !important;
}
.slider .list .item:nth-child(1) .content .type{
    animation-delay: 0.6s !important;
}
.slider .list .item:nth-child(1) .content .description{
    animation-delay: 0.8s !important;
}
.slider .list .item:nth-child(1) .content .buttons{
    animation-delay: 1s !important;
}




/* Animation for next button click */
.slider.next .list .item:nth-child(1) img{
    width: 150px;
    height: 220px;
    position: absolute;
    bottom: 50px;
    left: 50%;
    border-radius: 30px;
    animation: showImage .5s linear 1 forwards;
}

@keyframes showImage{
    to{
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 0;
    }
}

.slider.next .thumbnail .item:nth-last-child(1){
    overflow: hidden;
    animation: showThumbnail .5s linear 1 forwards;
}
.slider.prev .list .item img{
    z-index: 100;
}


@keyframes showThumbnail{
    from{
        width: 0;
        opacity: 0;
    }
}


.slider.next .thumbnail{
    animation: effectNext .5s linear 1 forwards;
}

@keyframes effectNext{
    from{
        transform: translateX(150px);
    }
}



/* Animation for prev button click */
.slider.prev .list .item:nth-child(2){
    z-index: 2;
}

.slider.prev .list .item:nth-child(2) img{
    animation: outFrame 0.5s linear 1 forwards;
    position: absolute;
    bottom: 0;
    left: 0;
}
@keyframes outFrame{
    to{
        width: 150px;
        height: 220px;
        bottom: 50px;
        left: 50%;
        border-radius: 20px;
    }
}

.slider.prev .thumbnail .item:nth-child(1){
    overflow: hidden;
    opacity: 0;
    animation: showThumbnail .5s linear 1 forwards;
}
.slider.next .nextPrevArrows button,
.slider.prev .nextPrevArrows button{
    pointer-events: none;
}


.slider.prev .list .item:nth-child(2) .content .title,
.slider.prev .list .item:nth-child(2) .content .type,
.slider.prev .list .item:nth-child(2) .content .description,
.slider.prev .list .item:nth-child(2) .content .buttons
{
    animation: contentOut 1.5s linear 1 forwards!important;
}

@keyframes contentOut{
    to{
        transform: translateY(-150px);
        filter: blur(20px);
        opacity: 0;
    }
}
@media screen and (max-width: 678px) {
    .slider .list .item .content{
        padding-right: 0;
    }
    .slider .list .item .content .title{
        font-size: 50px;
    }
}

    </style>

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

let nextBtn = document.querySelector('.next')
let prevBtn = document.querySelector('.prev')

let slider = document.querySelector('.slider')
let sliderList = slider.querySelector('.slider .list')
let thumbnail = document.querySelector('.slider .thumbnail')
let thumbnailItems = thumbnail.querySelectorAll('.item')

thumbnail.appendChild(thumbnailItems[0])

// Function for next button 
nextBtn.onclick = function() {
    moveSlider('next')
}


// Function for prev button 
prevBtn.onclick = function() {
    moveSlider('prev')
}


function moveSlider(direction) {
    let sliderItems = sliderList.querySelectorAll('.item')
    let thumbnailItems = document.querySelectorAll('.thumbnail .item')
    
    if(direction === 'next'){
        sliderList.appendChild(sliderItems[0])
        thumbnail.appendChild(thumbnailItems[0])
        slider.classList.add('next')
    } else {
        sliderList.prepend(sliderItems[sliderItems.length - 1])
        thumbnail.prepend(thumbnailItems[thumbnailItems.length - 1])
        slider.classList.add('prev')
    }


    slider.addEventListener('animationend', function() {
        if(direction === 'next'){
            slider.classList.remove('next')
        } else {
            slider.classList.remove('prev')
        }
    }, {once: true}) // Remove the event listener after it's triggered once
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>




</body>

</html>