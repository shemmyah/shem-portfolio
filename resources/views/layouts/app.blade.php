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
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=DM+Serif+Display&family=Great+Vibes&family=Italianno&family=Lora:ital@1&family=Merriweather:ital@1&family=Pacifico&family=Playfair+Display:ital@1&family=Quintessential&family=Raleway:ital@1&family=Satisfy&display=swap"
        rel="stylesheet">
    <title>My Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body>

    @include('partials.nav')

    <main>
        @yield('content')
    </main>


    @include('partials.footer')

    @livewireScripts

    <script>
        const themeToggle = document.getElementById('themeToggle');
        const navbar = document.getElementById('mainNavbar');
        const logo = document.getElementById('themeLogo');
        const heroImage = document.getElementById('heroImage');
        const helloEl = document.getElementById('helloText');

        const currentTheme = localStorage.getItem('theme') || 'light';
        setTheme(currentTheme);

        themeToggle.addEventListener('click', () => {
            const newTheme = document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
            setTheme(newTheme);
            localStorage.setItem('theme', newTheme);
        });

        function setTheme(mode) {
            document.documentElement.setAttribute('data-bs-theme', mode);

       
            themeToggle.textContent = mode === 'dark' ? '⁺₊⋆ 𖤓 ⋆⁺₊' : '⁺₊⋆ ⏾ ⋆⁺₊';

  
            navbar.className =
                `navbar navbar-expand-lg ${mode === 'dark' ? 'navbar-dark bg-dark' : 'navbar-light bg-light border-bottom'}`;


            logo.src = logo.dataset[mode];

            
            if (heroImage) {
                heroImage.src = heroImage.dataset[mode];
            }
        }
        const fonts = [
            "'Dancing Script', cursive",
            "'Lora', serif",
            "'Playfair Display', serif",
            "'Italianno', cursive",
            "'Great Vibes', cursive",
            "'Quintessential', cursive",
            "'Merriweather', serif",
            "'DM Serif Display', serif",
            "'Satisfy', cursive",
            "'Raleway', sans-serif"
        ];


        let currentFont = 0;

        function cycleFont() {
            helloEl.style.fontFamily = fonts[currentFont];
            currentFont = (currentFont + 1) % fonts.length;
        }

        setInterval(cycleFont, 0209);
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>

</body>

</html>
