<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohamed Fawaas | Portfolio</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script src="tilt.jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    


    <style>
        body {
            font-family: 'Arial', sans-serif;
            scroll-behavior: smooth;
        }

        /* Navbar Styling */
        
/* Enhanced 3D Navigation Styles */
.glass-nav {
    background: rgba(255, 255, 255, 0.85) !important;
    backdrop-filter: blur(12px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

/* 3D Brand Logo */
.brand-3d {
    position: relative;
    padding: 0.5rem 1rem;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.logo-text {
    font-size: 1.8rem;
    font-weight: 700;
    color: #ff6b6b;
    position: relative;
    z-index: 2;
    transition: all 0.3s ease;
}

.logo-border {
    position: absolute;
    inset: 0;
    background: rgba(255, 107, 107, 0.1);
    border-radius: 12px;
    transform: translateZ(-5px);
    transition: all 0.3s ease;
}

.brand-3d:hover {
    transform: translateY(-2px);
}

.brand-3d:hover .logo-border {
    transform: translateZ(-8px);
    background: rgba(255, 107, 107, 0.2);
}

/* 3D Navigation Links */
.nav-3d {
    position: relative;
    padding: 0.8rem 1.5rem !important;
    margin: 0 0.5rem;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    color: #2d3436 !important;
}

.nav-icon {
    margin-right: 0.8rem;
    transition: transform 0.3s ease;
}

.nav-border {
    position: absolute;
    inset: 0;
    background: rgba(255, 107, 107, 0.1);
    border-radius: 8px;
    transform: translateZ(-4px);
    transition: all 0.3s ease;
}

.nav-3d:hover {
    transform: translateY(-3px);
}

.nav-3d:hover .nav-border {
    transform: translateZ(-8px);
    background: rgba(255, 107, 107, 0.15);
}

.nav-3d:hover .nav-icon {
    transform: scale(1.2) rotate(-10deg);
}

/* Active State */
.nav-3d.active {
    color: #ff6b6b !important;
}

.nav-3d.active .nav-border {
    background: rgba(255, 107, 107, 0.2);
    transform: translateZ(-6px);
}

/* Animated Hamburger */
.hologram-btn {
    position: relative;
    width: 40px;
    height: 40px;
    background: transparent;
    border: none;
    cursor: pointer;
}

.hamburger-inner {
    position: absolute;
    width: 30px;
    height: 2px;
    background: #ff6b6b;
    transition: all 0.3s ease;
}

.hamburger-inner::before,
.hamburger-inner::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: inherit;
    transition: all 0.3s ease;
}

.hamburger-inner::before {
    transform: translateY(-8px);
}

.hamburger-inner::after {
    transform: translateY(8px);
}

/* Hamburger Animation */
.hologram-btn[aria-expanded="true"] .hamburger-inner {
    transform: rotate(45deg);
}

.hologram-btn[aria-expanded="true"] .hamburger-inner::before {
    transform: rotate(90deg);
    opacity: 0;
}

.hologram-btn[aria-expanded="true"] .hamburger-inner::after {
    transform: rotate(-90deg);
    opacity: 0;
}

/* Scroll Animation */
.navbar.scrolled {
    background: rgba(255, 255, 255, 0.95) !important;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
    transform: translateY(-5px);
}

/* Entry Animation */
.nav-3d {
    opacity: 0;
    animation: navEntry 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    animation-delay: calc(0.1s * var(--delay));
}

@keyframes navEntry {
    from {
        opacity: 0;
        transform: translateY(20px) rotateX(45deg);
    }
    to {
        opacity: 1;
        transform: translateY(0) rotateX(0);
    }
}

/* External Link Indicator */
.nav-link[href*=".html"] .nav-text::after {
    content: "↗";
    margin-left: 5px;
    font-size: 0.8em;
    opacity: 0.7;
}

        /* Modern Intro Section Styling */
:root {
    --primary-gradient: linear-gradient(135deg, #0072ff, #00c6ff);
    --accent-color: #ffd93d;
    --text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.intro-section {
    position: relative;
    overflow: hidden;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--primary-gradient);
    color: white;
    padding: 20px;
}

.floating-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url('data:image/svg+xml,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
    animation: particles 20s linear infinite;
}

.gradient-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 50% 50%, 
        rgba(255,255,255,0.1) 0%, 
        rgba(0,0,0,0.5) 100%);
}

/* Responsive Profile Section */
.profile-container {
    position: relative;
    width: 50vw;
    height: 50vw;
    max-width: 250px;
    max-height: 250px;
    margin: 0 auto;
    perspective: 1000px;
}

.profile-photo {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    position: relative;
    z-index: 2;
    object-fit: cover; /* For proper image scaling */
}

.profile-border {
    position: absolute;
    top: -5%;
    left: -5%;
    right: -5%;
    bottom: -5%;
    border-radius: 50%;
    animation: rotateBorder 6s linear infinite;
}

/* Mobile Responsive Adjustments */
@media (max-width: 768px) {
    .profile-container {
        width: 60vw;
        height: 60vw;
    }
    
    .text-stroke {
        font-size: 2.5rem;
        margin: 1.5rem 0;
    }
    
    .intro-glass {
        padding: 1rem;
        margin: 1rem 0;
        border-radius: 15px;
    }
    
    .typing-effect {
        font-size: 1.1rem;
        white-space: normal; /* Allow text wrapping */
        border-right: none; /* Remove typing cursor */
        animation: none; /* Disable typing animation */
    }
    
    .cta-btn {
        padding: 1rem 2rem;
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .profile-container {
        width: 70vw;
        height: 70vw;
    }
    
    .text-stroke {
        font-size: 2rem;
    }
    
    .profile-border {
        top: -3%;
        left: -3%;
        right: -3%;
        bottom: -3%;
    }
    
    .intro-glass p {
        font-size: 1rem;
    }
}

/* Disable animations on mobile */
@media (hover: none) and (pointer: coarse) {
    .profile-container {
        transform: none !important;
    }
    
    .floating {
        animation: none;
    }
    
    .profile-border {
        animation: none;
    }
}
.text-stroke {
    font-size: 3.5rem;
    font-weight: 800;
    text-shadow: var(--text-shadow);
    position: relative;
    margin: 2rem 0;
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    background-image: linear-gradient(to right, 
        #fff 30%, 
        var(--accent-color) 70%);
}

.intro-glass {
    backdrop-filter: blur(10px);
    background: rgba(255, 255, 255, 0.1);
    padding: 2rem;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    margin: 2rem auto;
    max-width: 600px;
    transform: translateZ(20px);
}

.typing-effect {
    font-size: 1.4rem;
    line-height: 1.6;
    border-right: 2px solid white;
    white-space: nowrap;
    overflow: hidden;
    animation: typing 3s steps(40) 1s forwards,
               blink-caret 0.75s step-end infinite;
}

.cta-btn {
    position: relative;
    display: inline-block;
    padding: 1.2rem 2.5rem;
    font-size: 1.2rem;
    border-radius: 50px;
    background: var(--accent-color);
    color: #333;
    font-weight: 700;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    transform-style: preserve-3d;
}

.cta-btn:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

.hover-effect {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, 
        transparent 20%, 
        rgba(255,255,255,0.3) 50%, 
        transparent 80%);
    animation: shine 1.5s infinite;
    border-radius: 50px;
}

@keyframes typing {
    from { width: 0 }
    to { width: 100% }
}

@keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: white }
}

