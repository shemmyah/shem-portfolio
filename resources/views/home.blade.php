@extends('layouts.app')

@section('title', 'Shem - Web Developer & Designer')

@section('content')

    {{-- <section id="hero" class="hero">

        <div class="animated-bg">
            <div class="mesh-gradient"></div>
        </div>

        <div class="glow-orb orb-1"></div>
        <div class="glow-orb orb-2"></div>
        <div class="glow-orb orb-3"></div>

        <div class="particles-container">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="hero-title">
                        <span class="hello-font">Hello</span>, I'm Shem --}}
                        {{-- <span class="wave" role="img" aria-label="waving hand">👋🏻</span> --}}
                    {{-- </h1>
                    <p class="hero-subtitle">
                        I design and build cool web things — clean, responsive, and made with love. ✨
                    </p>
                    <a href="#projects" class="btn-gradient text-decoration-none" data-aos="fade-up" data-aos-delay="300">
                        🛠️ See My Work
                    </a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-image-wrapper" style="margin-left: 15%">
                        <img id="heroImage" src="{{ asset('images/banner-light.png') }}"
                            data-light="{{ asset('images/banner-light.png') }}"
                            data-dark="{{ asset('images/banner-dark.png') }}" alt="Shem's Portfolio Hero"
                            class="img-fluid hero-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider" data-aos="zoom-in"></div>

    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="profile-img-wrapper">
                        <img src="{{ asset('images/banner-light.png') }}" alt="Shem Profile" class="img-fluid profile-img"
                            data-light="{{ asset('images/banner-light.png') }}"
                            data-dark="{{ asset('images/banner-dark.png') }}">
                    </div>
                </div>

                <div class="col-lg-7 about-content" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="about-heading">
                        A Little About Me <span class="bling">✨</span>
                    </h2>
                    <p>
                        I'm <strong>Shem</strong>, a developer who believes that websites are more than just pixels —
                        they're feelings turned into code. 💜
                    </p>
                    <p>
                        I design and develop things that speak — from journal apps that help people tell their stories,
                        to quiet corners of the internet dedicated to someone I love. 🌟
                    </p>
                    <p>
                        My current tools of choice? <strong>Laravel</strong>, <strong>TailwindCSS</strong>, and the
                        occasional midnight debugging session. I enjoy making ideas come alive and look good while doing it.
                        🚀
                    </p>
                    <p>
                        When I'm not coding, I think about how to make experiences feel warm, thoughtful, and human. ✨
                    </p>

                    <div class="tech-stack" data-aos="fade-up" data-aos-delay="300">
                        <span class="tech-pill">Laravel</span>
                        <span class="tech-pill">TailwindCSS</span>
                        <span class="tech-pill">JavaScript</span>
                        <span class="tech-pill">PHP</span>
                        <span class="tech-pill">MySQL</span>
                        <span class="tech-pill">Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Featured Projects</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card project-card">
                        <div class="project-placeholder">
                            <img src="{{ asset('images/project1.png') }}" alt="project1">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">AMOA Youth Org</h5>
                            <p class="card-text">A seamless space for connection, event discovery, and collective
                                storytelling for AMOA Youths.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card project-card">
                        <div class="project-placeholder">
                            <img src="{{ asset('images/project2.png') }}" alt="project2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Insta App</h5>
                            <p class="card-text">A social space built for sharing moments instantly, focusing on a clean
                                interface that lets your photos tell the story inspired by Instagram.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card project-card">
                        <div class="project-placeholder">
                            <img src="{{ asset('images/project3.png') }}" alt="project3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Letter To You</h5>
                            <p class="card-text">A beautiful and responsive web experience for my long distance boyfriend
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <h2 class="section-title" data-aos="fade-up">Let's Connect</h2>
                <p class="contact-intro" data-aos="fade-up" data-aos-delay="100">
                    Have a project in mind or just want to say hi? I'd love to hear from you. 💬
                    <br>Drop me a message and let's create something amazing together! 🚀
                </p>
                <div data-aos="fade-up" data-aos-delay="200">
                    @livewire('contact-form')
                </div>
            </div>
        </div>
    </section> --}}
@endsection
{{-- <style>
    :root {
        --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        --gradient-4: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        --gradient-5: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        --shadow-color: rgba(102, 126, 234, 0.4);
        --glow-purple: rgba(118, 75, 162, 0.6);
    }

    html {
        scroll-behavior: smooth;
    }

    .animated-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 0;
    }

    .mesh-gradient {
        position: absolute;
        width: 200%;
        height: 200%;
        background:
            radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.3) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(240, 147, 251, 0.3) 0%, transparent 50%),
            radial-gradient(circle at 40% 20%, rgba(67, 233, 123, 0.2) 0%, transparent 50%);
        animation: mesh-move 20s ease-in-out infinite;
    }

    @keyframes mesh-move {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        33% {
            transform: translate(-5%, 5%) rotate(120deg);
        }

        66% {
            transform: translate(5%, -5%) rotate(240deg);
        }
    }

    .particles-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .particle {
        position: absolute;
        width: 6px;
        height: 6px;
        background: var(--gradient-1);
        border-radius: 50%;
        opacity: 0.4;
        animation: float-up 15s infinite ease-in-out;
    }

    .particle:nth-child(1) {
        left: 15%;
        animation-delay: 0s;
    }

    .particle:nth-child(2) {
        left: 30%;
        animation-delay: 3s;
        width: 4px;
        height: 4px;
    }

    .particle:nth-child(3) {
        left: 50%;
        animation-delay: 6s;
        width: 8px;
        height: 8px;
    }

    .particle:nth-child(4) {
        left: 70%;
        animation-delay: 9s;
    }

    .particle:nth-child(5) {
        left: 85%;
        animation-delay: 12s;
        width: 5px;
        height: 5px;
    }

    @keyframes float-up {
        0% {
            transform: translateY(100vh) scale(0);
            opacity: 0;
        }

        10% {
            opacity: 0.6;
        }

        90% {
            opacity: 0.6;
        }

        100% {
            transform: translateY(-100vh) scale(1.5);
            opacity: 0;
        }
    }

    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    [data-bs-theme="light"] .hero {
        background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 50%, #ffecd2 100%);
    }

    [data-bs-theme="dark"] .hero {
        background: linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%);
    }

    .glow-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        opacity: 0.4;
        animation: float-orb 8s ease-in-out infinite;
    }

    .orb-1 {
        width: 400px;
        height: 400px;
        background: var(--gradient-1);
        top: -100px;
        right: -100px;
        animation-delay: 0s;
    }

    .orb-2 {
        width: 350px;
        height: 350px;
        background: var(--gradient-2);
        bottom: -100px;
        left: -100px;
        animation-delay: 4s;
    }

    .orb-3 {
        width: 300px;
        height: 300px;
        background: var(--gradient-3);
        top: 50%;
        left: 50%;
        animation-delay: 2s;
    }

    @keyframes float-orb {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(30px, -30px) scale(1.1);
        }

        66% {
            transform: translate(-30px, 30px) scale(0.9);
        }
    }

    .hello-font {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 4.5rem;
        font-weight: 900;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #ffd700 100%);
        background-size: 200% 200%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: rainbow-flow 5s ease infinite;
        display: inline-block;
        position: relative;
    }

    @keyframes rainbow-flow {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    .hello-font::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 0;
        height: 5px;
        background: var(--gradient-1);
        border-radius: 3px;
        animation: draw-line 3s ease-in-out infinite;
    }

    @keyframes draw-line {

        0%,
        100% {
            width: 0;
            left: 0;
        }

        50% {
            width: 100%;
            left: 0;
        }
    }

    .wave {
        display: inline-block;
        animation: wave-hand 2.5s ease-in-out infinite;
        transform-origin: 70% 70%;
        font-size: 4rem;
        filter: drop-shadow(0 0 20px rgba(255, 193, 7, 0.7));
    }

    @keyframes wave-hand {

        0%,
        100% {
            transform: rotate(0deg);
        }

        10% {
            transform: rotate(14deg) scale(1.1);
        }

        20% {
            transform: rotate(-8deg);
        }

        30% {
            transform: rotate(14deg) scale(1.1);
        }

        40% {
            transform: rotate(-4deg);
        }

        50% {
            transform: rotate(10deg) scale(1.1);
        }

        60% {
            transform: rotate(0deg);
        }
    }

    .bling {
        display: inline-block;
        animation: sparkle-spin 2s ease-in-out infinite;
        font-size: 2rem;
        filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.9));
    }

    @keyframes sparkle-spin {

        0%,
        100% {
            transform: rotate(0deg) scale(1);
            filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.9)) brightness(1);
        }

        25% {
            transform: rotate(-20deg) scale(1.3);
            filter: drop-shadow(0 0 25px rgba(255, 215, 0, 1)) brightness(1.5);
        }

        50% {
            transform: rotate(20deg) scale(1.4);
            filter: drop-shadow(0 0 30px rgba(255, 215, 0, 1)) brightness(2);
        }

        75% {
            transform: rotate(-15deg) scale(1.3);
            filter: drop-shadow(0 0 25px rgba(255, 215, 0, 1)) brightness(1.5);
        }
    }

    .hero-title {
        font-size: clamp(2.2rem, 6vw, 4rem);
        font-weight: 900;
        line-height: 1.2;
        margin-bottom: 2rem;
        position: relative;
        z-index: 2;
    }

    .hero-subtitle {
        font-size: clamp(1.2rem, 2.5vw, 1.6rem);
        line-height: 1.8;
        margin-bottom: 3rem;
        position: relative;
        z-index: 2;
        font-weight: 400;
    }

    [data-bs-theme="light"] .hero-subtitle {
        color: #5a4a42;
        text-shadow: 0 2px 15px rgba(255, 255, 255, 0.8);
    }

    [data-bs-theme="dark"] .hero-subtitle {
        color: #e8e8e8;
        text-shadow: 0 2px 15px rgba(0, 0, 0, 0.8);
    }

    .btn-gradient {
        display: inline-block;
        padding: 1.3rem 3.5rem;
        font-size: 1.2rem;
        font-weight: 700;
        border-radius: 60px;
        background: var(--gradient-1);
        color: white;
        border: none;
        box-shadow: 0 15px 50px var(--shadow-color);
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        z-index: 2;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .btn-gradient::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--gradient-2);
        transition: left 0.5s ease;
        z-index: -1;
    }

    .btn-gradient::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.4);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .btn-gradient:hover {
        transform: translateY(-8px) scale(1.05);
        box-shadow: 0 25px 70px var(--shadow-color);
        color: white;
    }

    .btn-gradient:hover::before {
        left: 0;
    }

    .btn-gradient:hover::after {
        width: 400px;
        height: 400px;
    }

    .btn-gradient:active {
        transform: translateY(-4px) scale(1.02);
    }

    .hero-image-wrapper {
        position: relative;
        z-index: 2;
        animation: float-image 7s ease-in-out infinite;
        perspective: 1000px;
    }

    @keyframes float-image {

        0%,
        100% {
            transform: translateY(0) rotateY(0deg);
        }

        25% {
            transform: translateY(-20px) rotateY(5deg);
        }

        50% {
            transform: translateY(-30px) rotateY(0deg);
        }

        75% {
            transform: translateY(-20px) rotateY(-5deg);
        }
    }

    .hero-image-wrapper::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 130%;
        height: 130%;
        background: var(--gradient-1);
        border-radius: 40px;
        opacity: 0.3;
        z-index: -1;
        animation: pulse-shadow 4s ease-in-out infinite;
    }

    @keyframes pulse-shadow {

        0%,
        100% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.3;
        }

        50% {
            transform: translate(-50%, -50%) scale(1.15);
            opacity: 0.5;
        }
    }

    .hero-img {
        border-radius: 40px;
        margin-left: 10%;
        box-shadow: 0 40px 100px rgba(0, 0, 0, 0.4);
        max-height: 600px;
        object-fit: cover;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        border: 6px solid rgba(255, 255, 255, 0.2);
    }

    .hero-img:hover {
        transform: scale(1.05) rotateZ(3deg);
        box-shadow: 0 50px 120px var(--glow-purple);
    }

    .section-divider {
        width: 180px;
        height: 6px;
        background: var(--gradient-1);
        margin: 5rem auto;
        border-radius: 3px;
        position: relative;
        overflow: hidden;
    }

    .section-divider::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.9), transparent);
        animation: shimmer-slide 3s infinite;
    }

    @keyframes shimmer-slide {
        0% {
            left: -100%;
        }

        100% {
            left: 200%;
        }
    }

    .about-section {
        padding: 8rem 0;
        position: relative;
        overflow: hidden;
    }

    [data-bs-theme="light"] .about-section {
        background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    }

    [data-bs-theme="dark"] .about-section {
        background: linear-gradient(180deg, #1a1a2e 0%, #16213e 50%, #1a1a2e 100%);
    }

    .about-heading {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 900;
        margin-bottom: 2.5rem;
        position: relative;
        display: inline-block;
    }

    .about-heading::before {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 0;
        width: 70%;
        height: 6px;
        background: var(--gradient-5);
        border-radius: 3px;
        animation: expand-shrink 4s ease-in-out infinite;
    }

    @keyframes expand-shrink {

        0%,
        100% {
            width: 70%;
        }

        50% {
            width: 100%;
        }
    }


    .profile-img-wrapper {
        position: relative;
        max-width: 500px;
        margin: 0 auto;
    }

    .profile-img-wrapper::before {
        content: '';
        position: absolute;
        top: -15px;
        left: -15px;
        right: -15px;
        bottom: -15px;
        background: var(--gradient-1);
        border-radius: 30px;
        z-index: -1;
        animation: rotate-gradient 12s linear infinite;
    }

    @keyframes rotate-gradient {
        0% {
            transform: rotate(0deg);
            filter: hue-rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
            filter: hue-rotate(360deg);
        }
    }

    .profile-img {
        border-radius: 25px;
        margin-left: 10%;
        box-shadow: 0 40px 90px rgba(0, 0, 0, 0.3);
        transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        border: 7px solid;
    }

    [data-bs-theme="light"] .profile-img {
        border-color: #ffffff;
    }

    [data-bs-theme="dark"] .profile-img {
        border-color: #2d2d2d;
    }

    .profile-img:hover {
        transform: scale(1.08) rotate(-3deg);
    }

    .about-content p {
        font-size: 1.2rem;
        line-height: 2;
        margin-bottom: 1.8rem;
    }

    [data-bs-theme="light"] .about-content p {
        color: #4a4a4a;
    }

    [data-bs-theme="dark"] .about-content p {
        color: #d0d0d0;
    }

    .about-content strong {
        background: var(--gradient-1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
    }

    /* Tech stack pills */
    .tech-stack {
        display: flex;
        flex-wrap: wrap;
        gap: 1.2rem;
        margin-top: 3rem;
    }

    .tech-pill {
        padding: 0.9rem 2rem;
        border-radius: 60px;
        font-weight: 700;
        font-size: 1.05rem;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    [data-bs-theme="light"] .tech-pill {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        color: #495057;
        border: 3px solid #e9ecef;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }

    [data-bs-theme="dark"] .tech-pill {
        background: linear-gradient(135deg, #2d2d2d 0%, #3d3d3d 100%);
        color: #e8e8e8;
        border: 3px solid #4d4d4d;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }

    .tech-pill::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--gradient-1);
        transition: left 0.4s ease;
        z-index: -1;
    }

    .tech-pill:hover {
        transform: translateY(-8px) scale(1.1);
        box-shadow: 0 15px 40px var(--shadow-color);
        border-color: transparent;
        color: white;
    }

    .tech-pill:hover::before {
        left: 0;
    }

+
    .projects-section {
        padding: 8rem 0;
        position: relative;
        overflow: hidden;
    }

    [data-bs-theme="light"] .projects-section {
        background: linear-gradient(180deg, #ffecd2 0%, #fcb69f 50%, #ffecd2 100%);
    }

    [data-bs-theme="dark"] .projects-section {
        background: linear-gradient(180deg, #0f0c29 0%, #302b63 50%, #24243e 100%);
    }

    .section-title {
        font-size: clamp(3rem, 6vw, 4.5rem);
        font-weight: 900;
        text-align: center;
        margin-bottom: 5rem;
        background: var(--gradient-1);
        background-size: 200% 200%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: rainbow-flow 5s ease infinite;
        position: relative;
    }

    .section-title::after {
        content: '✨';
        position: absolute;
        right: -60px;
        top: 0;
        font-size: 3rem;
        animation: twinkle-rotate 2s ease-in-out infinite;
    }

    @keyframes twinkle-rotate {

        0%,
        100% {
            opacity: 1;
            transform: scale(1) rotate(0deg);
        }

        50% {
            opacity: 0.4;
            transform: scale(1.4) rotate(180deg);
        }
    }

    .project-card {
        height: 100%;
        border: none;
        border-radius: 30px;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        cursor: pointer;
    }

    [data-bs-theme="light"] .project-card {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    [data-bs-theme="dark"] .project-card {
        background: rgba(45, 45, 45, 0.95);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        border: 2px solid rgba(255, 255, 255, 0.1);
    }

    .project-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--gradient-1);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 0;
    }

    .project-card:hover {
        transform: translateY(-20px) scale(1.03);
        box-shadow: 0 40px 90px var(--glow-purple);
    }

    .project-card:hover::before {
        opacity: 0.15;
    }

    .project-card .card-body {
        padding: 2.5rem;
        position: relative;
        z-index: 1;
    }

    .project-card .card-title {
        font-size: 1.8rem;
        font-weight: 800;
        margin-bottom: 1.2rem;
    }

    .project-placeholder {
        width: 100%;
        height: 250px;
        background: var(--gradient-1);
        background-size: 400% 400%;
        animation: gradient-move 8s ease infinite;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 5rem;
        color: white;
        position: relative;
        overflow: hidden;
    }

    @keyframes gradient-move {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    .project-placeholder::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        animation: shine-sweep 4s infinite;
    }

    @keyframes shine-sweep {
        0% {
            transform: translateX(-100%) translateY(-100%) rotate(45deg);
        }

        100% {
            transform: translateX(100%) translateY(100%) rotate(45deg);
        }
    }

    .contact-section {
        padding: 8rem 0;
        position: relative;
    }

    [data-bs-theme="light"] .contact-section {
        background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    }

    [data-bs-theme="dark"] .contact-section {
        background: linear-gradient(180deg, #1a1a2e 0%, #16213e 50%, #1a1a2e 100%);
    }

    .contact-wrapper {
        max-width: 850px;
        margin: 0 auto;
        text-align: center;
    }

    .contact-intro {
        font-size: 1.4rem;
        margin-bottom: 4rem;
        line-height: 2;
        font-weight: 400;
    }

    [data-bs-theme="light"] .contact-intro {
        color: #5a5a5a;
    }

    [data-bs-theme="dark"] .contact-intro {
        color: #d0d0d0;
    }

    @media (max-width: 768px) {
        .hero {
            min-height: auto;
            padding: 6rem 0;
        }

        .hello-font {
            font-size: 3rem;
        }

        .wave {
            font-size: 2.5rem;
        }

        .bling {
            font-size: 1.5rem;
        }

        .hero-img {
            max-height: 400px;
            margin-top: 3rem;
            margin-left: 0;
        }

        .about-section,
        .projects-section,
        .contact-section {
            padding: 5rem 0;
        }

        .section-title::after {
            right: 10px;
            font-size: 2rem;
        }

        .project-placeholder {
            height: 200px;
            font-size: 3.5rem;
        }
    }
</style> --}}
