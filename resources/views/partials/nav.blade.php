
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