@keyframes shine {
    0% { transform: translateX(-100%) }
    100% { transform: translateX(100%) }
}

@keyframes particles {
    from { transform: translateY(0) }
    to { transform: translateY(-100%) }
}

@keyframes floating {
    0% { transform: translateY(0px) rotateX(0deg) }
    50% { transform: translateY(-20px) rotateX(5deg) }
    100% { transform: translateY(0px) rotateX(0deg) }
}

.floating {
    animation: floating 3s ease-in-out infinite;
}
        /* Profile Image Styling */
        .profile-photo {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            margin-top: 60px;
            border: 5px solid #ffd93d;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .profile-photo:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .fade-in {
            opacity: 0;
            transition: opacity 0.6s ease-in;
        }

        .fade-in.visible {
            opacity: 1;
        }

/* Add these styles to your existing CSS */
.cta-container {
    display: flex;
    gap: 1.5rem;
    flex-wrap: wrap;
    justify-content: center;
}

.hire-btn {
    background: linear-gradient(135deg, #25D366, #128C7E);
}

.hire-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup-content {
    background: #1a1a1a;
    padding: 2rem;
    border-radius: 20px;
    width: 90%;
    max-width: 500px;
    position: relative;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.close-btn {
    position: absolute;
    top: 1rem;
    right: 1.5rem;
    color: #fff;
    font-size: 2rem;
    cursor: pointer;
    transition: 0.3s;
}

.close-btn:hover {
    color: #25D366;
}

.popup-content h3 {
    color: #fff;
    margin-bottom: 1.5rem;
    text-align: center;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid #333;
    border-radius: 10px;
    background: #222;
    color: #fff;
    transition: 0.3s;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #25D366;
    outline: none;
}

.submit-btn {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(135deg, #25D366, #128C7E);
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.submit-btn:hover {
    transform: translateY(-2px);
}

.whatsapp-link {
    margin-top: 1.5rem;
    text-align: center;
}

.whatsapp-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: #25D366;
    color: white;
    border-radius: 25px;
    text-decoration: none;
    transition: 0.3s;
}

.whatsapp-btn:hover {
    background: #128C7E;
    transform: translateY(-2px);
}

.floating-buttons {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    z-index: 1000;
}

.floating-btn {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    position: relative;
    color: white !important;
    text-decoration: none !important;
}

.floating-btn:hover {
    transform: translateY(-5px) scale(1.1);
}

.floating-btn::after {
    content: attr(data-tooltip);
    position: absolute;
    right: 75px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    font-size: 0.9rem;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
}

.floating-btn:hover::after {
    opacity: 1;
}

/* WhatsApp Button */
.whatsapp-btn {
    background: #25D366;
    animation: pulse-whatsapp 2s infinite;
}

/* LinkedIn Button */
.linkedin-btn {
    background: #0A66C2;
    animation: pulse-linkedin 2s infinite;
}

/* Email Button */
.email-btn {
    background: #EA4335;
    animation: pulse-email 2s infinite;
}

/* Animations */
@keyframes pulse-whatsapp {
    0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5); }
    70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
    100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
}

@keyframes pulse-linkedin {
    0% { box-shadow: 0 0 0 0 rgba(10, 102, 194, 0.5); }
    70% { box-shadow: 0 0 0 15px rgba(10, 102, 194, 0); }
    100% { box-shadow: 0 0 0 0 rgba(10, 102, 194, 0); }
}

@keyframes pulse-email {
    0% { box-shadow: 0 0 0 0 rgba(234, 67, 53, 0.5); }
    70% { box-shadow: 0 0 0 15px rgba(234, 67, 53, 0); }
    100% { box-shadow: 0 0 0 0 rgba(234, 67, 53, 0); }
}

@media (max-width: 768px) {
    .floating-buttons {
        bottom: 1rem;
        right: 1rem;
    }
    
    .floating-btn {
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
    }
    
    .floating-btn::after {
        font-size: 0.8rem;
        right: 65px;
    }
}

.message-list {
    max-height: 400px;
    overflow-y: auto;
    margin: 1rem 0;
}

.message-item {
    background: #2a2a2a;
    border-radius: 10px;
    padding: 1rem;
    margin-bottom: 1rem;
}

.message-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.back-btn {
    background: none;
    border: none;
    color: #25D366;
    cursor: pointer;
    padding: 5px 10px;
}

.view-messages-btn {
    width: 100%;
    margin-top: 1rem;
    background: #333;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
}

        /* About Section */
/* About Section Styles */
.about-card-link {
    text-decoration: none;
    color: inherit;
    display: block;
    transition: transform 0.3s ease;
}

.about-card-link:hover {
    text-decoration: none;
    transform: translateY(-5px);
}

.about-card {
    background: linear-gradient(135deg, rgba(246, 211, 101, 0.1), rgba(253, 160, 133, 0.1));
    backdrop-filter: blur(10px);
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.animated-avatar {
    position: relative;
    width: 120px;
    height: 120px;
    margin: 0 auto;
}

.avatar-img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    position: relative;
    z-index: 2;
}

.avatar-glow {
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    background: linear-gradient(45deg, #f6d365, #fda085);
    border-radius: 50%;
    animation: rotate-glow 6s linear infinite;
    opacity: 0.2;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    margin: 2rem 0;
}

.stat-item {
    background: rgba(255, 255, 255, 0.05);
    padding: 1.5rem;
    border-radius: 15px;
    text-align: center;
}

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: #fda085;
}

.explore-more {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #fda085;
    transition: all 0.3s ease;
}

.about-card:hover .explore-more {
    gap: 1rem;
    color: #f6d365;
}

@keyframes rotate-glow {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Button Hover Effect */
.btn-light:hover {
    background: #f6d365;
    color: white;
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}





        /* Contact Section */
        #contact {
            background-color: #ffffff;
            padding: 60px 20px;
        }

        /* Social Media Button */
        .social-btn {
            font-size: 1.2rem;
            margin: 10px;
            transition: background-color 0.3s;
        }

        .social-btn:hover {
            background-color: #007bff;
            color: white;
        }

        #back-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: white;
    padding: 10px;
    border-radius: 50%;
    display: none; /* Hidden initially */
    z-index: 1000;
}

