<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System - Case Study</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #ff6b6b;
            --secondary-color: #ffd93d;
            --accent-color: #7c3aed;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #f8fafc;
        }

        .case-study-hero {
            background: linear-gradient(135deg, #0072ff, #00c6ff);
            padding: 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .case-study-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            /*background: linear-gradient(45deg, #fff, var(--secondary-color));*/
            clip: text;
            -webkit-text-fill-color: white;
        }

        .case-study-content {
            padding: 4rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: var(--secondary-color);
        }

        .project-video {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .tech-stack {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin: 2rem 0;
        }

        .tech-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            color: var(--secondary-color);
            font-weight: 500;
        }

        .project-links {
            display: flex;
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .project-links a {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            color: #fff;
            transition: all 0.3s ease;
        }

        .project-links a.github-link {
            background: var(--primary-color);
        }

        .project-links a.youtube-link {
            background: #ff0000;
        }

        .project-links a:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .key-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }

        .feature-card h4 {
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: #94a3b8;
        }

        .testimonial {
            background: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
        }

        .testimonial p {
            font-style: italic;
            color: #94a3b8;
        }

        .testimonial-author {
            margin-top: 1rem;
            font-weight: 600;
            color: var(--secondary-color);
        }

        @media (max-width: 768px) {
            .case-study-hero h1 {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="case-study-hero">
        <div class="container">
            <h1 data-aos="fade-up">Gym Management System</h1>
            <p class="lead mt-3" data-aos="fade-up" data-aos-delay="200">A comprehensive fitness platform with member tracking, class scheduling, and progress analytics.</p>
        </div>
    </section>

    <!-- Case Study Content -->
    <section class="case-study-content">
        <div class="container">
            <!-- Project Video -->
            <div class="project-video mb-5" data-aos="fade-up">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/your-video-id" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <!-- Tech Stack -->
            <div class="tech-stack" data-aos="fade-up">
                <span class="tech-badge">React</span>
                <span class="tech-badge">Node.js</span>
                <span class="tech-badge">MongoDB</span>
                <span class="tech-badge">Express</span>
                <span class="tech-badge">Redux</span>
            </div>

            <!-- Project Links -->
            <div class="project-links" data-aos="fade-up">
                <a href="https://github.com/your-repo" class="github-link" target="_blank">
                    <i class="fab fa-github"></i>
                    <span>View on GitHub</span>
                </a>
                <a href="https://youtube.com/your-video" class="youtube-link" target="_blank">
                    <i class="fab fa-youtube"></i>
                    <span>Watch on YouTube</span>
                </a>
            </div>

            <!-- Key Features -->
            <div class="key-features" data-aos="fade-up">
                <div class="feature-card">
                    <h4>Member Tracking</h4>
                    <p>Track member progress, attendance, and payments with real-time updates.</p>
                </div>
                <div class="feature-card">
                    <h4>Class Scheduling</h4>
                    <p>Easily manage and schedule fitness classes with automated reminders.</p>
                </div>
                <div class="feature-card">
                    <h4>Progress Analytics</h4>
                    <p>Visualize member progress with detailed charts and reports.</p>
                </div>
            </div>

            <!-- Detailed Explanation -->
            <div class="detailed-explanation mt-5" data-aos="fade-up">
                <h2 class="section-title">Project Overview</h2>
                <p>
                    The Gym Management System is a full-stack web application designed to streamline gym operations. 
                    It includes features like member management, class scheduling, payment tracking, and progress analytics. 
                    Built with modern technologies, it provides a seamless experience for both gym owners and members.
                </p>
                <p>
                    The frontend is built with React and Redux for state management, while the backend uses Node.js and Express. 
                    MongoDB is used for database management, ensuring scalability and flexibility. The system also integrates 
                    with third-party APIs for payment processing and email notifications.
                </p>
            </div>

            <!-- Testimonial -->
            <div class="testimonial" data-aos="fade-up">
                <p>
                    "This gym management system has transformed how we operate. The real-time tracking and analytics 
                    have made it so much easier to manage our members and classes."
                </p>
                <div class="testimonial-author">- Mohamed Fawaas, Gym Owner</div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>