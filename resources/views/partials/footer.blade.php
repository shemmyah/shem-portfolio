<style>
    /* Footer Styles */
    .footer {
        position: relative;
        overflow: hidden;
        padding: 4rem 0 2rem;
        margin-top: 5rem;
    }

    [data-bs-theme="light"] .footer {
        background: linear-gradient(180deg, #f8f9fa 0%, #e9ecef 100%);
        border-top: 3px solid transparent;
        border-image: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        border-image-slice: 1;
    }

    [data-bs-theme="dark"] .footer {
        background: linear-gradient(180deg, #1a1a2e 0%, #16213e 100%);
        border-top: 3px solid transparent;
        border-image: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        border-image-slice: 1;
    }

    /* Animated gradient background */
    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100%;
        background: radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 80% 50%, rgba(240, 147, 251, 0.1) 0%, transparent 50%);
        animation: pulse-gradient 8s ease-in-out infinite;
        z-index: 0;
    }

    @keyframes pulse-gradient {
        0%, 100% { opacity: 0.5; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.1); }
    }

    .footer-content {
        position: relative;
        z-index: 1;
    }

    /* Footer Brand */
    .footer-brand {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 2rem;
        font-weight: 800;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
        display: inline-block;
    }

    /* Footer Description */
    .footer-description {
        font-size: 1.1rem;
        margin-bottom: 2.5rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.8;
    }

    [data-bs-theme="light"] .footer-description {
        color: #6c757d;
    }

    [data-bs-theme="dark"] .footer-description {
        color: #adb5bd;
    }

    /* Social Links */
    .social-links {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-bottom: 2.5rem;
        flex-wrap: wrap;
    }

    .social-link {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        text-decoration: none;
    }

    [data-bs-theme="light"] .social-link {
        background: #ffffff;
        color: #667eea;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        border: 2px solid #e9ecef;
    }

    [data-bs-theme="dark"] .social-link {
        background: #2d2d2d;
        color: #f093fb;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        border: 2px solid #3d3d3d;
    }

    .social-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .social-link:hover {
        transform: translateY(-8px) scale(1.1);
        box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
        color: white;
        border-color: transparent;
    }

    .social-link:hover::before {
        opacity: 1;
    }

    /* Quick Links */
    .footer-links {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 2.5rem;
        flex-wrap: wrap;
    }

    .footer-link {
        font-size: 1rem;
        font-weight: 600;
        text-decoration: none;
        position: relative;
        padding: 0.5rem 0;
        transition: all 0.3s ease;
    }

    [data-bs-theme="light"] .footer-link {
        color: #495057;
    }

    [data-bs-theme="dark"] .footer-link {
        color: #adb5bd;
    }

    .footer-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        transform: translateX(-50%);
        transition: width 0.3s ease;
    }

    .footer-link:hover {
        color: #667eea;
    }

    .footer-link:hover::after {
        width: 100%;
    }

    /* Divider */
    .footer-divider {
        width: 80%;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, #667eea 50%, transparent 100%);
        margin: 2rem auto;
        opacity: 0.5;
    }

    /* Copyright */
    .footer-copyright {
        font-size: 0.95rem;
        font-weight: 500;
        position: relative;
    }

    [data-bs-theme="light"] .footer-copyright {
        color: #6c757d;
    }

    [data-bs-theme="dark"] .footer-copyright {
        color: #adb5bd;
    }

    .footer-copyright .heart {
        display: inline-block;
        color: #f5576c;
        animation: heartbeat 1.5s ease-in-out infinite;
        margin: 0 0.3rem;
    }

    @keyframes heartbeat {
        0%, 100% { transform: scale(1); }
        25% { transform: scale(1.2); }
        50% { transform: scale(1); }
    }

    .footer-copyright .sparkle {
        display: inline-block;
        animation: twinkle 2s ease-in-out infinite;
        margin: 0 0.3rem;
    }

    @keyframes twinkle {
        0%, 100% { opacity: 1; transform: scale(1) rotate(0deg); }
        50% { opacity: 0.5; transform: scale(1.3) rotate(180deg); }
    }

    /* Back to top mini button in footer */
    .footer-back-top {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8rem 1.5rem;
        border-radius: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        margin-top: 1.5rem;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    }

    .footer-back-top:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(102, 126, 234, 0.5);
        color: white;
    }

    .footer-back-top i {
        animation: bounce-up 2s ease-in-out infinite;
    }

    @keyframes bounce-up {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .footer {
            padding: 3rem 0 1.5rem;
            margin-top: 3rem;
        }

        .footer-brand {
            font-size: 1.6rem;
        }

        .footer-description {
            font-size: 1rem;
            padding: 0 1rem;
        }

        .social-links {
            gap: 1rem;
        }

        .social-link {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }

        .footer-links {
            gap: 1rem;
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<footer class="footer">
    <div class="container">
        <div class="footer-content text-center">

            <h3 class="footer-brand">Shem</h3>
            
            <p class="footer-description">
                Building beautiful web experiences, one line of code at a time. 
                Let's create something amazing together! ✨
            </p>

            <div class="social-links">
                <a href="https://github.com/yourusername" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://linkedin.com/in/yourusername" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://twitter.com/yourusername" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="mailto:your.email@example.com" class="social-link" aria-label="Email">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <a href="#hero" class="footer-link">Home</a>
                <a href="#about" class="footer-link">About</a>
                <a href="#projects" class="footer-link">Projects</a>
                <a href="#contact" class="footer-link">Contact</a>
            </div>

            <!-- Back to Top -->
            <a href="#hero" class="footer-back-top">
                <i class="fas fa-arrow-up"></i>
                Back to Top
            </a>

            <div class="footer-divider"></div>

            <div class="footer-copyright">
                <p class="mb-0">
                    &copy; {{ date('Y') }} Shem. Made with 
                    <span class="heart">❤️</span> and 
                    <span class="sparkle">✨</span>
                </p>
                <small class="d-block mt-2" style="opacity: 0.7;">
                    All rights reserved.
                </small>
            </div>
        </div>
    </div>
</footer>