#back-top a {
    text-decoration: none;
    color: inherit;
}

#back-top:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    

   <!-- Enhanced 3D Navigation Bar -->
<nav class="navbar navbar-expand-lg fixed-top glass-nav" style="transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);">
    <div class="container">
        <!-- Animated Brand Logo -->
        <a class="navbar-brand brand-3d" href="#home">
            <span class="logo-text">MF</span>
            <span class="logo-border"></span>
        </a>

        <!-- Animated Hamburger Icon -->
        <button class="navbar-toggler hologram-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger-inner"></div>
        </button>

        <!-- Navigation Links with Icons -->
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item" style="--delay: 1">
            <a class="nav-link nav-3d" href="#home">
                <i class="fas fa-home nav-icon"></i>
                <span class="nav-text">Home</span>
                <span class="nav-border"></span>
            </a>
        </li>
        <li class="nav-item" style="--delay: 2">
            <a class="nav-link nav-3d" href="about.php">
                <i class="fas fa-user-tie nav-icon"></i>
                <span class="nav-text">About</span>
                <span class="nav-border"></span>
            </a>
        </li>
        <li class="nav-item" style="--delay: 3">
            <a class="nav-link nav-3d" href="skills.php">
                <i class="fas fa-tools nav-icon"></i>
                <span class="nav-text">Skills</span>
                <span class="nav-border"></span>
            </a>
        </li>
        <li class="nav-item" style="--delay: 4">
            <a class="nav-link nav-3d" href="projects.php">
                <i class="fas fa-code-branch nav-icon"></i>
                <span class="nav-text">Projects</span>
                <span class="nav-border"></span>
            </a>
        </li>
        <li class="nav-item" style="--delay: 5">
            <a class="nav-link nav-3d" href="blog.php">
                <i class="fas fa-blog nav-icon"></i>
                <span class="nav-text">Blog</span>
                <span class="nav-border"></span>
            </a>
        </li>
        <li class="nav-item" style="--delay: 6">
            <a class="nav-link nav-3d" href="contact.php">
                <i class="fas fa-envelope-open-text nav-icon"></i>
                <span class="nav-text">Contact</span>
                <span class="nav-border"></span>
            </a>
        </li>
    </ul>
