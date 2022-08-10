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

                <!-- Photo Grid Section-->

                <body class="gallery-body">

                    <div class="container">
                        @yield('content')
                    </div>

                    <div class="gallery-container">
                        <div class="gallery-item" data-index="1"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                        <div class="gallery-item" data-index="2"><img src="{{ asset('assets/images/nfa.png') }}"></div>
                        <div class="gallery-item" data-index="3"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                        <div class="gallery-item" data-index="4"><img src="{{ asset('assets/images/team.jpg') }}"></div>
                        <div class="gallery-item" data-index="5"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                        <div class="gallery-item" data-index="6"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                        <div class="gallery-item" data-index="7"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                        <div class="gallery-item" data-index="8"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
                        <div class="gallery-item" data-index="8"><img src="{{ asset('assets/images/caf.jpeg') }}"></div>
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
                    </script>

                    <body>
            </section>
        </section>

    </html>
@endsection
