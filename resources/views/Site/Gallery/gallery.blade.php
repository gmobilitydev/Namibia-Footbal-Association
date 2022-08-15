@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UT-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    </head>

    <div class="relative px-4 py-3 text-white bg-zinc-900 pr-14 space-x-8 text-sm font-medium text-left sm:text-center w-50">
    </div>
    <header class="bg-yellow-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="sm:justify-between sm:items-center sm:flex">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                        Gallery
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Container for demo purpose -->
    <div class="container px-6 mx-auto">

        <!-- Section: Design Block -->

        <section class="mb-32 text-gray-800 text-center lg:text-left background-radial-gradient">
            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                style="background-position: 50%; background-image: url({{ asset('assets/images/galler.jpeg') }}); height: 500px;">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                    style="background-color: rgba(0, 0, 0, 0.75)">
                    <div class="flex justify-center items-center h-full">
                        <div class="text-center text-white px-6 py-6 md:py-0 md:px-12 max-w-[800px]">
                            <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight leading-tight mb-12">
                                Our<br /><span>Visual Stories</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <section class="overflow-hidden text-gray-700">
                <div class="container px-5 mx-auto lg:pt-24 lg:px-24">
                    <h2 class="text-center text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-24"
                        style="color: hsl(0, 0%, 15%)">
                        Gallery
                    </h2>
                </div>



                <!-- Gallery Lightbox -->

            </section>
            <div class="gallery-container">

                <body class="gallery-body ">

                    <!-- Images used to open the lightbox -->
                    <div class="row">
                        <div class="column">
                            <img src="{{ asset('assets/images/caf.jpeg') }}" onclick="openModal();currentSlide(1)"
                                class="hover-shadow">
                        </div>
                        <div class="column">
                            <img src="{{ asset('assets/images/nfa.png') }}" onclick="openModal();currentSlide(2)"
                                class="hover-shadow">
                        </div>
                        <div class="column">
                            <img src="{{ asset('assets/images/caf.jpeg') }}" onclick="openModal();currentSlide(3)"
                                class="hover-shadow">
                        </div>
                        <div class="column">
                            <img src="{{ asset('assets/images/caf.jpeg') }}" onclick="openModal();currentSlide(4)"
                                class="hover-shadow">
                        </div>
                    </div>











                    <!-- The Modal/Lightbox -->
                    <div id="myModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">

                            <div class="mySlides">
                                <div class="numbertext">1 / 4</div>
                                <img src="{{ asset('assets/images/caf.jpeg') }}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 4</div>
                                <img src="{{ asset('assets/images/nfa.png') }}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 4</div>
                                <img src="{{ asset('assets/images/caf.jpeg') }}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 4</div>
                                <img src="{{ asset('assets/images/caf.jpeg') }}" style="width:100%">
                            </div>

                            <!-- Next/previous controls -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <!-- Caption text -->
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>

                            <!-- Thumbnail image controls -->
                            <div class="column">
                                <img class="demo" src="{{ asset('assets/images/caf.jpeg') }}" onclick="currentSlide(1)"
                                    alt="Nature">
                            </div>

                            <div class="column">
                                <img class="demo" src="{{ asset('assets/images/nfa.png') }}" onclick="currentSlide(2)"
                                    alt="Snow">
                            </div>

                            <div class="column">
                                <img class="demo" src="{{ asset('assets/images/caf.jpeg') }}" onclick="currentSlide(3)"
                                    alt="Mountains">
                            </div>

                            <div class="column">
                                <img class="demo" src="{{ asset('assets/images/caf.jpeg') }}" onclick="currentSlide(4)"
                                    alt="Lights">
                            </div>
                        </div>
                    </div>
                </body>
            </div>


            <!-- Lightbox Modal Javascript -->
            <script>
                // Open the Modal
                function openModal() {
                    document.getElementById("myModal").style.display = "block";
                }

                // Close the Modal
                function closeModal() {
                    document.getElementById("myModal").style.display = "none";
                }

                var slideIndex = 1;
                showSlides(slideIndex);

                // Next/previous controls
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                // Thumbnail image controls
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    captionText.innerHTML = dots[slideIndex - 1].alt;
                }
            </script>

        </section>

    </html>
@endsection






<!-- Old Gallery Lightbox Code -->

{{-- <div class="gallery-container grid grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-3">
                    <div class="gallery-item" data-index="1"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                    <div class="gallery-item" data-index="2"><img src="{{ asset('assets/images/nfa.png') }}"></div>
                    <div class="gallery-item" data-index="3"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                    <div class="gallery-item" data-index="4"><img src="{{ asset('assets/images/team.jpg') }}"></div>
                    <div class="gallery-item" data-index="5"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                    <div class="gallery-item" data-index="6"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                    <div class="gallery-item" data-index="7"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                    <div class="gallery-item" data-index="8"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                    <div class="gallery-item" data-index="9"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                </div>

                <!-- Javascript For Gallery Lightbox Model -->

                <script type="text/javascript">
                    const galleryItem = document.getElementsByClassName("gallery-item");
                    const lightBoxContainer = document.createElement("div");
                    const lightBoxContent = document.createElement("div");
                    const lightBoxImg = document.createElement("img");
                    const lightBoxPrev = document.createElement("div");
                    const lightBoxNext = document.createElement("div");

                    lightBoxContainer.classList.add("lightbox");
                    lightBoxContent.classList.add("lightbox-content");
                    lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
                    lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

                    lightBoxContainer.appendChild(lightBoxContent);
                    lightBoxContent.appendChild(lightBoxImg);
                    lightBoxContent.appendChild(lightBoxPrev);
                    lightBoxContent.appendChild(lightBoxNext);
                    document.body.appendChild(lightBoxContainer);

                    let index = 1;

                    function showLightBox(n) {
                        if (n > galleryItem.length) {
                            index = 1;
                        } else if (n < 1) {
                            index = galleryItem.length;
                        }
                        let imageLocation = galleryItem[index - 1].children[0].getAttribute("src");
                        lightBoxImg.setAttribute("src", imageLocation);
                    }

                    function currentImage() {
                        lightBoxContainer.style.display = "block";

                        let imageIndex = parseInt(this.getAttribute("data-index"));
                        showLightBox(index = imageIndex);
                    }
                    for (let i = 0; i < galleryItem.length; i++) {
                        galleryItem[i].addEventListener("click", currentImage);
                    }

                    function slideImage(n) {
                        showLightBox(index += n);
                    }

                    function prevImage() {
                        slideImage(-1);
                    }

                    function nextImage() {
                        slideImage(1);
                    }
                    lightBoxPrev.addEventListener("click", prevImage);
                    lightBoxNext.addEventListener("click", nextImage);

                    function closeLightBox() {
                        if (this === event.target) {
                            lightBoxContainer.style.display = "none";
                        }
                    }
                    lightBoxContainer.addEventListener("click", closeLightBox);
                </script> --}}