</div>
    </div>
</nav>

 <!-- Modern 3D Intro Section -->
<section id="home" class="intro-section">
    <div class="floating-particles"></div>
    <div class="gradient-overlay"></div>
    
    <div class="intro-content">
        <div class="profile-container" data-tilt data-tilt-max="15" data-tilt-glare="true">
            <img src="fawaas.png" alt="Mohamed Fawaas" class="profile-photo floating">
            <div class="profile-border"></div>
        </div><br>

        <h1 class="text-stroke">Mohamed Fawaas</h1>
        
        <div class="intro-glass">
            <p class="typing-effect">I am a dedicated and enthusiastic student<br>
                currently completing my Higher Diploma in<br>
                Computing and Software Engineering.
            </p>
        </div>

        <div class="cta-container">
            <a href="projects.php" class="cta-btn work-btn">
                <span>Explore My Work</span>
                <div class="hover-effect"></div>
            </a>
            
            <button class="cta-btn hire-btn" onclick="showHireForm()">
                <span>Hire Me</span>
                <div class="hover-effect"></div>
            </button>
        </div>

       <!-- Floating Contact Buttons -->
<div class="floating-buttons">
    <!-- LinkedIn Button -->
    <a href="https://www.linkedin.com/in/mohamed-fawaas" 
       class="floating-btn linkedin-btn" 
       target="_blank"
       data-tooltip="Connect on LinkedIn">
        <i class="fab fa-linkedin-in"></i>
    </a>

    <!-- Email Button -->
    <a href="mailto:mohamedfawaas2003@gmail.com" 
       class="floating-btn email-btn"
       data-tooltip="Send Email">
        <i class="fas fa-envelope"></i>
    </a>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/94762430106" 
       class="floating-btn whatsapp-btn" 
       target="_blank"
       data-tooltip="Message on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

        <!-- Hire Me Popup -->
        <div id="hirePopup" class="hire-popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closeHireForm()">&times;</span>
        <h3>Let's Work Together!</h3>
        
        <!-- Message Display Section -->
        <div id="messageContainer" style="display: none;">
            <div class="message-header">
                <h4>Messages</h4>
                <button onclick="toggleMessageView()" class="back-btn">
                    <i class="fas fa-arrow-left"></i> Back to Form
                </button>
            </div>
            <div id="messageList" class="message-list"></div>
        </div>

        <!-- Contact Form -->
        <form id="hireForm" style="display: block;">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Project Details" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
            <button type="button" onclick="toggleMessageView()" class="view-messages-btn">
                View Messages
            </button>
        </form>

        <!-- WhatsApp Integration -->
        <div class="whatsapp-link">
            <p>Or contact directly via:</p>
            <a href="https://wa.me/94762430106" class="whatsapp-btn" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
        </div>
    </div>
