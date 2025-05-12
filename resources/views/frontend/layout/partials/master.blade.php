<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>এমএস ফাউন্ডেশন</title>
    <!-- <title>Multi Bootstrap Template - Index</title> -->
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon_io/favicon.ico') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/favicon_io/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css?v=1.02') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/paymodal.css') }}" rel="stylesheet">


    <style>
        .section-title h2 {
            font-size: 14px;
            font-weight: 600;
            padding: 0;
            line-height: 1px;
            margin: 0 0 5px 0;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #f38b74;
            font-family: "Poppins", sans-serif;
        }
    </style>
    <style>
            .team-card {
                width: 250px; /* Fixed width */
                height: 27rem; /* Fixed height */
                display: flex;
                flex-direction: column;
            }

            .team-card img.team-img {
                width: 100%;
                height: 60%; /* Reserve 60% of the card height for the image */
                object-fit: cover; /* Ensures the image fits nicely */
            }

            .team-card figcaption {
                height: 40%; /* Reserve 40% of the card height for text */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .team-card h4 {
                font-size: 1.25rem;
                margin-bottom: 0.5rem;
            }

            .team-card p {
                font-size: 0.875rem;
                color: #6c757d;
            }

        </style>

        <style>
            #floating-video-container {
                position: fixed;
                bottom: 20px;
                right: 4rem;
                width: 300px;
                height: 170px;
                background: rgba(0, 0, 0, 0.8);
                padding: 5px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                z-index: 9999;
            }

            #floating-video {
                width: 100%;
                height: 100%;
                border-radius: 10px;
            }
            #video-heading {
                position: fixed;
    font-size: 18px;
    text-align: center;
    margin-top: 20px;
    color: white;
    background: purple;
    bottom: 3px;
    width: 13rem;
    height: 2rem;
    padding: 5px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    right: 100px;

        }
            button {
                position: absolute;
                top: 5px;
                background: rgba(0, 0, 0, 0.7);
                color: white;
                border: none;
                border-radius: 5px;
                width: 30px;
                height: 30px;
                font-size: 16px;
                text-align: center;
                cursor: pointer;
                z-index: 10000;
            }

            #close-video {
                right: 5px;
                background: red;
            }

            #toggle-sound {
                left: 5px;
            }

            button:hover {
                background: darkgray;
            }
        </style>

</head>

<body>


    <div>
        @include('frontend.layout.partials.nav')
    </div>
<!-- Floating Video -->

<div id="floating-video-container">
    <div id="video-heading">
        <p>Chairman's Message</p>
    </div>
    <video id="floating-video" autoplay loop playsinline muted>
        <source src="{{ asset('assets/img/video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <button id="toggle-sound">🔊</button>
    <button id="close-video">&times;</button>

</div>

    <div>
        @stack('content')
    </div>

    <div>
        @include('frontend.layout.partials.footer')
    </div>


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>




    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/en2bn.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let video = document.getElementById("floating-video");

            // Try to play the video programmatically
            video.play().catch(error => {
                console.log("Autoplay failed:", error);
            });

            let soundBtn = document.getElementById("toggle-sound");
            let closeBtn = document.getElementById("close-video");

            // Unmute/Mute Toggle
            soundBtn.addEventListener("click", function () {
                if (video.muted) {
                    video.muted = false;
                    soundBtn.textContent = "🔊"; // Sound ON icon
                } else {
                    video.muted = true;
                    soundBtn.textContent = "🔇"; // Sound OFF icon
                }
            });

            // Close Video
            closeBtn.addEventListener("click", function () {
                document.getElementById("floating-video-container").style.display = "none";
            });
        });
    </script>
    @stack('js')

</body>

</html>
