<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Xornea - Where Your Research Finds Its Voice')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --dark-color: #1f2937;
            --light-color: #f8fafc;
        }

        body {
            font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
            line-height: 1.6;
            color: var(--dark-color);
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        html {
            overflow-x: hidden; /* Prevent horizontal scroll on html */
        }

        /* Prevent any container from causing horizontal scroll */
        * {
            box-sizing: border-box;
        }

        .container, .container-fluid {
            overflow-x: hidden;
            max-width: 100%;
        }

        /* Ensure rows don't cause overflow */
        .row {
            margin-left: 0;
            margin-right: 0;
            overflow-x: hidden;
        }

        [class*="col-"] {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Global Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-25px) rotate(3deg); }
        }
        
        @keyframes float-reverse {
            0%, 100% { transform: translateY(-8px); }
            50% { transform: translateY(8px); }
        }
        
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(37, 99, 235, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0); }
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Animation Classes */
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        
        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
        }
        
        .animate-float-reverse {
            animation: float-reverse 5s ease-in-out infinite;
        }
        
        .animate-bounce-slow {
            animation: bounce-slow 3s ease-in-out infinite;
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }

        /* ================================
           RESPONSIVE UTILITY CLASSES
           ================================ */
        
        /* Responsive text utilities */
        .text-responsive {
            font-size: 1rem;
        }
        
        @media (min-width: 641px) and (max-width: 1024px) {
            .text-responsive {
                font-size: 1.1rem;
            }
        }
        
        @media (min-width: 1025px) {
            .text-responsive {
                font-size: 1.2rem;
            }
        }
        
        /* Responsive spacing utilities */
        .spacing-responsive {
            margin-bottom: 1rem;
        }
        
        @media (min-width: 641px) and (max-width: 1024px) {
            .spacing-responsive {
                margin-bottom: 1.5rem;
            }
        }
        
        @media (min-width: 1025px) {
            .spacing-responsive {
                margin-bottom: 2rem;
            }
        }
        
        /* Responsive grid utilities */
        .grid-responsive {
            display: grid;
            gap: 1rem;
            grid-template-columns: 1fr;
        }

        @media (max-width: 640px) {
            .grid-responsive {
                display: none;
            }
        }
        
        @media (min-width: 641px) and (max-width: 1024px) {
            .grid-responsive {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }
        
        @media (min-width: 1025px) {
            .grid-responsive {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }
        
        /* Special grid for home features (2x2 layout) */
        .home-features-grid {
            display: grid;
            gap: 1.5rem;
            grid-template-columns: 1fr;
        }
        
        @media (min-width: 641px) {
            .home-features-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }
        
        /* Responsive button groups */
        .btn-group-responsive {
            display: flex;
            gap: 1rem;
            flex-direction: column;
        }
        
        @media (min-width: 641px) {
            .btn-group-responsive {
                flex-direction: row;
                justify-content: center;
            }
        }

        /* Enhanced Mobile Responsive Utilities */
        .min-vh-50 { min-height: 50vh; }
        .min-vh-60 { min-height: 60vh; }
        .min-vh-75 { min-height: 75vh; }
        
        /* Interactive Elements */
        .card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid transparent;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-color: var(--primary-color);
        }
        
        .btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn:hover {
            transform: translateY(-2px);
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            transition: all 0.3s ease;
            transform: translate(-50%, -50%);
        }
        
        .btn:active::before {
            width: 300px;
            height: 300px;
        }
        
        /* Feature Items */
        .feature-item {
            transition: all 0.3s ease;
            cursor: pointer;
            padding: 1rem;
            border-radius: 0.75rem;
        }
        
        .feature-item:hover {
            transform: translateY(-5px);
            background: rgba(var(--bs-primary-rgb), 0.05);
        }
        
        .stat-item {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .stat-item:hover {
            transform: scale(1.05);
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            z-index: 1050;
        }

        /* Add padding to body to compensate for fixed navbar */
        body {
            padding-top: 80px;
        }

        /* Navbar scroll effect */
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(15px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
            text-decoration: none;
        }

        .navbar-brand img {
            height: 35px;
            width: auto;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        .navbar-brand span {
            color: var(--primary-color);
            font-weight: 800;
        }

        .navbar-toggler {
            border: none;
            padding: 4px 8px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2837, 99, 235, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .nav-link {
            font-weight: 500;
            color: var(--dark-color) !important;
            transition: color 0.3s ease;
            padding: 0.75rem 1rem !important;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><polygon fill="rgba(255,255,255,0.1)" points="1000,0 1000,100 0,100"/></svg>');
            background-size: cover;
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.4);
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #6b7280;
            margin-bottom: 3rem;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-counter {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-color);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.7), rgba(59, 130, 246, 0.7));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.8rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .feature-icon.text-success {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.7), rgba(22, 163, 74, 0.7));
            border: 1px solid rgba(34, 197, 94, 0.3);
        }

        .feature-icon.text-primary {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.7), rgba(59, 130, 246, 0.7));
            border: 1px solid rgba(37, 99, 235, 0.3);
        }

        .feature-icon.text-danger {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.7), rgba(220, 38, 38, 0.7));
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .feature-icon.text-warning {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.7), rgba(217, 119, 6, 0.7));
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .pricing-card {
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .pricing-card:hover {
            border-color: var(--primary-color);
            transform: scale(1.05);
        }

        .pricing-card.featured {
            border-color: var(--primary-color);
            position: relative;
            transform: scale(1.1);
        }

        .pricing-card.featured::before {
            content: 'TERPOPULER';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-color);
            color: white;
            padding: 5px 20px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 4rem;
            color: var(--primary-color);
            font-family: Georgia, serif;
        }

        .footer {
            background: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }

        .footer a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-color);
        }

        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25d366;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 5px 25px rgba(37, 211, 102, 0.3);
            z-index: 1000;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .live-chat {
            position: fixed;
            bottom: 100px;
            right: 30px;
            background: var(--primary-color);
            color: white;
            padding: 15px 20px;
            border-radius: 25px;
            font-weight: 600;
            box-shadow: 0 5px 25px rgba(37, 99, 235, 0.3);
            z-index: 1000;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .live-chat:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(37, 99, 235, 0.4);
        }

        /* ================================
           RESPONSIVE DESIGN SYSTEM
           Mobile (≤ 640px) | Tablet (641px-1024px) | Desktop (≥ 1025px)
           ================================ */

        /* DESKTOP - Desktop/Monitor (≥ 1025px) */
        @media (min-width: 1025px) {
            body {
                padding-top: 80px;
            }
            
            .container, .container-lg, .container-md, .container-sm, .container-xl {
                max-width: 1200px;
            }
            
            .hero-section {
                padding: 120px 0;
            }
            
            .section-padding {
                padding: 100px 0;
            }
            
            .section-title {
                font-size: 3rem;
            }
            
            .display-4 {
                font-size: 3.5rem !important;
            }
            
            .display-md-3 {
                font-size: 4rem !important;
            }
            
            .lead {
                font-size: 1.3rem;
            }
            
            .btn-lg {
                padding: 1rem 2.5rem;
                font-size: 1.1rem;
            }
            
            .feature-icon {
                width: 90px;
                height: 90px;
                font-size: 2rem;
            }
            
            .testimonial-card {
                padding: 3rem;
            }
            
            .card {
                margin-bottom: 2rem;
            }
        }

        /* TABLET - Tablet Layout (641px - 1024px) */
        @media (min-width: 641px) and (max-width: 1024px) {
            body {
                padding-top: 75px;
                overflow-x: hidden;
                max-width: 100vw;
            }
            
            .container {
                width: 90%;
                max-width: 950px;
                overflow-x: hidden;
            }
            
            .row {
                margin-left: 0;
                margin-right: 0;
                max-width: 100%;
                overflow-x: hidden;
            }
            
            [class*="col-"] {
                max-width: 100%;
                box-sizing: border-box;
            }
            
            .hero-section {
                padding: 100px 0 80px 0;
                overflow-x: hidden;
                max-width: 100%;
            }
            
            .section-padding {
                padding: 80px 0;
                overflow-x: hidden;
                max-width: 100%;
            }
            
            .grid-responsive, .home-features-grid {
                max-width: 100%;
                overflow-x: hidden;
            }
            
            .card, .feature-item, .service-item, .testimonial-card, .pricing-card {
                max-width: 100%;
                overflow: hidden;
                box-sizing: border-box;
            }
            
            img {
                max-width: 100% !important;
                height: auto !important;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .display-4 {
                font-size: 2.8rem !important;
            }
            
            .display-md-3 {
                font-size: 3.2rem !important;
            }
            
            .lead {
                font-size: 1.2rem;
            }
            
            .btn-lg {
                padding: 0.875rem 2rem;
                font-size: 1.05rem;
            }
            
            .feature-icon {
                width: 85px;
                height: 85px;
                font-size: 1.9rem;
            }
            
            .testimonial-card {
                padding: 2.5rem;
            }
            
            .pricing-card.featured {
                transform: scale(1.05);
            }
            
            /* 2-column layout for tablets */
            .row .col-lg-4:nth-child(3n) {
                margin-top: 2rem;
            }
            
            .navbar-brand {
                font-size: 1.6rem;
            }
            
            .navbar-brand img {
                height: 32px;
            }
        }

        /* MOBILE - Mobile/Phone Layout (≤ 640px) */
        @media (max-width: 640px) {
            body {
                padding-top: 80px !important;
                overflow-x: hidden !important;
                width: 100%;
                max-width: 100vw;
            }
            
            .container {
                width: 100%;
                padding-left: 1rem;
                padding-right: 1rem;
                max-width: 100% !important;
                overflow-x: hidden;
            }
            
            .row {
                margin-left: 0 !important;
                margin-right: 0 !important;
                max-width: 100%;
                overflow-x: hidden;
            }
            
            [class*="col-"] {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                max-width: 100%;
            }
            
            /* Prevent images from overflowing */
            img {
                max-width: 100% !important;
                height: auto !important;
            }
            
            /* Prevent cards and elements from overflowing */
            .card, .feature-item, .service-item, .testimonial-card, .pricing-card {
                max-width: 100%;
                overflow: hidden;
                box-sizing: border-box;
            }
            
            /* Mobile Navbar - Clean and Simple */
            .navbar {
                background: #ffffff !important;
                backdrop-filter: none;
                padding: 1rem 0 !important;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
                border-bottom: 1px solid #e5e7eb;
            }
            
            .navbar .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            .navbar-brand {
                font-size: 1.4rem !important;
                color: #1e40af !important;
                font-weight: 700;
            }
            
            .navbar-brand img {
                height: 30px !important;
                max-width: 100%;
            }
            
            .navbar-toggler {
                border: 2px solid #e5e7eb;
                padding: 0.5rem;
                border-radius: 6px;
                background: transparent;
            }
            
            .navbar-toggler:focus {
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
                border-color: #3b82f6;
            }
            
            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }
            
            .navbar-collapse {
                background: white;
                margin: 1rem -1rem 0 -1rem;
                padding: 1.5rem 1rem;
                border-top: 1px solid #f3f4f6;
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
            }
            
            .navbar-nav {
                margin: 0;
            }
            
            .nav-item {
                margin-bottom: 0.5rem;
            }
            
            .nav-link {
                padding: 1rem 0 !important;
                font-size: 1.1rem !important;
                font-weight: 600 !important;
                color: #374151 !important;
                border-bottom: 1px solid #f9fafb;
                margin-bottom: 0.5rem;
                transition: all 0.3s ease;
            }
            
            .nav-link:hover {
                color: #2563eb !important;
                background-color: #f8fafc;
                padding-left: 1rem !important;
            }
            
            .nav-item:last-child .nav-link {
                border-bottom: none;
                margin-bottom: 0;
            }
            
            /* Fix grid responsive overflow */
            .grid-responsive {
                max-width: 100%;
                overflow-x: hidden;
                grid-template-columns: 1fr !important;
                width: 100%;
            }
            
            .home-features-grid {
                max-width: 100%;
                overflow-x: hidden;
                grid-template-columns: 1fr !important;
                width: 100%;
            }
            
            /* Fix potential button overflow */
            .btn-group-responsive {
                max-width: 100%;
                flex-direction: column;
                overflow-x: hidden;
            }
            
            .btn {
                max-width: 100%;
                word-wrap: break-word;
                box-sizing: border-box;
            }
            
            /* Fix floating shapes that might cause overflow */
            .floating-shape {
                display: none !important;
            }
            
            /* Fix any potential text overflow */
            h1, h2, h3, h4, h5, h6, p, .lead {
                word-wrap: break-word;
                overflow-wrap: break-word;
                max-width: 100%;
                box-sizing: border-box;
            }
            
            /* Fix hero section potential overflow */
            .hero-section {
                overflow-x: hidden;
                width: 100%;
                max-width: 100%;
                padding: 120px 0 60px 0 !important;
                margin-top: 0 !important;
            }
            
            /* Fix section potential overflow */
            .section-padding {
                overflow-x: hidden;
                width: 100%;
                max-width: 100%;
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
                line-height: 1.2;
            }
            
            .display-4 {
                font-size: 2.2rem !important;
                line-height: 1.2;
            }
            
            .display-md-3 {
                font-size: 2.5rem !important;
                line-height: 1.2;
            }
            
            .lead {
                font-size: 1.1rem;
                line-height: 1.5;
            }
            
            .btn-lg {
                padding: 1rem 1.5rem;
                font-size: 1.1rem;
                width: 100%;
                margin-bottom: 1rem;
            }
            
            .btn-group-mobile {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            
            .feature-icon {
                width: 70px;
                height: 70px;
                font-size: 1.5rem;
            }
            
            .testimonial-card {
                padding: 1.5rem;
                margin-bottom: 2rem;
            }
            
            .pricing-card {
                margin-bottom: 2rem;
            }
            
            .pricing-card.featured {
                transform: none;
            }
            
            .feature-item {
                margin-bottom: 2rem;
                text-align: center;
            }
            
            .card:hover {
                transform: none;
            }
            
            .min-vh-75 {
                min-height: 50vh;
            }
            
            .min-vh-60 {
                min-height: 40vh;
            }
            
            /* Mobile-specific utilities */
            .text-center-mobile {
                text-align: center !important;
            }
            
            .mb-mobile-4 {
                margin-bottom: 2rem !important;
            }
            
            .p-mobile-3 {
                padding: 1.5rem !important;
            }
            
            /* Ensure no elements interfere with mobile navbar */
            .floating-shape, .floating-circle, .floating-triangle {
                display: none !important;
            }
            
            /* Fix any remaining overflow issues */
            * {
                max-width: 100%;
                box-sizing: border-box;
            }
            
            /* Specific fixes for Bootstrap responsive issues */
            .container-fluid {
                overflow-x: hidden;
                max-width: 100%;
            }
            
            .row {
                --bs-gutter-x: 1.5rem;
            }
        }
        
        /* Enhanced Tablet/Mobile Navbar Fixes */
        @media (max-width: 1024px) {
            .navbar-collapse {
                background: white;
                border-radius: 8px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                margin-top: 0.5rem;
                padding: 1rem;
                border: 1px solid rgba(0, 0, 0, 0.05);
            }
            
            .nav-link {
                padding: 0.75rem 0 !important;
                border-bottom: 1px solid #f3f4f6;
                margin-bottom: 0.25rem;
                font-size: 1rem;
            }
            
            .nav-link:last-child {
                border-bottom: none;
                margin-bottom: 0;
            }
            
            .navbar {
                background: white !important;
                backdrop-filter: none;
                padding: 0.75rem 0;
            }
        }
        
        /* Ensure navbar is always on top */
        .navbar {
            z-index: 1030 !important;
        }
        
        /* Fix navbar collapse animation */
        .navbar-collapse {
            transition: all 0.3s ease-in-out;
        }
        
        .navbar-collapse.show {
            animation: slideDown 0.3s ease-in-out;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Touch-friendly interactions */
        @media (hover: none) and (pointer: coarse) {
            .feature-item:hover {
                transform: none;
                background: none;
            }
            
            .card:hover {
                transform: none;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            }
            
            .btn:hover {
                transform: none;
            }
            
            .stat-item:hover {
                transform: none;
            }
        }
        
        /* Loading states */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }
        
        .loading::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 -10px;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s linear infinite;
            z-index: 1000;
        }
        
        /* Toast container styles */
        #toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            max-width: 350px;
        }
        
        /* Smooth transitions for all interactive elements */
        * {
            -webkit-tap-highlight-color: transparent;
        }
        
        a, button, .btn {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        /* Improved accessibility */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }
        
        /* Focus indicators */
        .btn:focus,
        .form-control:focus,
        .nav-link:focus {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-color);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logos/logo_xornea.png') }}" 
                     alt="Xornea Logo" 
                     height="35" 
                     class="me-2">
                <span class="fw-bold">Xornea</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portfolio') }}">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/testimonials') }}">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="fas fa-graduation-cap me-2"></i>Xornea
                    </h5>
                    <p>Where Your Research Finds Its Voice. Pendampingan publikasi jurnal Sinta hingga Scopus, cepat & terpercaya.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Layanan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Penulisan Artikel</a></li>
                        <li class="mb-2"><a href="#">Editing & Proofreading</a></li>
                        <li class="mb-2"><a href="#">Anti Plagiarisme</a></li>
                        <li class="mb-2"><a href="#">Submit & Publikasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Perusahaan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#">Tim</a></li>
                        <li class="mb-2"><a href="#">Karir</a></li>
                        <li class="mb-2"><a href="#">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Dukungan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">FAQ</a></li>
                        <li class="mb-2"><a href="#">Kebijakan</a></li>
                        <li class="mb-2"><a href="#">Syarat & Ketentuan</a></li>
                        <li class="mb-2"><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Kontak</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            info@xornea.com
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            +62 812-3456-7890
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Jakarta, Indonesia
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 Xornea. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Made with <i class="fas fa-heart text-danger"></i> for Indonesian Researchers</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6281234567890" class="whatsapp-float text-decoration-none" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Live Chat Button -->
    {{-- <div class="live-chat" onclick="openLiveChat()">
        <i class="fas fa-comments me-2"></i>Live Chat
    </div> --}}

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Global functions for all pages
        const XorneaUtils = {
            // Toast notification system
            showToast: function(message, type = 'info', duration = 5000) {
                let toastContainer = document.getElementById('toast-container');
                if (!toastContainer) {
                    toastContainer = document.createElement('div');
                    toastContainer.id = 'toast-container';
                    toastContainer.style.cssText = `
                        position: fixed;
                        top: 20px;
                        right: 20px;
                        z-index: 9999;
                        max-width: 350px;
                    `;
                    document.body.appendChild(toastContainer);
                }
                
                const toast = document.createElement('div');
                const bgColor = type === 'success' ? 'bg-success' : type === 'error' ? 'bg-danger' : 'bg-primary';
                
                toast.innerHTML = `
                    <div class="alert ${bgColor} text-white alert-dismissible fade show" role="alert">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'} me-2"></i>
                        ${message}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>
                `;
                
                toastContainer.appendChild(toast);
                
                setTimeout(() => {
                    if (toast.parentNode) {
                        toast.remove();
                    }
                }, duration);
            },

            // Smooth scroll to section
            scrollToSection: function(sectionId) {
                const element = document.getElementById(sectionId) || document.querySelector(`[data-section="${sectionId}"]`);
                if (element) {
                    const headerOffset = 100;
                    const elementPosition = element.offsetTop;
                    const offsetPosition = elementPosition - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            },

            // WhatsApp opener with device detection
            openWhatsApp: function(message = 'Halo, saya tertarik dengan layanan Xornea') {
                const phoneNumber = '6281234567890';
                const encodedMessage = encodeURIComponent(message);
                
                const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                
                let whatsappURL;
                if (isMobile) {
                    whatsappURL = `whatsapp://send?phone=${phoneNumber}&text=${encodedMessage}`;
                } else {
                    whatsappURL = `https://web.whatsapp.com/send?phone=${phoneNumber}&text=${encodedMessage}`;
                }
                
                window.open(whatsappURL, '_blank');
            },

            // Loading state manager
            setLoading: function(element, isLoading = true) {
                if (isLoading) {
                    element.classList.add('loading');
                    const originalText = element.innerHTML;
                    element.dataset.originalText = originalText;
                    element.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
                    element.disabled = true;
                } else {
                    element.classList.remove('loading');
                    element.innerHTML = element.dataset.originalText || element.innerHTML;
                    element.disabled = false;
                }
            },

            // Form validation helper
            validateEmail: function(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            },

            // Counter animation
            animateCounter: function(element, target, duration = 2000) {
                const increment = target / (duration / 16);
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        element.textContent = target;
                        clearInterval(timer);
                    } else {
                        element.textContent = Math.floor(current);
                    }
                }, 16);
            }
        };

        // Make functions globally available
        window.showToast = XorneaUtils.showToast;
        window.scrollToSection = XorneaUtils.scrollToSection;
        window.openWhatsApp = XorneaUtils.openWhatsApp;

        // DOM Ready initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all interactive elements
            initializeInteractiveElements();
            initializeFormValidation();
            initializeCounterAnimation();
            initializeTouchInteractions();
            initializeKeyboardNavigation();
            initializeProgressiveEnhancement();
            initializeNavbarScrollEffect();
        });

        // Initialize interactive elements
        function initializeInteractiveElements() {
            // Add click effects to cards
            document.querySelectorAll('.card').forEach(card => {
                card.addEventListener('click', function(e) {
                    if (!e.target.closest('.btn') && !e.target.closest('a')) {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = '';
                        }, 150);
                    }
                });
            });

            // Add hover effects to feature items
            document.querySelectorAll('.feature-item').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                });
            });

            // Add loading states to buttons
            document.querySelectorAll('.btn').forEach(btn => {
                if (!btn.classList.contains('no-loading')) {
                    btn.addEventListener('click', function(e) {
                        if (this.href && this.href.includes('#')) return;
                        
                        XorneaUtils.setLoading(this, true);
                        
                        setTimeout(() => {
                            XorneaUtils.setLoading(this, false);
                        }, 1000);
                    });
                }
            });
        }

        // Initialize form validation
        function initializeFormValidation() {
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    const emailInputs = this.querySelectorAll('input[type="email"]');
                    let isValid = true;

                    emailInputs.forEach(input => {
                        if (input.value && !XorneaUtils.validateEmail(input.value)) {
                            e.preventDefault();
                            input.classList.add('is-invalid');
                            XorneaUtils.showToast('Mohon masukkan email yang valid', 'error');
                            isValid = false;
                        } else {
                            input.classList.remove('is-invalid');
                        }
                    });

                    if (isValid) {
                        const submitBtn = this.querySelector('button[type="submit"]');
                        if (submitBtn) {
                            XorneaUtils.setLoading(submitBtn, true);
                        }
                    }
                });
            });
        }

        // Initialize counter animation with intersection observer
        function initializeCounterAnimation() {
            if ('IntersectionObserver' in window) {
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const counter = entry.target;
                            const target = parseInt(counter.getAttribute('data-target') || counter.textContent);
                            XorneaUtils.animateCounter(counter, target);
                            counterObserver.unobserve(counter);
                        }
                    });
                }, { threshold: 0.5 });
                
                document.querySelectorAll('.stat-counter, [data-target]').forEach(counter => {
                    counterObserver.observe(counter);
                });
            }
        }

        // Initialize touch interactions for mobile
        function initializeTouchInteractions() {
            if ('ontouchstart' in window) {
                document.body.classList.add('touch-device');
                
                // Add touch feedback
                document.querySelectorAll('.btn, .card, .feature-item').forEach(element => {
                    element.addEventListener('touchstart', function() {
                        this.style.opacity = '0.8';
                    });
                    
                    element.addEventListener('touchend', function() {
                        setTimeout(() => {
                            this.style.opacity = '';
                        }, 150);
                    });
                });
            }
        }

        // Initialize navbar scroll effect
        function initializeNavbarScrollEffect() {
            const navbar = document.querySelector('.navbar');
            let lastScrollTop = 0;
            let isScrolled = false;

            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                // Add/remove scrolled class based on scroll position
                if (scrollTop > 50 && !isScrolled) {
                    navbar.classList.add('scrolled');
                    isScrolled = true;
                } else if (scrollTop <= 50 && isScrolled) {
                    navbar.classList.remove('scrolled');
                    isScrolled = false;
                }

                // Optional: Hide/show navbar on scroll (uncomment if wanted)
                /*
                if (scrollTop > lastScrollTop && scrollTop > 100) {
                    // Scrolling down - hide navbar
                    navbar.style.transform = 'translateY(-100%)';
                } else {
                    // Scrolling up - show navbar
                    navbar.style.transform = 'translateY(0)';
                }
                */
                
                lastScrollTop = scrollTop;
            }, { passive: true });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const navbarHeight = navbar.offsetHeight;
                        const targetPosition = target.offsetTop - navbarHeight - 20;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }

        // Initialize keyboard navigation
        function initializeKeyboardNavigation() {
            document.addEventListener('keydown', function(e) {
                // Quick access shortcuts
                if (e.ctrlKey) {
                    switch(e.key) {
                        case '1':
                            e.preventDefault();
                            window.location.href = '/';
                            break;
                        case '2':
                            e.preventDefault();
                            window.location.href = '/contact';
                            break;
                        case '3':
                            e.preventDefault();
                            window.location.href = '/services';
                            break;
                        case '/':
                            e.preventDefault();
                            const searchInput = document.querySelector('input[type="search"], #faqSearch');
                            if (searchInput) searchInput.focus();
                            break;
                    }
                }
                
                // Escape key functionality
                if (e.key === 'Escape') {
                    // Close any open modals or dropdowns
                    document.querySelectorAll('.modal.show').forEach(modal => {
                        bootstrap.Modal.getInstance(modal)?.hide();
                    });
                }
            });
        }

        // Progressive enhancement
        function initializeProgressiveEnhancement() {
            // Lazy load images
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                                imageObserver.unobserve(img);
                            }
                        }
                    });
                });
                
                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }

            // Add service worker for offline functionality (if needed)
            if ('serviceWorker' in navigator) {
                // Uncomment if you want to add service worker
                // navigator.serviceWorker.register('/sw.js');
            }
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                XorneaUtils.scrollToSection(targetId);
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.15)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            }
        });

        // Performance optimization
        let ticking = false;
        function updateOnScroll() {
            // Add scroll-based effects here if needed
            ticking = false;
        }
        
        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(updateOnScroll);
                ticking = true;
            }
        });

        // Error handling for images
        document.addEventListener('error', function(e) {
            if (e.target.tagName === 'IMG') {
                e.target.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjhmOWZhIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxOCIgZmlsbD0iIzZiNzI4MCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkltYWdlIG5vdCBhdmFpbGFibGU8L3RleHQ+PC9zdmc+';
            }
        }, true);

        // Live Chat Function
        function openLiveChat() {
            XorneaUtils.showToast('Live chat akan segera tersedia! Silakan hubungi kami via WhatsApp untuk konsultasi langsung.', 'info');
        }
    </script>

    @yield('scripts')
</body>
</html>