</div>
    </div>
</section>

<!-- About Section (index.html) -->
<section id="about" class="container fade-in py-5">
    <h2 class="text-center text-primary mb-4" data-aos="fade-up">About Me</h2>
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <a href="about.php" class="about-card-link">
                <div class="card about-card hover-3d shadow-lg border-0" data-aos="zoom-in">
                    <div class="card-body text-center">
                        <div class="avatar-container mb-4">
                            <div class="animated-avatar">
                                <img src="fawaas.png" alt="Mohamed Fawaas" class="avatar-img">
                                <div class="avatar-glow"></div>
                            </div>
                        </div>
                        <div class="about-content">
                            <h3 class="text-gradient mb-3">Mohamed Fawaas</h3>
                            <p class="lead text-muted">
                                Passionate Computing Student Specializing in<br>
                                Software Engineering & Full-Stack Development
                            </p>
                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-number">50+</div>
                                    <div class="stat-label">Projects Completed</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">4.8</div>
                                    <div class="stat-label">Avg. Client Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <span class="explore-more">
                            View Full Profile <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- Contact Section -->
<div id="contact" class="container fade-in py-5 text-center">
    <h2 class="mb-4" style="color: #ff6b6b;">Contact Me</h2>
    <p class="text-muted mb-4">Feel free to reach out to me through any of the platforms below. I'd love to connect!</p>
    <!-- Contact Buttons -->
    <div class="d-inline-flex flex-column gap-3">
        <a href="mailto:mohamedfawaas2003@gmail.com" class="btn btn-outline-primary d-flex align-items-center justify-content-center" style="width: 200px; height: 50px;">
            <i class="fas fa-envelope me-2" style="font-size: 1.5rem;"></i> Email Me
        </a>
        <a href="https://www.linkedin.com/in/mohamed-fawaas" target="_blank" class="btn btn-outline-info d-flex align-items-center justify-content-center" style="width: 200px; height: 50px;">
            <i class="fab fa-linkedin me-2" style="font-size: 1.5rem;"></i> LinkedIn
        </a>
        <a href="https://github.com/Mohamed-Fawaas" target="_blank" class="btn btn-outline-dark d-flex align-items-center justify-content-center" style="width: 200px; height: 50px;">
            <i class="fab fa-github me-2" style="font-size: 1.5rem;"></i> GitHub
        </a>
        <a href="https://www.facebook.com/groups/974133861218817/?ref=share&mibextid=KtfwRi" target="_blank" class="btn btn-outline-primary d-flex align-items-center justify-content-center" style="width: 200px; height: 50px;">
            <i class="fab fa-facebook me-2" style="font-size: 1.5rem;"></i> Facebook
        </a>
        <a href="https://youtube.com/@MohamedFawaas" target="_blank" class="btn btn-outline-danger d-flex align-items-center justify-content-center" style="width: 200px; height: 50px;">
            <i class="fab fa-youtube me-2" style="font-size: 1.5rem;"></i> YouTube
        </a>
    </div>
