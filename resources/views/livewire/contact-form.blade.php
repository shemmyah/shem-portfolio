<div>
    <style>
        /* Contact Form Styles */
        .contact-form-wrapper {
            max-width: 700px;
            margin: 0 auto;
        }

        /* Success Alert Animation */
        .alert-success-custom {
            padding: 1.5rem 2rem;
            border-radius: 20px;
            border: none;
            margin-bottom: 2rem;
            animation: slideInDown 0.5s ease-out;
            position: relative;
            overflow: hidden;
        }

        [data-bs-theme="light"] .alert-success-custom {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            box-shadow: 0 10px 30px rgba(21, 87, 36, 0.15);
        }

        [data-bs-theme="dark"] .alert-success-custom {
            background: linear-gradient(135deg, #1e4620 0%, #2d5a2f 100%);
            color: #d4edda;
            box-shadow: 0 10px 30px rgba(21, 87, 36, 0.3);
        }

        .alert-success-custom::before {
            content: '✓';
            position: absolute;
            left: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            font-weight: bold;
            color: #28a745;
        }

        .alert-success-custom .alert-content {
            margin-left: 2.5rem;
            font-weight: 600;
            font-size: 1.1rem;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Form Container */
        .contact-form-container {
            padding: 3rem;
            border-radius: 30px;
            position: relative;
            overflow: hidden;
        }

        [data-bs-theme="light"] .contact-form-container {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border: 2px solid rgba(102, 126, 234, 0.1);
        }

        [data-bs-theme="dark"] .contact-form-container {
            background: rgba(45, 45, 45, 0.9);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            border: 2px solid rgba(102, 126, 234, 0.2);
        }

        /* Gradient overlay */
        .contact-form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }

        /* Form Groups */
        .form-group-custom {
            margin-bottom: 2rem;
            position: relative;
        }

        /* Enhanced Input Fields */
        .form-control-custom {
            width: 100%;
            padding: 1.2rem 1.5rem;
            font-size: 1.05rem;
            border-radius: 15px;
            border: 2px solid transparent;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-family: 'Inter', sans-serif;
        }

        [data-bs-theme="light"] .form-control-custom {
            background: #f8f9fa;
            color: #2d3436;
            border-color: #e9ecef;
        }

        [data-bs-theme="dark"] .form-control-custom {
            background: #2d2d2d;
            color: #e0e0e0;
            border-color: #3d3d3d;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 8px 30px rgba(102, 126, 234, 0.2);
            transform: translateY(-2px);
        }

        [data-bs-theme="light"] .form-control-custom:focus {
            background: #ffffff;
        }

        [data-bs-theme="dark"] .form-control-custom:focus {
            background: #3d3d3d;
        }

        .form-control-custom::placeholder {
            color: #adb5bd;
            font-weight: 500;
        }

        /* Textarea specific */
        .form-control-custom.textarea {
            min-height: 180px;
            resize: vertical;
            font-family: 'Inter', sans-serif;
            line-height: 1.8;
        }

        /* Floating labels effect */
        .form-label-custom {
            position: absolute;
            left: 1.5rem;
            top: 1.2rem;
            font-size: 1.05rem;
            font-weight: 600;
            color: #adb5bd;
            pointer-events: none;
            transition: all 0.3s ease;
            background: transparent;
            padding: 0 0.5rem;
        }

        .form-control-custom:focus + .form-label-custom,
        .form-control-custom:not(:placeholder-shown) + .form-label-custom {
            top: -0.7rem;
            left: 1rem;
            font-size: 0.85rem;
            color: #667eea;
        }

        [data-bs-theme="light"] .form-control-custom:focus + .form-label-custom,
        [data-bs-theme="light"] .form-control-custom:not(:placeholder-shown) + .form-label-custom {
            background: #ffffff;
        }

        [data-bs-theme="dark"] .form-control-custom:focus + .form-label-custom,
        [data-bs-theme="dark"] .form-control-custom:not(:placeholder-shown) + .form-label-custom {
            background: #2d2d2d;
        }

        /* Error Messages */
        .error-message {
            display: block;
            margin-top: 0.6rem;
            font-size: 0.9rem;
            color: #dc3545;
            font-weight: 600;
            animation: shake 0.3s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        /* Submit Button */
        .btn-submit-custom {
            width: 100%;
            padding: 1.3rem 2rem;
            font-size: 1.15rem;
            font-weight: 700;
            border-radius: 50px;
            border: none;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
        }

        .btn-submit-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            transition: left 0.5s ease;
            z-index: 0;
        }

        .btn-submit-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(102, 126, 234, 0.5);
        }

        .btn-submit-custom:hover::before {
            left: 0;
        }

        .btn-submit-custom:active {
            transform: translateY(-2px);
        }

        .btn-submit-custom span {
            position: relative;
            z-index: 1;
        }

        /* Loading State */
        .btn-submit-custom:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .btn-submit-custom:disabled:hover {
            transform: none;
        }

        /* Icon additions */
        .input-icon {
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
            font-size: 1.2rem;
            pointer-events: none;
            transition: color 0.3s ease;
        }

        .form-control-custom:focus ~ .input-icon {
            color: #667eea;
        }

        .has-icon .form-control-custom {
            padding-left: 3.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-form-container {
                padding: 2rem 1.5rem;
            }

            .form-control-custom {
                padding: 1rem 1.2rem;
                font-size: 1rem;
            }

            .btn-submit-custom {
                padding: 1.1rem 1.5rem;
                font-size: 1rem;
            }
        }
    </style>

    <div class="contact-form-wrapper">
        @if (session()->has('success'))
            <div class="alert-success-custom">
                <div class="alert-content">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <div class="contact-form-container">
            <form wire:submit.prevent="submit">
                <!-- Name Field -->
                <div class="form-group-custom has-icon">
                    <i class="fas fa-user input-icon"></i>
                    <input 
                        type="text" 
                        wire:model="name" 
                        class="form-control-custom" 
                        placeholder=" "
                        id="name"
                    >
                    <label for="name" class="form-label-custom px-4">Your Name</label>
                    @error('name') 
                        <small class="error-message">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </small> 
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="form-group-custom has-icon">
                    <i class="fas fa-envelope input-icon"></i>
                    <input 
                        type="email" 
                        wire:model="email" 
                        class="form-control-custom" 
                        placeholder=" "
                        id="email"
                    >
                    <label for="email" class="form-label-custom px-4">Your Email</label>
                    @error('email') 
                        <small class="error-message">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </small> 
                    @enderror
                </div>

                <!-- Message Field -->
                <div class="form-group-custom">
                    <textarea 
                        wire:model="message" 
                        class="form-control-custom textarea" 
                        placeholder=" "
                        id="message"
                    ></textarea>
                    <label for="message" class="form-label-custom">Your Message</label>
                    @error('message') 
                        <small class="error-message">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </small> 
                    @enderror
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="btn-submit-custom"
                    wire:loading.attr="disabled"
                >
                    <span wire:loading.remove>
                        <i class="fas fa-paper-plane"></i> Send Message
                    </span>
                    <span wire:loading>
                        <i class="fas fa-spinner fa-spin"></i> Sending...
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>