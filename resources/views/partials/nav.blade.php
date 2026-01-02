<style>
    /* Navigation Styles */
    .custom-navbar {
        height: 75px;
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: none !important;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        padding: 0.8rem 0;
    }

    [data-bs-theme="light"] .custom-navbar {
        background: rgba(255, 255, 255, 0.85) !important;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
        border-bottom: 1px solid rgba(102, 126, 234, 0.1) !important;
    }

    [data-bs-theme="dark"] .custom-navbar {
        background: rgba(26, 26, 26, 0.85) !important;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        border-bottom: 1px solid rgba(240, 147, 251, 0.2) !important;
    }

    .custom-navbar.scrolled {
        box-shadow: 0 8px 40px rgba(102, 126, 234, 0.2);
        height: 70px;
    }

    [data-bs-theme="light"] .custom-navbar.scrolled {
        background: rgba(255, 255, 255, 0.95) !important;
    }

    [data-bs-theme="dark"] .custom-navbar.scrolled {
        background: rgba(26, 26, 26, 0.95) !important;
    }

    /* Logo Styling */
    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        transition: transform 0.3s ease;
        padding: 0.5rem 0;
    }

    .navbar-brand:hover {
        transform: scale(1.05);
    }

    .navbar-brand img {
        height: 45px;
        transition: all 0.3s ease;
        filter: drop-shadow(0 2px 8px rgba(102, 126, 234, 0.2));
    }

    .navbar-brand:hover img {
        filter: drop-shadow(0 4px 12px rgba(102, 126, 234, 0.4));
    }

    /* Navigation Links */
    .navbar-nav {
        align-items: center;
        gap: 0.5rem;
    }

    .navbar-nav .nav-link {
        font-weight: 600;
        font-size: 1rem;
        padding: 0.8rem 1.5rem !important;
        margin: 0 0.2rem;
        border-radius: 50px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        text-transform: capitalize;
        letter-spacing: 0.5px;
    }

    [data-bs-theme="light"] .navbar-nav .nav-link {
        color: #4a4a4a;
    }

    [data-bs-theme="dark"] .navbar-nav .nav-link {
        color: #e0e0e0;
    }

    /* Animated underline */
    .navbar-nav .nav-link::before {
        content: '';
        position: absolute;
        bottom: 8px;
        left: 50%;
        width: 0;
        height: 3px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        transform: translateX(-50%);
        transition: width 0.3s ease;
        border-radius: 3px;
    }

    .navbar-nav .nav-link:hover::before,
    .navbar-nav .nav-link.active::before {
        width: 60%;
    }

    /* Hover background effect */
    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
        border-radius: 50px;
    }

    .navbar-nav .nav-link:hover::after {
        opacity: 1;
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

    /* Theme Toggle Button */
    .btn-toggle-mode {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        font-size: 1.4rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        margin-left: 1rem !important;
    }

    [data-bs-theme="light"] .btn-toggle-mode {
        background: linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%);
        color: #2d3436;
    }

    [data-bs-theme="dark"] .btn-toggle-mode {
        background: linear-gradient(135deg, #a29bfe 0%, #6c5ce7 100%);
        color: #fff;
    }

    .btn-toggle-mode::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .btn-toggle-mode:hover {
        transform: scale(1.15) rotate(20deg);
        box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
    }

    .btn-toggle-mode:hover::before {
        opacity: 1;
    }

    .btn-toggle-mode:active {
        transform: scale(0.95) rotate(0deg);
    }

    /* Navbar Toggler for Mobile */
    .navbar-toggler {
        border: 2px solid;
        border-radius: 12px;
        padding: 0.5rem 0.75rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    [data-bs-theme="light"] .navbar-toggler {
        border-color: #667eea;
    }

    [data-bs-theme="dark"] .navbar-toggler {
        border-color: #f093fb;
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }

    .navbar-toggler:hover {
        transform: scale(1.05);
    }

    /* Animated hamburger icon */
    .navbar-toggler-icon {
        background-image: none;
        width: 24px;
        height: 18px;
        position: relative;
        transition: all 0.3s ease;
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after,
    .navbar-toggler-icon {
        display: block;
        position: absolute;
        width: 100%;
        height: 3px;
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    [data-bs-theme="light"] .navbar-toggler-icon::before,
    [data-bs-theme="light"] .navbar-toggler-icon::after,
    [data-bs-theme="light"] .navbar-toggler-icon {
        background: #667eea;
    }

    [data-bs-theme="dark"] .navbar-toggler-icon::before,
    [data-bs-theme="dark"] .navbar-toggler-icon::after,
    [data-bs-theme="dark"] .navbar-toggler-icon {
        background: #f093fb;
    }

    .navbar-toggler-icon::before {
        content: '';
        top: 0;
    }

    .navbar-toggler-icon::after {
        content: '';
        bottom: 0;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
        background: transparent;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
        transform: rotate(45deg);
        top: 50%;
        margin-top: -1.5px;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
        transform: rotate(-45deg);
        bottom: 50%;
        margin-bottom: -1.5px;
    }

    /* Mobile Menu */
    @media (max-width: 991px) {
        .navbar-collapse {
            margin-top: 1rem;
            padding: 1.5rem;
            border-radius: 20px;
        }

        [data-bs-theme="light"] .navbar-collapse {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        [data-bs-theme="dark"] .navbar-collapse {
            background: rgba(45, 45, 45, 0.95);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .navbar-nav {
            gap: 0.5rem;
        }

        .navbar-nav .nav-link {
            padding: 1rem 1.5rem !important;
            margin: 0.2rem 0;
            text-align: left;
        }

        .navbar-nav .nav-link::before {
            left: 1.5rem;
            transform: none;
        }

        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link.active::before {
            width: 40px;
        }

        .btn-toggle-mode {
            margin: 1rem auto 0 !important;
        }
    }

    @media (max-width: 768px) {
        .custom-navbar {
            height: 65px;
        }

        .navbar-brand img {
            height: 38px;
        }

        .btn-toggle-mode {
            width: 45px;
            height: 45px;
            font-size: 1.2rem;
        }
    }

    /* Fade in animation for mobile menu */
    .navbar-collapse.collapsing,
    .navbar-collapse.show {
        animation: fadeInDown 0.3s ease-out;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar" id="mainNavbar">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#hero">
            <img src="{{ asset('images/shem.png') }}" 
                 data-light="{{ asset('images/shem.png') }}"
                 data-dark="{{ asset('images/shem-dark.png') }}" 
                 id="themeLogo" 
                 alt="Shem Logo">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarContent"
                aria-controls="navbarContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#hero" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <button id="themeToggle" 
                            class="btn btn-toggle-mode"
                            aria-label="Toggle dark/light mode">
                        ☀️
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>