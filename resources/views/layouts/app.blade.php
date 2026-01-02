<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">

    <link id="favicon" rel="icon" type="image/png" href="{{ asset('favicon-light.png') }}"
        data-light="{{ asset('favicon-light.png') }}" data-dark="{{ asset('favicon-dark.png') }}">
    <title>@yield('title', 'My Portfolio')</title>
    
    <style>
        :root {
            --transition-speed: 0.4s;
            --header-height: 75px;
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --glow-primary: rgba(102, 126, 234, 0.5);
            --glow-secondary: rgba(240, 147, 251, 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
            position: relative;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Premium Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }

        [data-bs-theme="light"] ::-webkit-scrollbar-track {
            background: linear-gradient(180deg, #f8f9fa 0%, #e9ecef 100%);
        }

        [data-bs-theme="dark"] ::-webkit-scrollbar-track {
            background: linear-gradient(180deg, #1a1a1a 0%, #2d2d2d 100%);
        }

        [data-bs-theme="light"] ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 10px;
            border: 2px solid #f8f9fa;
        }

        [data-bs-theme="dark"] ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 10px;
            border: 2px solid #1a1a1a;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-gradient);
            transform: scale(1.1);
        }

        /* Enhanced Glassmorphic Navbar */
        #mainNavbar {
            height: var(--header-height);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            transition: all var(--transition-speed) cubic-bezier(0.4, 0, 0.2, 1);
            border: none !important;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        [data-bs-theme="light"] #mainNavbar {
            background: rgba(255, 255, 255, 0.85) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3) !important;
        }

        [data-bs-theme="dark"] #mainNavbar {
            background: rgba(26, 26, 26, 0.85) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
        }

        #mainNavbar.scrolled {
            box-shadow: 0 8px 40px rgba(102, 126, 234, 0.15);
            transform: translateY(0);
        }

        [data-bs-theme="light"] #mainNavbar.scrolled {
            background: rgba(255, 255, 255, 0.95) !important;
        }

        [data-bs-theme="dark"] #mainNavbar.scrolled {
            background: rgba(26, 26, 26, 0.95) !important;
        }

        /* Navbar Brand Enhancement */
        .navbar-brand {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all var(--transition-speed) ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
            filter: brightness(1.2);
        }

        /* Nav Links Enhancement */
        .navbar-nav .nav-link {
            font-weight: 600;
            font-size: 1rem;
            padding: 0.8rem 1.5rem !important;
            margin: 0 0.2rem;
            border-radius: 50px;
            transition: all var(--transition-speed) ease;
            position: relative;
            overflow: hidden;
        }

        [data-bs-theme="light"] .navbar-nav .nav-link {
            color: #4a4a4a;
        }

        [data-bs-theme="dark"] .navbar-nav .nav-link {
            color: #e0e0e0;
        }

        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: var(--primary-gradient);
            transform: translateX(-50%);
            transition: width var(--transition-speed) ease;
            border-radius: 3px;
        }

        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link.active::before {
            width: 60%;
        }

        .navbar-nav .nav-link:hover {
            transform: translateY(-2px);
        }

        [data-bs-theme="light"] .navbar-nav .nav-link:hover,
        [data-bs-theme="light"] .navbar-nav .nav-link.active {
            color: #667eea;
        }

        [data-bs-theme="dark"] .navbar-nav .nav-link:hover,
        [data-bs-theme="dark"] .navbar-nav .nav-link.active {
            color: #f093fb;
        }

        /* Premium Theme Toggle Button */
        #themeToggle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all var(--transition-speed) cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        [data-bs-theme="light"] #themeToggle {
            background: linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%);
            color: #2d3436;
        }

        [data-bs-theme="dark"] #themeToggle {
            background: linear-gradient(135deg, #a29bfe 0%, #6c5ce7 100%);
            color: #fff;
        }

        #themeToggle::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
        }

        #themeToggle:hover {
            transform: scale(1.15) rotate(20deg);
            box-shadow: 0 12px 35px var(--glow-primary);
        }

        #themeToggle:hover::before {
            opacity: 1;
        }

        #themeToggle:active {
            transform: scale(0.95) rotate(0deg);
        }

        /* Main content area */
        main {
            min-height: 100vh;
            padding-top: var(--header-height);
        }

        /* Enhanced page transitions */
        .page-transition {
            animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Gradient text utility */
        .gradient-text {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Enhanced card hover effects */
        .hover-lift {
            transition: all var(--transition-speed) cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 50px var(--glow-primary);
        }

        /* Premium Loading Spinner */
        .loading-spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.95);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            backdrop-filter: blur(10px);
        }

        [data-bs-theme="dark"] .loading-spinner {
            background: rgba(26, 26, 26, 0.95);
        }

        .loading-spinner .spinner-border {
            width: 4rem;
            height: 4rem;
            border-width: 0.4rem;
            border-color: var(--glow-primary);
            border-right-color: transparent;
            animation: spinner-rotate 1s linear infinite;
        }

        @keyframes spinner-rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Utility classes */
        .section-padding {
            padding: 100px 0;
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-speed) ease;
            box-shadow: 0 8px 25px var(--glow-primary);
            z-index: 999;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 15px 40px var(--glow-primary);
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .navbar-nav .nav-link {
                padding: 0.8rem 1rem !important;
                margin: 0.3rem 0;
            }

            .navbar-nav .nav-link::before {
                display: none;
            }
        }

        @media (max-width: 768px) {
            :root {
                --header-height: 65px;
            }

            .section-padding {
                padding: 60px 0;
            }

            #themeToggle {
                width: 45px;
                height: 45px;
                font-size: 1.2rem;
            }

            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }

            .navbar-brand {
                font-size: 1.3rem;
            }
        }

        /* Theme transition */
        body {
            transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease;
        }

        /* Selection color */
        ::selection {
            background: var(--glow-primary);
            color: white;
        }

        ::-moz-selection {
            background: var(--glow-primary);
            color: white;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <!-- Premium Loading Spinner -->
    <div id="loadingSpinner" class="loading-spinner d-none">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    @include('partials.nav')

    <main class="page-transition">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    @livewireScripts

    <script>
        // Theme Management
        const themeToggle = document.getElementById('themeToggle');
        const navbar = document.getElementById('mainNavbar');
        const currentTheme = localStorage.getItem('theme') || 'light';
        
        setTheme(currentTheme);

        themeToggle?.addEventListener('click', () => {
            const newTheme = document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
            setTheme(newTheme);
            localStorage.setItem('theme', newTheme);
        });

        function setTheme(mode) {
            document.documentElement.setAttribute('data-bs-theme', mode);
            if (themeToggle) {
                themeToggle.textContent = mode === 'dark' ? '🌙' : '☀️';
            }
            
            navbar?.classList.toggle('navbar-dark', mode === 'dark');
            navbar?.classList.toggle('navbar-light', mode === 'light');

            // Update all theme-aware images
            document.querySelectorAll("img[data-light][data-dark]").forEach(img => {
                img.src = img.dataset[mode];
            });

            // Update favicon
            const favicon = document.getElementById('favicon');
            if (favicon) {
                favicon.href = mode === 'dark' ? favicon.dataset.dark : favicon.dataset.light;
            }
        }

        // Enhanced navbar scroll effect
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                navbar?.classList.add('scrolled');
            } else {
                navbar?.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    const offset = document.querySelector('#mainNavbar')?.offsetHeight || 0;
                    const targetPosition = target.offsetTop - offset;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Back to top button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop?.classList.add('show');
            } else {
                backToTop?.classList.remove('show');
            }
        });

        backToTop?.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Loading spinner helpers
        function showLoading() {
            document.getElementById('loadingSpinner')?.classList.remove('d-none');
        }

        function hideLoading() {
            document.getElementById('loadingSpinner')?.classList.add('d-none');
        }

        // Hide loading on page load
        window.addEventListener('load', () => {
            setTimeout(hideLoading, 300);
        });

        // Active nav link on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.pageYOffset >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120,
            easing: 'ease-out-cubic',
            delay: 100
        });
    </script>

    @stack('scripts')
</body>

</html>