<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">



    <style>
        .projects-section {
            padding: 5rem 0;
            background: linear-gradient(45deg, #0f172a, #1e293b);
        }
        
        .section-title {
            font-size: 3.5rem;
            text-align: center;
            margin-bottom: 4rem;
            /*background: linear-gradient(45deg, #ff6b6b, #ffd93d);*/
            clip: text;
            -webkit-text-fill-color: white;
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            padding: 0 2rem;
        }
        
        .project-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            transform-style: preserve-3d;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .project-card:hover {
            transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }
        
        .project-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        
        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        
        .project-card:hover .project-image {
            transform: scale(1.05);
        }
        
        .image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 60%, rgba(0, 0, 0, 0.9));
        }
        
        .project-content {
            padding: 1.5rem;
        }
        
        .tech-stack {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .tech-badge {
            font-size: 0.8rem;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            background: rgba(255, 107, 107, 0.15);
            color: #ff6b6b;
        }
        
        .project-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #fff;
        }
        
        .project-description {
            color: #94a3b8;
            margin-bottom: 1.5rem;
        }
        
        .project-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .project-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #ffd93d;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .project-link:hover {
            gap: 1rem;
            text-shadow: 0 0 10px rgba(255, 217, 61, 0.5);
        }
        
        .project-links {
            display: flex;
            gap: 1rem;
        }
        
        .demo-link, .code-link {
            font-size: 1.2rem;
            color: #fff;
            transition: all 0.3s ease;
        }
        
        .demo-link:hover {
            color: #7c3aed;
            transform: translateY(-2px);
        }
        
        .code-link:hover {
            color: #ff6b6b;
            transform: translateY(-2px);
        }
        
        .project-glow {
            position: absolute;
            inset: 0;
            border-radius: 20px;
            background: radial-gradient(600px circle at var(--x) var(--y), 
                rgba(255, 107, 107, 0.15),
                transparent 40%);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .project-card:hover .project-glow {
            opacity: 1;
        }
        
        @media (max-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .project-image-container {
                height: 200px;
            }
        }
        </style>
        
</head>
<body>
    <!-- Projects Section -->
<section id="projects" class="projects-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">My Projects</h2>
        
        <div class="projects-grid">
            <!-- Project 1 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="100">
                <div class="project-image-container">
                    <img src="p1 gym center.png" alt="Project 1" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">HTML5</span>
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">CSS3</span>
                        <span class="tech-badge">Boostrap</span>
                        <span class="tech-badge">MySQL</span>
                    </div>
                    <h3 class="project-title">Gym Management System</h3>
                    <p class="project-description">A comprehensive fitness platform with member tracking, class scheduling, and progress analytics.</p>
                    <div class="project-actions">
                        <a href="project1.php" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 2 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="150">
                <div class="project-image-container">
                    <img src="p2-ecommerce.png" alt="Project 2" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Express</span>
                        <span class="tech-badge">PostgreSQL</span>
                    </div>
                    <h3 class="project-title">E-Commerce Platform</h3>
                    <p class="project-description">A full-featured online store with product management, cart functionality, and secure payments.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 3 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="200">
                <div class="project-image-container">
                    <img src="p3-social-media.png" alt="Project 3" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">Angular</span>
                        <span class="tech-badge">NestJS</span>
                        <span class="tech-badge">MySQL</span>
                    </div>
                    <h3 class="project-title">Social Media Dashboard</h3>
                    <p class="project-description">A real-time social media analytics dashboard with user engagement tracking.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 4 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="250">
                <div class="project-image-container">
                    <img src="p4-task-manager.png" alt="Project 4" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">Svelte</span>
                        <span class="tech-badge">Firebase</span>
                        <span class="tech-badge">GraphQL</span>
                    </div>
                    <h3 class="project-title">Task Manager App</h3>
                    <p class="project-description">A collaborative task management tool with real-time updates and team features.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 5 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="300">
                <div class="project-image-container">
                    <img src="p5-blog-platform.png" alt="Project 5" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">Next.js</span>
                        <span class="tech-badge">Strapi</span>
                        <span class="tech-badge">MongoDB</span>
                    </div>
                    <h3 class="project-title">Blog Platform</h3>
                    <p class="project-description">A modern blogging platform with rich text editing and SEO optimization.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 6 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="350">
                <div class="project-image-container">
                    <img src="p6-portfolio.png" alt="Project 6" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">HTML5</span>
                        <span class="tech-badge">CSS3</span>
                        <span class="tech-badge">JavaScript</span>
                    </div>
                    <h3 class="project-title">Personal Portfolio</h3>
                    <p class="project-description">A responsive and interactive portfolio showcasing my skills and projects.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 7 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="400">
                <div class="project-image-container">
                    <img src="p7-weather-app.png" alt="Project 7" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">React Native</span>
                        <span class="tech-badge">Expo</span>
                        <span class="tech-badge">OpenWeather API</span>
                    </div>
                    <h3 class="project-title">Weather Forecast App</h3>
                    <p class="project-description">A cross-platform weather app with real-time updates and location tracking.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 8 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="450">
                <div class="project-image-container">
                    <img src="p8-chat-app.png" alt="Project 8" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">Socket.io</span>
                        <span class="tech-badge">React</span>
                        <span class="tech-badge">Redis</span>
                    </div>
                    <h3 class="project-title">Real-Time Chat App</h3>
                    <p class="project-description">A real-time messaging application with group chat and message history.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 9 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="500">
                <div class="project-image-container">
                    <img src="p9-expense-tracker.png" alt="Project 9" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">Flutter</span>
                        <span class="tech-badge">Dart</span>
                        <span class="tech-badge">Firebase</span>
                    </div>
                    <h3 class="project-title">Expense Tracker</h3>
                    <p class="project-description">A mobile app for tracking daily expenses with visual analytics.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        
            <!-- Project 10 -->
            <article class="project-card" data-aos="fade-up" data-aos-delay="550">
                <div class="project-image-container">
                    <img src="p10-recipes.png" alt="Project 10" class="project-image">
                    <div class="image-overlay"></div>
                </div>
                <div class="project-content">
                    <div class="tech-stack">
                        <span class="tech-badge">Vue 3</span>
                        <span class="tech-badge">Pinia</span>
                        <span class="tech-badge">Spoonacular API</span>
                    </div>
                    <h3 class="project-title">Recipe Finder</h3>
                    <p class="project-description">A recipe discovery platform with advanced search and filtering options.</p>
                    <div class="project-actions">
                        <a href="#" class="project-link">
                            <span>View Case Study</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="project-links">
                            <a href="#" class="demo-link" title="Live Demo">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="code-link" title="View Code">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-glow"></div>
            </article>
        </div>
    

            <!-- Repeat for other projects with different data-aos-delay values -->
        </div>
    </div>
</section>





<script>
    // Mouse position tracking for glow effect
    document.querySelectorAll('.project-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--x', `${x}px`);
            card.style.setProperty('--y', `${y}px`);
        });
    });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>  
</body>
</html>