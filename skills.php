<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Skills - Mohamed Fawaas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #7c3aed;
            --secondary-color: #4f46e5;
            --accent-color: #ff6b6b;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            color: #f8fafc;
        }

        .skills-container {
            padding: 4rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            /*background: linear-gradient(45deg, #ff6b6b, #ffd93d);*/
            clip: text;
            -webkit-text-fill-color: white;
        }

        .skill-category {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .category-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .category-icon {
            font-size: 2rem;
            color: var(--accent-color);
        }

        .tech-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .tech-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.03);
            transition: all 0.3s ease;
        }

        .tech-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }

        .tech-icon {
            font-size: 1.2rem;
            color: #ffd93d;
        }

        .tech-name {
            font-weight: 500;
        }

        .badge {
            margin-left: auto;
            background: rgba(255, 255, 255, 0.1);
            color: #ff6b6b;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            
            .tech-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="skills-container">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Technical Skills</h2>

            <!-- Python -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fab fa-python category-icon"></i>
                    <h3>Python</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fab fa-brands fa-django tech-icon"></i>
                        <span class="tech-name">Django</span>
                        <span class="badge">Expert</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-flask tech-icon"></i>
                        <span class="tech-name">Flask</span>
                        <span class="badge">Advanced</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-brain tech-icon"></i>
                        <span class="tech-name">PyTorch</span>
                        <span class="badge">Advanced</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-project-diagram tech-icon"></i>
                        <span class="tech-name">TensorFlow</span>
                        <span class="badge">Intermediate</span>
                    </div>
                </div>
            </div>

            <!-- Java -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fab fa-java category-icon"></i>
                    <h3>Java</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fas fa-leaf tech-icon"></i>
                        <span class="tech-name">Spring Boot</span>
                        <span class="badge">Expert</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-database tech-icon"></i>
                        <span class="tech-name">Hibernate</span>
                        <span class="badge">Advanced</span>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-android tech-icon"></i>
                        <span class="tech-name">Android SDK</span>
                        <span class="badge">Advanced</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-puzzle-piece tech-icon"></i>
                        <span class="tech-name">Jetpack</span>
                        <span class="badge">Intermediate</span>
                    </div>
                </div>
            </div>

            <!-- JavaScript & TypeScript -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fab fa-js category-icon"></i>
                    <h3>JavaScript/TypeScript</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fab fa-react tech-icon"></i>
                        <span class="tech-name">React</span>
                        <span class="badge">Expert</span>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-angular tech-icon"></i>
                        <span class="tech-name">Angular</span>
                        <span class="badge">Advanced</span>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-vuejs tech-icon"></i>
                        <span class="tech-name">Vue.js</span>
                        <span class="badge">Intermediate</span>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-node tech-icon"></i>
                        <span class="tech-name">Node.js</span>
                        <span class="badge">Expert</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-bolt tech-icon"></i>
                        <span class="tech-name">Express</span>
                        <span class="badge">Expert</span>
                    </div>
                </div>
            </div>

            <!-- C# -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fab fa-microsoft category-icon"></i>
                    <h3>C#</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fas fa-dot-circle tech-icon"></i>
                        <span class="tech-name">.NET</span>
                        <span class="badge">Advanced</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-dot-circle tech-icon"></i>
                        <span class="tech-name">.NET Core</span>
                        <span class="badge">Expert</span>
                    </div>
                </div>
            </div>

            <!-- Ruby -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fas fa-gem category-icon"></i>
                    <h3>Ruby</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fas fa-train tech-icon"></i>
                        <span class="tech-name">Ruby on Rails</span>
                        <span class="badge">Intermediate</span>
                    </div>
                </div>
            </div>

            <!-- PHP -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fab fa-php category-icon"></i>
                    <h3>PHP</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fab fa-laravel tech-icon"></i>
                        <span class="tech-name">Laravel</span>
                        <span class="badge">Advanced</span>
                    </div>
                </div>
            </div>

            <!-- Go -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fas fa-code category-icon"></i>
                    <h3>Go</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fas fa-cocktail tech-icon"></i>
                        <span class="tech-name">Gin</span>
                        <span class="badge">Intermediate</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-wave-square tech-icon"></i>
                        <span class="tech-name">Echo</span>
                        <span class="badge">Intermediate</span>
                    </div>
                </div>
            </div>

            <!-- Rust -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fas fa-cogs category-icon"></i>
                    <h3>Rust</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fas fa-rocket tech-icon"></i>
                        <span class="tech-name">Rocket</span>
                        <span class="badge">Intermediate</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-cog tech-icon"></i>
                        <span class="tech-name">Actix</span>
                        <span class="badge">Intermediate</span>
                    </div>
                </div>
            </div>

            <!-- Swift -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fab fa-swift category-icon"></i>
                    <h3>Swift</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fas fa-mobile-alt tech-icon"></i>
                        <span class="tech-name">SwiftUI</span>
                        <span class="badge">Advanced</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-paint-brush tech-icon"></i>
                        <span class="tech-name">UIKit</span>
                        <span class="badge">Intermediate</span>
                    </div>
                </div>
            </div>

            <!-- SQL -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fas fa-database category-icon"></i>
                    <h3>SQL</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fas fa-elephant tech-icon"></i>
                        <span class="tech-name">PostgreSQL</span>
                        <span class="badge">Expert</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-database tech-icon"></i>
                        <span class="tech-name">MySQL</span>
                        <span class="badge">Expert</span>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-mobile tech-icon"></i>
                        <span class="tech-name">SQLite</span>
                        <span class="badge">Advanced</span>
                    </div>
                </div>
            </div>

            <!-- HTML & CSS -->
            <div class="skill-category" data-aos="fade-up">
                <div class="category-header">
                    <i class="fab fa-html5 category-icon"></i>
                    <h3>HTML & CSS</h3>
                </div>
                <div class="tech-list">
                    <div class="tech-item">
                        <i class="fab fa-html5 tech-icon"></i>
                        <span class="tech-name">HTML5</span>
                        <span class="badge">Expert</span>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-css3-alt tech-icon"></i>
                        <span class="tech-name">CSS3</span>
                        <span class="badge">Expert</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>