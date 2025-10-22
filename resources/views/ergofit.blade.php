<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERGOFIT - Revolusi Kesehatan Kerja Digital</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary-color: #f1f5f9;
            --accent-color: #10b981;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-accent: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --shadow-soft: 0 10px 25px rgba(0,0,0,0.1);
            --shadow-medium: 0 20px 40px rgba(0,0,0,0.1);
            --border-radius: 20px;
            --section-padding: 100px 0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .section {
            padding: var(--section-padding);
        }

        /* Navigation */
        .navbar {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95) !important;
            transition: all 0.3s ease;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .navbar.scrolled {
            padding: 0.7rem 0;
            box-shadow: var(--shadow-soft);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.75rem;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 50px;
            width: auto;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        .navbar.scrolled .navbar-brand img {
            height: 42px;
        }

        .navbar-nav {
            gap: 0.5rem;
        }

        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 1rem !important;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 80%;
        }

        .btn-cta {
            background: var(--gradient-primary);
            border: none;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }

        .btn-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding: 120px 0 80px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.1)" points="0,0 1000,300 1000,1000 0,700"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            color: white;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: clamp(1rem, 2vw, 1.25rem);
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            font-weight: 400;
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 2.5rem;
        }

        .btn-hero {
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .btn-outline-light:hover {
            background: white;
            color: var(--primary-color);
            border-color: white;
        }

        .hero-stats {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: var(--border-radius);
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-item {
            text-align: center;
            color: white;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            display: block;
            color: #fbbf24;
            margin-bottom: 0.5rem;
        }

        .stat-item small {
            font-size: 0.9rem;
            opacity: 0.9;
            display: block;
        }

        .hero-image {
            position: relative;
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Section Titles */
        .section-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            font-size: clamp(1rem, 2vw, 1.2rem);
            color: var(--text-light);
            text-align: center;
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Cards */
        .modern-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--shadow-soft);
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .modern-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            flex-shrink: 0;
        }

        .card-icon i {
            font-size: 2rem;
            color: white;
        }

        .modern-card h4 {
            margin-bottom: 1rem;
            color: var(--text-dark);
            font-weight: 600;
            font-size: 1.25rem;
        }

        .modern-card p {
            margin-bottom: 0;
            flex-grow: 1;
        }

        /* Problem Section */
        .problem-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            position: relative;
        }

        .problem-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .problem-stat {
            background: white;
            border-radius: 15px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: var(--shadow-soft);
            transition: all 0.3s ease;
        }

        .problem-stat:hover {
            transform: translateY(-5px);
        }

        .problem-stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ef4444;
            display: block;
            margin-bottom: 0.5rem;
        }

        .problem-stat p {
            margin-bottom: 0;
            font-size: 0.95rem;
        }

        /* Features */
        .feature-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2.5rem 2rem;
            text-align: center;
            box-shadow: var(--shadow-soft);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-medium);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: var(--gradient-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            flex-shrink: 0;
        }

        .feature-icon i {
            font-size: 1.8rem;
            color: white;
        }

        .feature-card h4 {
            margin-bottom: 1rem;
            font-weight: 600;
            font-size: 1.25rem;
        }

        .feature-card p {
            flex-grow: 1;
            margin-bottom: 0;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding: 2rem 0;
            max-width: 1000px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--gradient-primary);
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
        }

        .timeline-content {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-soft);
            width: 45%;
            position: relative;
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }

        .timeline-icon {
            position: absolute;
            left: 50%;
            top: 20px;
            transform: translateX(-50%);
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            border: 4px solid white;
            box-shadow: var(--shadow-soft);
        }

        .timeline-icon i {
            font-size: 1.5rem;
            color: white;
        }

        .timeline-content h4 {
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-weight: 600;
            font-size: 1.25rem;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            position: relative;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(59,130,246,0.1)" points="0,0 1000,200 1000,1000 0,800"/></svg>');
            background-size: cover;
        }

        .contact-section .section-title {
            background: linear-gradient(135deg, #ffffff 0%, #e2e8f0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: white;
        }

        .contact-section .section-subtitle {
            color: rgba(255, 255, 255, 0.9);
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius);
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: white;
            padding: 15px 20px;
            transition: all 0.3s ease;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: white;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.1);
            color: white;
        }

        /* Dropdown select styling */
        .form-control option {
            background: white;
            color: #1e293b;
            padding: 10px;
        }

        .form-control option:hover {
            background: #f1f5f9;
        }

        .contact-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .contact-info-item {
            text-align: center;
        }

        .contact-info-text {
            color: rgba(255, 255, 255, 0.8) !important;
            margin-bottom: 0;
        }

        /* Footer */
        .footer {
            background: #0f172a;
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .footer-section h5 {
            color: white;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .footer-section p {
            color: #cbd5e1 !important;
            opacity: 0.9;
        }

        .footer-link {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.3s ease;
            display: block;
            margin-bottom: 0.8rem;
            padding: 0.2rem 0;
        }

        .footer-link:hover {
            color: white;
        }

        .social-icons {
            display: flex;
            gap: 12px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: var(--gradient-primary);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }

            .timeline::before {
                left: 30px;
            }
            
            .timeline-content {
                width: calc(100% - 80px);
                margin-left: 80px !important;
            }
            
            .timeline-icon {
                left: 30px;
                width: 50px;
                height: 50px;
            }

            .timeline-icon i {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 768px) {
            :root {
                --section-padding: 60px 0;
            }

            .hero-section {
                padding: 100px 0 60px;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-stats {
                padding: 1.5rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .problem-stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }

            .navbar-brand img {
                height: 40px;
            }

            .navbar.scrolled .navbar-brand img {
                height: 35px;
            }

            .contact-form {
                padding: 2rem 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .hero-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn-hero {
                width: 100%;
                text-align: center;
            }

            .problem-stats-grid {
                grid-template-columns: 1fr;
            }

            .navbar-brand img {
                height: 35px;
            }
        }

        /* Loading Animation */
        .loading-bar {
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 2px;
            margin-top: 15px;
            animation: loading 2s ease-in-out infinite;
        }

        @keyframes loading {
            0%, 100% { transform: scaleX(0.3); }
            50% { transform: scaleX(1); }
        }

        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .bg-gradient {
            background: var(--gradient-primary);
        }

        .shadow-custom {
            box-shadow: var(--shadow-soft);
        }

        /* Partner Cards Hover Effect */
        #collaboration .h-100:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15) !important;
            border-color: var(--primary-color) !important;
        }

        #collaboration .h-100 {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Partner Logo Styles */
        .partner-logo-container {
            transition: all 0.3s ease;
        }

        #collaboration .h-100:hover .partner-logo-container {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
        }

        .partner-logo {
            transition: all 0.3s ease;
            filter: grayscale(0%);
        }

        /* Optional: Grayscale effect when not hovering */
        #collaboration .h-100:not(:hover) .partner-logo {
            filter: grayscale(20%);
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand font-poppins" href="#home">
                <img src="./logo_ergofit.png" alt="ERGOFIT Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#solution">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">How it Works</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#collaboration">Collaboration</a></li>
                </ul>
                <div class="d-flex">
                    <a href="#contact" class="btn btn-cta text-white">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title font-poppins" data-aos="fade-up">
                        Precision in <span style="color: #fbbf24;">Every Motion</span>
                    </h1>
                    <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                        The first intelligent platform in Indonesia that prevents Musculoskeletal Disorders (MSDs) in real time using advanced sensor technology and machine learning algorithms.
                    </p>
                    <div class="hero-buttons" data-aos="fade-up" data-aos-delay="400">
                        <a href="#solution" class="btn btn-light btn-hero">
                            <i class="bi bi-play-circle me-2"></i>View Demo
                        </a>
                        <a href="#contact" class="btn btn-outline-light btn-hero">
                            <i class="bi bi-calendar-check me-2"></i>Customer Service
                        </a>
                    </div>
                    
                    <div class="hero-stats" data-aos="fade-up" data-aos-delay="600">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="stat-item">
                                    <span class="stat-number">70%</span>
                                    <small>Work-related diseases are MSDs</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item">
                                    <span class="stat-number">95%</span>
                                    <small>Accuracy Detection</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="hero-image text-center">
                        <div class="floating">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&h=400&fit=crop&crop=center" 
                                 class="img-fluid rounded-4 shadow" alt="ERGOFIT Technology" style="border-radius: 30px; max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title text-start">About ERGOFIT</h2>
                    <p class="text-muted mb-4">
                        ErgoFit emerges as an innovative solution to address occupational health challenges in the era of Industry 4.0. By integrating IoT technology, AI, and ergonomic expertise, we create a proactive and adaptive workplace health ecosystem.
                    </p>
                    <div class="row g-3 mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <div class="card-icon me-3" style="width: 60px; height: 60px;">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Data Security</h6>
                                    <small class="text-muted">Guaranteed Data Security</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="modern-card text-center">
                                <div style="width: 50px; height: 50px; background: var(--gradient-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                    <i class="bi bi-hand-thumbs-up" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h6 class="mb-0">User Friendly</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="modern-card text-center">
                                <div style="width: 50px; height: 50px; background: var(--gradient-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                    <i class="bi bi-wallet2" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h6 class="mb-0">Affordable</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="modern-card text-center">
                                <div style="width: 50px; height: 50px; background: var(--gradient-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                    <i class="bi bi-display" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h6 class="mb-0">Enhanced with Visual Display and Audio Alert</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="modern-card text-center">
                                <div style="width: 50px; height: 50px; background: var(--gradient-primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                                    <i class="bi bi-headset" style="font-size: 1.5rem; color: white;"></i>
                                </div>
                                <h6 class="mb-0">Support Team</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="section problem-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Occupational health challenges in Indonesia</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
                Musculoskeletal disorders have become a serious threat to the productivity and well-being of Indonesian workers
            </p>
            
            <div class="problem-stats-grid" data-aos="fade-up" data-aos-delay="300">
                <div class="problem-stat">
                    <span class="problem-stat-number">70%</span>
                    <p>Work-related diseases are MSD</p>
                </div>
                <div class="problem-stat">
                    <span class="problem-stat-number">40%</span>
                    <p>Productivity decline</p>
                </div>
                <div class="problem-stat">
                    <span class="problem-stat-number">15M</span>
                    <p>Lost workdays per year</p>
                </div>
                <div class="problem-stat">
                    <span class="problem-stat-number">2.5T</span>
                    <p>Economic loss (in rupiah)</p>
                </div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=600&h=400&fit=crop" 
                         class="img-fluid rounded-4 shadow" alt="Workplace Problems">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h3 class="mb-4">The Impact of MSDs on Industry</h3>
                    <div class="modern-card">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <i class="bi bi-x-circle-fill text-danger me-3"></i>
                                <strong>Physical Discomfort at Work</strong> - Workers feel pain and stiffness that make daily tasks difficult and reduce comfort while working
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-x-circle-fill text-danger me-3"></i>
                                <strong>Decline in Work Productivity</strong> - Pain limits movement and slows performance, leading to delays and lower work quality.
                            </li>
                            <li class="mb-0">
                                <i class="bi bi-x-circle-fill text-danger me-3"></i>
                                <strong>Significant Economic Impact</strong> - Companies spend more on medical treatment, employee absence, and compensation costs.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section id="solution" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">ErgoFit: A Smart and Proactive Solution</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
                A revolutionary technology that integrates IoT, AI, and ergonomic expertise to prevent MSDs before they occur
            </p>

            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="modern-card">
                        <h3 class="mb-3">A Proactive, Not Reactive Approach</h3>
                        <p class="text-muted mb-4">
                            ERGOFIT uses advanced IMU sensors and machine learning algorithms for real-time posture monitoring. The system provides instant feedback to prevent MSDs before they develop into serious injuries.
                        </p>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="bi bi-lightning-charge text-primary" style="font-size: 2rem;"></i>
                                    <h6 class="mt-2 mb-0">Real-time</h6>
                                    <small class="text-muted">Monitoring 24/7</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="bi bi-cpu text-success" style="font-size: 2rem;"></i>
                                    <h6 class="mt-2 mb-0">AI-Powered</h6>
                                    <small class="text-muted">Machine Learning</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="loading-bar"></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&h=400&fit=crop" 
                         class="img-fluid rounded-4 shadow" alt="ERGOFIT Dashboard">
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="modern-card text-center">
                        <div class="card-icon mx-auto">
                            <i class="bi bi-hdd-stack"></i>
                        </div>
                        <h4>Advanced IoT Sensor</h4>
                        <p class="text-muted">A miniature, lightweight, and wireless IMU sensor for high-accuracy 3D motion tracking.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-card text-center">
                        <div class="card-icon mx-auto">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <h4>AI & Machine Learning</h4>
                        <p class="text-muted">Smart algorithms that learn from individual work patterns to provide personal recommendations.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="modern-card text-center">
                        <div class="card-icon mx-auto">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4>Analytics Dashboard</h4>
                        <p class="text-muted">A comprehensive dashboard with in-depth insights for management and workers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section bg-light">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">How ErgoFit Works?</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
                A simple four-step process to protect workers' health
            </p>

            <div class="timeline">
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-icon">
                        <i class="bi bi-1-circle"></i>
                    </div>
                    <div class="timeline-content">
                        <h4>Instalasi Sensor</h4>
                        <p>Wireless IMU sensors are installed at critical points of the worker's body (the back, neck, shoulders, and wrists) with an ergonomic design that does not interfere with work activities.</p>
                        <ul class="list-unstyled mt-3 mb-0">
                            <li><i class="bi bi-check-circle text-success me-2"></i>Plug & play installation</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Battery life 12+ hours</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Waterproof & dustproof</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-icon">
                        <i class="bi bi-2-circle"></i>
                    </div>
                    <div class="timeline-content">
                        <h4>Data Collection & Processing</h4>
                        <p>The sensors collect kinematic data (position, orientation, acceleration) in real time with a high sampling rate. The data are transmitted wirelessly to a cloud system for processing.</p>
                        <div class="row mt-3">
                            <div class="col-6">
                                <small class="text-muted">Sampling Rate</small>
                                <h6>100Hz</h6>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Latency</small>
                                <h6>&lt;50ms</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-icon">
                        <i class="bi bi-3-circle"></i>
                    </div>
                    <div class="timeline-content">
                        <h4>AI Analysis & RULA Scoring</h4>
                        <p>A machine learning algorithm analyzes posture using a modified RULA (Rapid Upper Limb Assessment) to calculate real-time risk scores for each body segment.</p>
                        <div class="bg-light p-3 rounded mt-3">
                            <small><strong>RULA Scoring:</strong></small><br>
                            <small>Score 1-2: Acceptable</small><br>
                            <small>Score 3-4: Investigate further</small><br>
                            <small>Score 5-6: Investigate & change soon</small><br>
                            <small>Score 7: Investigate & change immediately</small>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-icon">
                        <i class="bi bi-4-circle"></i>
                    </div>
                    <div class="timeline-content">
                        <h4>Smart Feedback & Intervention</h4>
                        <p>The system provides multimodal feedback (visual, audio, and haptic) to workers and supervisors for immediate posture correction. An analytics dashboard offers long-term insights.</p>
                        <div class="row mt-3">
                            <div class="col-4 text-center">
                                <i class="bi bi-eye text-primary" style="font-size: 1.5rem;"></i>
                                <small class="d-block mt-2">Visual</small>
                            </div>
                            <div class="col-4 text-center">
                                <i class="bi bi-volume-up text-success" style="font-size: 1.5rem;"></i>
                                <small class="d-block mt-2">Audio</small>
                            </div>
                            <div class="col-4 text-center">
                                <i class="bi bi-phone-vibrate text-info" style="font-size: 1.5rem;"></i>
                                <small class="d-block mt-2">Haptic</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">ERGOFIT Key Features</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
                Powered by advanced technology to deliver a complete and seamless ergonomic experience.
            </p>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h4>Real-time Monitoring</h4>
                        <p>24/7 posture monitoring with ultra-low latency for instant response to risky postures.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-shaded"></i>
                        </div>
                        <h4>Predictive Analytics</h4>
                        <p>Predicts MSD risks based on historical work patterns using advanced machine learning models.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-person-workspace"></i>
                        </div>
                        <h4>Personal Coaching</h4>
                        <p>AI-powered personal coaching that provides ergonomic tips tailored to each worker's characteristics and work patterns.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4>Advanced Analytics</h4>
                        <p>Comprehensive analytics dashboard offering deep insights for optimizing workplace ergonomics.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-cloud-check"></i>
                        </div>
                        <h4>Cloud Integration</h4>
                        <p>Seamless cloud integration with multi-platform access and real-time data synchronization.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h4>Customizable Alerts</h4>
                        <p>A notification system that can be customized according to industry needs and worker preferences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Collaboration Section -->
    <section id="collaboration" class="section" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">
                Partnership & Collaboration
            </h2>
            <p class="section-subtitle text-center" data-aos="fade-up" data-aos-delay="100">
                Together We Create Safer and Healthier Workplaces
            </p>

            <!-- Partnership Types -->
            <div class="row g-4 mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card" style="height: 100%; background: white;">
                        <div class="feature-icon" style="background: var(--gradient-primary);">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4>Enterprise Partnership</h4>
                        <p>Collaborate with leading companies to implement comprehensive ergonomic solutions across multiple locations and departments.</p>
                        <ul style="text-align: left; color: var(--text-light); font-size: 0.95rem; line-height: 1.8;">
                            <li>Custom implementation plans</li>
                            <li>Dedicated account manager</li>
                            <li>White-label solutions</li>
                            <li>Priority support & training</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card" style="height: 100%; background: white;">
                        <div class="feature-icon" style="background: var(--gradient-secondary);">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h4>Academic & Research</h4>
                        <p>Partner with universities and research institutions to advance ergonomic science and workplace health innovation.</p>
                        <ul style="text-align: left; color: var(--text-light); font-size: 0.95rem; line-height: 1.8;">
                            <li>Research collaboration</li>
                            <li>Data access for studies</li>
                            <li>Joint publications</li>
                            <li>Student internship programs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card" style="height: 100%; background: white;">
                        <div class="feature-icon" style="background: var(--gradient-accent);">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h4>Technology Integration</h4>
                        <p>Integrate ERGOFIT with your existing systems for seamless data flow and enhanced workplace management.</p>
                        <ul style="text-align: left; color: var(--text-light); font-size: 0.95rem; line-height: 1.8;">
                            <li>API & SDK access</li>
                            <li>ERP/HRIS integration</li>
                            <li>IoT device compatibility</li>
                            <li>Custom webhooks</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Integration Partners -->
            <div class="text-center mb-4" data-aos="fade-up" data-aos-delay="500">
                <h3 class="font-poppins mb-2" style="color: var(--text-dark); font-weight: 700;">Integration Partners</h3>
                <p style="color: var(--text-light);">ERGOFIT seamlessly integrates with leading platforms</p>
            </div>
            
            <div class="row g-4 mb-5 justify-content-center">
                <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="600">
                    <div class="p-4" style="background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-soft); height: 120px; display: flex; align-items: center; justify-content: center;">
                        <div>
                            <i class="bi bi-microsoft" style="font-size: 3rem; color: #00A4EF;"></i>
                            <p class="mt-2 mb-0" style="font-weight: 600;">Microsoft 365</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="650">
                    <div class="p-4" style="background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-soft); height: 120px; display: flex; align-items: center; justify-content: center;">
                        <div>
                            <i class="bi bi-google" style="font-size: 3rem; color: #4285F4;"></i>
                            <p class="mt-2 mb-0" style="font-weight: 600;">Google Workspace</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="700">
                    <div class="p-4" style="background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-soft); height: 120px; display: flex; align-items: center; justify-content: center;">
                        <div>
                            <i class="bi bi-slack" style="font-size: 3rem; color: #4A154B;"></i>
                            <p class="mt-2 mb-0" style="font-weight: 600;">Slack</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="750">
                    <div class="p-4" style="background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-soft); height: 120px; display: flex; align-items: center; justify-content: center;">
                        <div>
                            <i class="bi bi-hdd-network" style="font-size: 3rem; color: #FF6B6B;"></i>
                            <p class="mt-2 mb-0" style="font-weight: 600;">SAP</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Collaboration Benefits -->
            <div class="row align-items-center mt-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="800">
                    <h3 class="font-poppins mb-4" style="color: var(--text-dark); font-weight: 700;">Why Partner with ERGOFIT?</h3>
                    <div class="mb-3 d-flex align-items-start">
                        <div style="background: var(--gradient-primary); width: 50px; height: 50px; border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="bi bi-graph-up-arrow" style="font-size: 1.5rem; color: white;"></i>
                        </div>
                        <div class="ms-3">
                            <h5 style="color: var(--text-dark); font-weight: 600;">Expand Market Reach</h5>
                            <p style="color: var(--text-light); margin-bottom: 0;">Access our network of 500+ enterprise clients across Indonesia and Southeast Asia.</p>
                        </div>
                    </div>
                    <div class="mb-3 d-flex align-items-start">
                        <div style="background: var(--gradient-secondary); width: 50px; height: 50px; border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="bi bi-lightbulb" style="font-size: 1.5rem; color: white;"></i>
                        </div>
                        <div class="ms-3">
                            <h5 style="color: var(--text-dark); font-weight: 600;">Innovation Together</h5>
                            <p style="color: var(--text-light); margin-bottom: 0;">Co-develop cutting-edge solutions with our expert R&D team.</p>
                        </div>
                    </div>
                    <div class="mb-3 d-flex align-items-start">
                        <div style="background: var(--gradient-accent); width: 50px; height: 50px; border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="bi bi-award" style="font-size: 1.5rem; color: white;"></i>
                        </div>
                        <div class="ms-3">
                            <h5 style="color: var(--text-dark); font-weight: 600;">Recognized Excellence</h5>
                            <p style="color: var(--text-light); margin-bottom: 0;">Join an award-winning platform trusted by industry leaders.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="900">
                    <div class="p-5" style="background: var(--gradient-primary); border-radius: var(--border-radius); box-shadow: var(--shadow-medium);">
                        <h2 class="text-white font-poppins mb-4" style="font-weight: 700;">Ready to Collaborate?</h2>
                        <p class="text-white mb-4" style="opacity: 0.95;">Let's discuss how we can work together to create healthier workplaces.</p>
                        <a href="#contact" class="btn btn-light btn-lg px-5" style="border-radius: 50px; font-weight: 600;">
                            <i class="bi bi-handshake me-2"></i>
                            Start Partnership Discussion
                        </a>
                        <div class="row mt-4 text-white">
                            <div class="col-4">
                                <h3 class="mb-0" style="font-weight: 700;">500+</h3>
                                <small style="opacity: 0.9;">Enterprise Partners</small>
                            </div>
                            <div class="col-4">
                                <h3 class="mb-0" style="font-weight: 700;">50+</h3>
                                <small style="opacity: 0.9;">Integrations</small>
                            </div>
                            <div class="col-4">
                                <h3 class="mb-0" style="font-weight: 700;">98%</h3>
                                <small style="opacity: 0.9;">Partner Satisfaction</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Trusted Partners -->
<div class="mt-5 pt-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <h3 class="font-poppins mb-2" style="color: var(--text-dark); font-weight: 700; font-size: 2rem;">Our Trusted Partners</h3>
        <p style="color: var(--text-light); font-size: 1.1rem;">Collaborating with leading institutions to advance workplace ergonomics</p>
    </div>

    <div class="row g-4 align-items-stretch">
        <!-- Enuma Technology -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-100 p-4" style="background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-medium); border: 2px solid #f1f5f9; transition: all 0.3s ease;">
                <div class="text-center mb-4">
                    <a href="https://enumatechnology.com" target="_blank" style="text-decoration: none;">
                        <div class="partner-logo-container" style="width: 180px; height: 180px; margin: 0 auto; background: transparent; display: flex; align-items: center; justify-content: center; padding: 20px; transition: transform 0.3s ease; cursor: pointer;">
                            <img src="images/enuma.png" alt="Enuma Technology Logo" class="partner-logo" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        </div>
                    </a>
                </div>
                <h4 class="text-center mb-3" style="color: var(--text-dark); font-weight: 700;">Enuma Technology</h4>
                <p style="color: var(--text-light); text-align: center; line-height: 1.8;">
                    Technology partner providing cutting-edge AI and IoT solutions for real-time ergonomic monitoring and workplace safety optimization.
                </p>
                <div class="mt-4 pt-3" style="border-top: 1px solid #e2e8f0;">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <i class="bi bi-check-circle-fill me-2" style="color: var(--accent-color);"></i>
                        <small style="color: var(--text-light);">AI & IoT Integration</small>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-check-circle-fill me-2" style="color: var(--accent-color);"></i>
                        <small style="color: var(--text-light);">Hardware Development</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- LPSKE -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-100 p-4" style="background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-medium); border: 2px solid #f1f5f9; transition: all 0.3s ease;">
                <div class="text-center mb-4">
                    <a href="https://lpske.ti-uns.com" target="_blank" style="text-decoration: none;">
                        <div class="partner-logo-container" style="width: 180px; height: 180px; margin: 0 auto; background: transparent; display: flex; align-items: center; justify-content: center; padding: 20px; transition: transform 0.3s ease; cursor: pointer;">
                            <img src="images/lpske.png" alt="LPSKE Logo" class="partner-logo" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        </div>
                    </a>
                </div>
                <h4 class="text-center mb-3" style="color: var(--text-dark); font-weight: 700;">LPSKE</h4>
                <p class="text-center mb-2" style="color: var(--primary-color); font-weight: 600; font-size: 0.9rem;">
                    Laboratorium Perancangan Sistem Kerja dan Ergonomi
                </p>
                <p style="color: var(--text-light); text-align: center; line-height: 1.8;">
                    Research partner conducting ergonomic studies, workplace assessments, and validation of ERGOFIT's methodology and effectiveness.
                </p>
                <div class="mt-4 pt-3" style="border-top: 1px solid #e2e8f0;">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <i class="bi bi-check-circle-fill me-2" style="color: var(--accent-color);"></i>
                        <small style="color: var(--text-light);">Ergonomic Research</small>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-check-circle-fill me-2" style="color: var(--accent-color);"></i>
                        <small style="color: var(--text-light);">Scientific Validation</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMK N 2 Surakarta -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="h-100 p-4" style="background: white; border-radius: var(--border-radius); box-shadow: var(--shadow-medium); border: 2px solid #f1f5f9; transition: all 0.3s ease;">
                <div class="text-center mb-4">
                    <a href="{{ route('team') }}" style="text-decoration: none;">
                        <div class="partner-logo-container" style="width: 180px; height: 180px; margin: 0 auto; background: transparent; display: flex; align-items: center; justify-content: center; padding: 20px; transition: transform 0.3s ease; cursor: pointer;">
                            <img src="images/stemsa.png" alt="SMK N 2 Surakarta Logo" class="partner-logo" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        </div>
                    </a>
                </div>
                <h4 class="text-center mb-3" style="color: var(--text-dark); font-weight: 700;">SMK N 2 Surakarta</h4>
                <p style="color: var(--text-light); text-align: center; line-height: 1.8;">
                    Educational partner fostering young talent through vocational training programs, internships, and real-world project collaboration in ergonomic technology.
                </p>
                <div class="mt-4 pt-3" style="border-top: 1px solid #e2e8f0;">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <i class="bi bi-check-circle-fill me-2" style="color: var(--accent-color);"></i>
                        <small style="color: var(--text-light);">Student Development</small>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-check-circle-fill me-2" style="color: var(--accent-color);"></i>
                        <small style="color: var(--text-light);">Internship Programs</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.partner-logo-container:hover {
    transform: scale(1.05);
}
</style>
                <!-- Partnership Quote -->
                <div class="text-center mt-5 pt-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-5" style="background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(16, 185, 129, 0.1) 100%); border-radius: var(--border-radius); border: 2px solid rgba(37, 99, 235, 0.2);">
                        <i class="bi bi-quote" style="font-size: 3rem; color: var(--primary-color); opacity: 0.3;"></i>
                        <p style="font-size: 1.3rem; font-weight: 500; color: var(--text-dark); margin: 20px 0; font-style: italic;">
                            "Together, we're building the future of workplace health and safety through innovation, research, and education."
                        </p>
                        <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap mt-4">
                            <span class="badge" style="background: var(--gradient-primary); padding: 10px 20px; font-size: 0.9rem; font-weight: 500;">Strategic Alliance</span>
                            <span class="badge" style="background: var(--gradient-secondary); padding: 10px 20px; font-size: 0.9rem; font-weight: 500;">Research Collaboration</span>
                            <span class="badge" style="background: var(--gradient-accent); padding: 10px 20px; font-size: 0.9rem; font-weight: 500;">Knowledge Transfer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="section-title" data-aos="fade-up">
                        Ready to Transform Your Workplace?
                    </h2>
                    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
                        Contact our Expert team for Free Consult and Demo Live of ErgoFit
                    </p>

                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Company Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Company Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="col-12">
                                    <select class="form-control">
                                        <option>Select Industry</option>
                                        <option>Manufaktur</option>
                                        <option>Konstruksi</option>
                                        <option>Logistik</option>
                                        <option>Healthcare</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="4" placeholder="Describe your company's ergonomic challenges..."></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-light btn-lg px-5">
                                        <i class="bi bi-send me-2"></i>
                                        Schedule a Free Demo
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="contact-info-grid">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone-fill" style="font-size: 2rem; color: white;"></i>
                            <h5 class="mt-3 text-white">Phone</h5>
                            <p class="contact-info-text">+62 21 5555 9999</p>
                        </div>
                        <div class="contact-info-item" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope-fill" style="font-size: 2rem; color: white;"></i>
                            <h5 class="mt-3 text-white">Email</h5>
                            <p class="contact-info-text">info@ergofit.co.id</p>
                        </div>
                        <div class="contact-info-item" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-geo-alt-fill" style="font-size: 2rem; color: white;"></i>
                            <h5 class="mt-3 text-white">Address</h5>
                            <p class="contact-info-text">Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h5 class="font-poppins">
                        <i class="bi bi-shield-check me-2"></i>ERGOFIT
                    </h5>
                    <p class="mb-4">
                        Revolutionizing workplace health with AI and IoT technology to proactively prevent Musculoskeletal Disorders (MSDs).
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h5>Products</h5>
                    <a href="#features" class="footer-link">Features</a>
                    <a href="#how-it-works" class="footer-link">How It Works</a>
                    <a href="#" class="footer-link">API Documentation</a>
                </div>
                <div class="footer-section">
                    <h5>Company</h5>
                    <a href="#about" class="footer-link">About Us</a>
                    <a href="#" class="footer-link">Careers</a>
                    <a href="#" class="footer-link">Press</a>
                    <a href="#" class="footer-link">Blog</a>
                </div>
                <div class="footer-section">
                    <h5>Support</h5>
                    <a href="#" class="footer-link">Help Center</a>
                    <a href="#contact" class="footer-link">Contact</a>
                    <a href="#" class="footer-link">Training</a>
                    <a href="#" class="footer-link">Status</a>
                </div>
                <div class="footer-section">
                    <h5>Legal</h5>
                    <a href="#" class="footer-link">Privacy Policy</a>
                    <a href="#" class="footer-link">Terms of Service</a>
                    <a href="#" class="footer-link">Cookie Policy</a>
                    <a href="#" class="footer-link">Compliance</a>
                </div>
            </div>
            <hr class="my-4" style="border-color: #334155;">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0" style="color: #cbd5e1 !important;">
                        &copy; 2025 ERGOFIT. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0" style="color: #cbd5e1 !important;">
                        <i class="bi bi-shield-check me-1" style="color: #10b981;"></i>
                        🌍 Supporting Golden Indonesia 2045 and UN SDGs
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Mengirim...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Terima kasih! Tim kami akan menghubungi Anda dalam 24 jam.');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                this.reset();
            }, 2000);
        });
    </script>
</body>
</html>