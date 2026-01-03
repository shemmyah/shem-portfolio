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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">

    <link id="favicon" rel="icon" type="image/png" href="{{ asset('favicon-light.png') }}"
        data-light="{{ asset('favicon-light.png') }}" data-dark="{{ asset('favicon-dark.png') }}">
    <title>@yield('title', 'My Portfolio')</title>


    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @livewireStyles
</head>

<body>
    {{-- <div id="loadingSpinner" class="loading-spinner d-none">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div> --}}

    @include('partials.nav')

    <main class="page-transition">
        @yield('content')
    </main>

    @include('partials.footer')

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

        function showLoading() {
            document.getElementById('loadingSpinner')?.classList.remove('d-none');
        }

        function hideLoading() {
            document.getElementById('loadingSpinner')?.classList.add('d-none');
        }

        window.addEventListener('load', () => {
            setTimeout(hideLoading, 300);
        });

    
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