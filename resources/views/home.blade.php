@extends('layouts.app')

@section('content')
    <style>
        @keyframes wave-animation {
            0% {
                transform: rotate(0.0deg);
            }

            10% {
                transform: rotate(14.0deg);
            }

            20% {
                transform: rotate(-8.0deg);
            }

            30% {
                transform: rotate(14.0deg);
            }

            40% {
                transform: rotate(-4.0deg);
            }

            50% {
                transform: rotate(10.0deg);
            }

            60% {
                transform: rotate(0.0deg);
            }

            100% {
                transform: rotate(0.0deg);
            }
        }

        .wave {
            display: inline-block;
            animation-name: wave-animation;
            animation-duration: 2.2s;
            animation-iteration-count: infinite;
            transform-origin: 70% 70%;
            display: inline-block;
        }
    </style>
    {{-- Hero Section --}}
    <section id="hero" class="py-5 bg-body-tertiary border-bottom">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-md-row text-center text-md-start">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="display-4 fw-bold">
                        <span class="hello-wrapper">
                            <span id="helloText" class="hello-font">Hello</span>
                        </span>, I'm Shem
                        <span class="wave" role="img" aria-label="waving hand">👋🏻</span>
                    </h1>



                    <p class="lead text-muted">
                        I design and build cool web things — clean, responsive, and made with love.
                    </p>
                    <a href="#projects" class="btn-gradient mt-3 text-decoration-none" data-aos="zoom-in"
                        data-aos-delay="400">
                        🛠️ See My Work
                    </a>


                </div>
                <div class="col-md-6 mb-4 mb-md-0 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="300">
                    <img id="heroImage" src="{{ asset('storage/images/banner-light.png') }}"
                        data-light="{{ asset('storage/images/banner-light.png') }}"
                        data-dark="{{ asset('storage/images/banner-dark.png') }}" alt="Hero Banner"
                        class="img-fluid rounded-4 shadow-lg" style="max-height: 450px; margin-left: 30px;">
                </div>

            </div>
        </div>
    </section>



    {{-- About Section --}}
    <section id="about" class="container py-5">
        <h2>About Me</h2>
        <p>I'm a developer with a passion for design, Laravel, and Bootstrap.</p>
    </section>

    {{-- Projects Section --}}
    <section id="projects" class="container py-5">
        <h2>Projects</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">A Laravel web app.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="container py-5">
        <h2>Contact Me</h2>
        @livewire('contact-form')
    </section>
@endsection
