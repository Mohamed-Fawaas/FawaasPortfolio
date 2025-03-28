<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Mohamed Fawaas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #f6d365, #fda085);
            --secondary-gradient: linear-gradient(135deg, #0072ff, #00c6ff);
        }

        .about-page {
            background: #f8f9fa;
            min-height: 100vh;
        }

        .about-hero {
            background: var(--primary-gradient);
            padding: 6rem 0;
            text-align: center;
            color: white;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background: #fda085;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .timeline-card {
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin: 40px 0;
            position: relative;
            width: 45%;
            transition: transform 0.3s ease;
        }

        .timeline-card:hover {
            transform: translateY(-5px);
        }

        .skill-badge {
            background: var(--secondary-gradient);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            margin: 5px;
            display: inline-block;
        }

        .education-icon {
            font-size: 2rem;
            color: #fda085;
            margin-bottom: 1rem;
        }

        .about-content {
            padding: 4rem 0;
        }

        .philosophy-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .certification-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .certification-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .certification-icon {
            font-size: 3rem;
            color: #0072ff;
            margin-bottom: 1rem;
        }

        .certification-card h5 {
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .certification-card p {
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>
<body class="about-page">
    <!-- Navigation --><!-- Include your existing navbar here -->

    <!-- Hero Section -->
    <section class="about-hero" data-aos="fade-down">
        <div class="container">
            <h1 class="display-4 fw-bold">Mohamed Fawaas</h1>
            <p class="lead">Software Engineering Student & Tech Enthusiast</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="about-content">
        <div class="container">
            <!-- Education Timeline -->
            <section class="mb-5" data-aos="fade-right">
                <h2 class="text-center mb-5">Education & Experience</h2>
                <div class="timeline">
                    <!-- Timeline Item 1 -->
                    <div class="timeline-card left" data-aos="zoom-in">
                        <div class="education-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Higher Diploma in Computing</h3>
                        <p class="text-muted">2022 - Present</p>
                        <p>Specializing in Software Engineering and Full-Stack Development</p>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="timeline-card right" data-aos="zoom-in">
                        <div class="education-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Junior Developer</h3>
                        <p class="text-muted">2023 - Present</p>
                        <p>Developing web applications using modern frameworks</p>
                    </div>
                </div>
            </section>

            <!-- Skills Section -->
            <section class="mb-5" data-aos="fade-left">
                <h2 class="text-center mb-5">Technical Expertise</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="philosophy-card mb-4">
                            <h4>Development Philosophy</h4>
                            <p>I believe in creating scalable solutions with clean code architecture and user-centric design principles.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="philosophy-card">
                            <h4>Core Skills</h4>
                            <div class="skills-container">
                                <span class="skill-badge">Full-Stack Development</span>
                                <span class="skill-badge">Mobile Development</span>
                                <span class="skill-badge">Cloud Computing</span>
                                <span class="skill-badge">UI/UX Design</span>
                                <span class="skill-badge">Programming Languages</span>
                                <span class="skill-badge">Data Structures & Algorithms (DSA)</span>
                                <span class="skill-badge">Database Management</span>
                                <span class="skill-badge">Version Control & Collaboration</span>
                                <span class="skill-badge">Web Development</span>
                                <span class="skill-badge">Software Development Principles</span>
                                <span class="skill-badge">Testing & Debugging</span>
                                <span class="skill-badge">Cybersecurity Basics</span>
                                <span class="skill-badge">AI/ML</span>
                                <span class="skill-badge">Problem Solving & System Design</span>
                                <span class="skill-badge">Communication & Teamwork Skills</span>
                                <span class="skill-badge"> Time Management & Productivity Tools</span>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Certifications -->
            <section data-aos="fade-up">
                <h2 class="text-center mb-5">Certifications</h2>
                <div class="row">
                    <!-- Microsoft Certification -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fab fa-microsoft certification-icon"></i>
                            <h5>Python Programming with Visual Studio Code</h5>
                            <p>Microsoft Learn Student Ambassadors</p>
                            <p>Issued Feb 2025 · Expires Feb 2027</p>
                        </div>
                    </div>

                    <!-- Front-End Web Development -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-code certification-icon"></i>
                            <h5>Front-End Web Development</h5>
                            <p>University of Moratuwa</p>
                            <p>Issued Jan 2025 · Expires Jan 2027</p>
                        </div>
                    </div>

                    <!-- Full Stack Development -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fab fa-js certification-icon"></i>
                            <h5>Master of Full Stack Development</h5>
                            <p>Udemy</p>
                            <p>Issued Dec 2024 · Expires Dec 2026</p>
                        </div>
                    </div>

                    <!-- PHP Laravel -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fab fa-laravel certification-icon"></i>
                            <h5>PHP Laravel: Real Estate Management</h5>
                            <p>Udemy</p>
                            <p>Issued Dec 2024 · Expires Oct 2026</p>
                        </div>
                    </div>

                    <!-- Team Building -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-users certification-icon"></i>
                            <h5>Effective Teamwork and Team Building</h5>
                            <p>Udemy</p>
                            <p>Issued Oct 2024 · Expires Oct 2026</p>
                        </div>
                    </div>

                    <!-- IBM Swift AI -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fab fa-swift certification-icon"></i>
                            <h5>Build Swift Mobile Apps with Watson AI</h5>
                            <p>IBM</p>
                            <p>Issued Aug 2024 · Expires Aug 2026</p>
                        </div>
                    </div>

                    <!-- IBM GPT-3 -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-robot certification-icon"></i>
                            <h5>Create Voice Assistant with GPT-3 & Watson</h5>
                            <p>IBM</p>
                            <p>Issued Aug 2024 · Expires Aug 2026</p>
                        </div>
                    </div>

                    <!-- Psychology -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-brain certification-icon"></i>
                            <h5>Psychology and Counselling</h5>
                            <p>Orinsto Institute</p>
                            <p>Issued Aug 2024 · Expires Aug 2026</p>
                        </div>
                    </div>

                    <!-- Data Analysis with Python -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fab fa-python certification-icon"></i>
                            <h5>Data Analysis with Python</h5>
                            <p>IBM</p>
                            <p>Issued Jul 2024 · Expires Jul 2026</p>
                        </div>
                    </div>

                    <!-- Web Design for Beginners -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-paint-brush certification-icon"></i>
                            <h5>Web Design for Beginners</h5>
                            <p>University of Moratuwa</p>
                            <p>Issued Jul 2024 · Expires Jul 2026</p>
                        </div>
                    </div>

                    <!-- IoT in IT Sector -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-wifi certification-icon"></i>
                            <h5>IoT Influence in IT Sector</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued Jun 2024 · Expires Jun 2026</p>
                        </div>
                    </div>

                    <!-- MERN Stack -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fab fa-react certification-icon"></i>
                            <h5>Build Social Media Clone with MERN</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued Jun 2024 · Expires Jun 2026</p>
                        </div>
                    </div>

                    <!-- Chatbot Development -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-comments certification-icon"></i>
                            <h5>Build Your Own Chatbot</h5>
                            <p>IBM</p>
                            <p>Issued Jun 2024 · Expires Jun 2026</p>
                        </div>
                    </div>

                    <!-- Python for Data Science -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fab fa-python certification-icon"></i>
                            <h5>Python 101 for Data Science</h5>
                            <p>IBM</p>
                            <p>Issued Jun 2024 · Expires Jun 2026</p>
                        </div>
                    </div>

                    <!-- SQL and Databases -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-database certification-icon"></i>
                            <h5>SQL and Relational Databases 101</h5>
                            <p>IBM</p>
                            <p>Issued Jun 2024 · Expires Jun 2026</p>
                        </div>
                    </div>

                    <!-- IoT with AI -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-microchip certification-icon"></i>
                            <h5>IoT with Artificial Intelligence</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued May 2024 · Expires May 2026</p>
                        </div>
                    </div>

                    <!-- IoT Web Interface -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-globe certification-icon"></i>
                            <h5>IoT Web Interface Development</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued May 2024 · Expires May 2026</p>
                        </div>
                    </div>

                    <!-- MSc in AI -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-robot certification-icon"></i>
                            <h5>MSc in Artificial Intelligence</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued May 2024 · Expires May 2026</p>
                        </div>
                    </div>

                    <!-- MSc in Full Stack -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-layer-group certification-icon"></i>
                            <h5>MSc in Full Stack Development</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued May 2024 · Expires May 2026</p>
                        </div>
                    </div>

                    <!-- MSc in IoT -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-wifi certification-icon"></i>
                            <h5>MSc in Internet of Things</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued Apr 2024 · Expires Apr 2026</p>
                        </div>
                    </div>

                    <!-- JavaScript Specialist -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fab fa-js certification-icon"></i>
                            <h5>JavaScript Specialist Certification</h5>
                            <p>Developers Stack Academy</p>
                            <p>Issued Mar 2024 · Expires Mar 2026</p>
                        </div>
                    </div>

                    <!-- Full Stack Project -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-project-diagram certification-icon"></i>
                            <h5>Build a Full Stack Project</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued Feb 2024 · Expires Feb 2026</p>
                        </div>
                    </div>

                    <!-- Connecting Devices with IoT -->
                    <div class="col-md-4 mb-4">
                        <div class="certification-card">
                            <i class="fas fa-cloud certification-icon"></i>
                            <h5>Connecting Devices with Cloud - IoT</h5>
                            <p>NoviTech R&D Pvt Ltd</p>
                            <p>Issued Feb 2024 · Expires Feb 2026</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>