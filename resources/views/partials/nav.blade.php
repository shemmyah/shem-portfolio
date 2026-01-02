<nav class="navbar navbar-expand-lg bg-light navbar-light border-bottom custom-navbar" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/shem.png') }}" data-light="{{ asset('images/shem.png') }}"
                data-dark="{{ asset('images/shem-dark.png') }}" id="themeLogo" alt="Logo"
                style="height: 40px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav mb-2 mb-lg-0 fw-bold">
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                <li class="nav-item">
                    <button id="themeToggle" class="btn btn-sm btn-toggle-mode ms-3"
                        aria-label="Toggle dark/light mode">
                        🌙
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