</div>

<!-- Footer Bottom -->
<div class="footer-bottom">

    <div class="row d-flex align-items-center">
        <div class="col-lg-12">
            <div class="footer-copy-right text-center">
                <p>
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by Mohamed Fawaas.
                </p>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<script>

jQuery(document).ready(function($) {
        // Tilt initialization
        $('.profile-container').tilt({
            max: 15,
            glare: true
        });

        // Form handling
        $('#hireForm').submit(function(e) {
            e.preventDefault();
            // Form submission logic
        });
    });


    document.addEventListener("DOMContentLoaded", function () {
    // Single scroll event listener for navbar
    const navbar = document.querySelector('.navbar');
    
    // Improved smooth scroll with hash check
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
            // Only handle internal page anchors
            if (this.hash && document.querySelector(this.hash)) {
                e.preventDefault();
                const target = document.querySelector(this.hash);
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Update URL hash without jumping
                history.pushState(null, null, this.hash);
            }
            // External links (like about.html) will follow normally
        });
    });

    // Combined scroll handler
    window.addEventListener('scroll', () => {
        // Navbar background change
        navbar.classList.toggle('scrolled', window.scrollY > 50);
        
        // Active link detection
        const sections = document.querySelectorAll('section');
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.hash === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Improved Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px'
    });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});

// Smooth scrolling for the "Go to Top" button
document.getElementById('back-top').addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default anchor click behavior
    window.scrollTo({ top: 0, behavior: 'smooth' }); // Scroll to the top smoothly
});
$('.profile-container').tilt({
    scale: 1.05,
    glare: true,
    maxGlare: 0.2
});

// Initialize tilt.js with responsive settings
if (window.innerWidth > 768) {
    $('.profile-container').tilt({
        maxTilt: 15,
        glare: true,
        maxGlare: 0.2,
        reset: false
    });
}

// Handle window resize
window.addEventListener('resize', () => {
    if (window.innerWidth <= 768) {
        $('.profile-container').tilt('destroy');
    } else {
        $('.profile-container').tilt({
            maxTilt: 15,
            glare: true,
            maxGlare: 0.2,
            reset: false
        });
    }
});




// Add this JavaScript
function showHireForm() {
    document.getElementById('hirePopup').style.display = 'flex';
}

function closeHireForm() {
    document.getElementById('hirePopup').style.display = 'none';
}

// Close popup when clicking outside
window.onclick = function(event) {
    const popup = document.getElementById('hirePopup');
    if (event.target == popup) {
        popup.style.display = 'none';
    }
}



let messages = [];

function toggleMessageView() {
    const form = document.getElementById('hireForm');
    const messageContainer = document.getElementById('messageContainer');
    if (form.style.display === 'none') {
        form.style.display = 'block';
        messageContainer.style.display = 'none';
    } else {
        form.style.display = 'none';
        messageContainer.style.display = 'block';
        loadMessages();
    }
}

async function loadMessages() {
    try {
        const response = await fetch('get-messages.php');
        messages = await response.json();
        renderMessages();
    } catch (error) {
        console.error('Error loading messages:', error);
    }
}

function renderMessages() {
    const container = document.getElementById('messageList');
    container.innerHTML = messages.map(msg => `
        <div class="message-item">
            <h5>${msg.name} <small>${msg.email}</small></h5>
            <p>${msg.message}</p>
            <small>${new Date(msg.timestamp).toLocaleString()}</small>
        </div>
    `).join('');
}

// Modify form submission handler
document.getElementById('hireForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    try {
        const response = await fetch('save-message.php', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        if (!response.ok) {
            throw new Error(result.error || 'Unknown error occurred');
        }

        // Show success message
        alert(result.message);
        this.reset();
        await loadMessages(); // Refresh messages after submission
        
    } catch (error) {
        console.error('Error:', error);
        alert(`Error: ${error.message}`);
    }
});

    </script>
     
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="tilt.jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
