<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Mohamed Fawaas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #7c3aed;
            --secondary-color: #4f46e5;
            --accent-color: #ff6b6b;
        }

        .blog-page {
            background: #0f172a;
            color: #f8fafc;
            min-height: 100vh;
        }

        .blog-hero {
            /*background: linear-gradient(135deg, #0072ff, #00c6ff);*/
            padding: 6rem 0;
            text-align: center;
        }

        .blog-header {
            font-size: 2.5rem;
            font-weight: 700;
            /*background: linear-gradient(45deg, #fff, #ffd93d);*/
            clip: text;
            -webkit-text-fill-color: white;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 4rem 2rem;
        }

        .blog-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .card-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .card-content {
            padding: 1.5rem;
        }

        .post-date {
            color: #ffd93d;
            font-size: 0.9rem;
        }

        .post-title {
            font-size: 1.3rem;
            margin: 1rem 0;
        }

        .post-excerpt {
            color: #94a3b8;
            margin-bottom: 1.5rem;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #ff6b6b;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            gap: 1rem;
            color: #ffd93d;
        }

        .tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin: 1rem 0;
        }

        .tag {
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            background: rgba(255, 107, 107, 0.15);
            color: #ff6b6b;
            font-size: 0.8rem;
        }

        @media (max-width: 768px) {
            .blog-header {
                font-size: 2rem;
            }
            
            .blog-grid {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body class="blog-page">
    <!-- Blog Navigation -->
    <!--<nav class="navbar">[...]</nav>-->

    <!-- Blog Hero Section -->
    <section class="blog-hero" data-aos="fade-up">
        <div class="container">
            <h1 class="blog-header">Tech Insights & Tutorials</h1>
            <p class="text-white mt-3">Exploring the world of software development</p>
        </div>
    </section>

    <!-- Blog Content -->
    <main class="container">
        <div class="blog-grid">
            <!-- Blog Post 1 -->
            <article class="blog-card" data-aos="fade-up">
                <div class="card-image" style="background-image: url('blog1.jpg')"></div>
                <div class="card-content">
                    <div class="tags">
                        <span class="tag">Web Development</span>
                        <span class="tag">React</span>
                    </div>
                    <span class="post-date">March 15, 2024 • 5 min read</span>
                    <h3 class="post-title">Mastering React Hooks in Modern Applications</h3>
                    <p class="post-excerpt">Explore advanced patterns for using React Hooks in large-scale applications...</p>
                    <a href="#" class="read-more">
                        <span>Read Article</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article class="blog-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-image" style="background-image: url('blog2.jpg')"></div>
                <div class="card-content">
                    <div class="tags">
                        <span class="tag">AI/ML</span>
                        <span class="tag">Python</span>
                    </div>
                    <span class="post-date">March 12, 2024 • 8 min read</span>
                    <h3 class="post-title">Building Neural Networks with PyTorch</h3>
                    <p class="post-excerpt">Step-by-step guide to creating custom neural architectures...</p>
                    <a href="#" class="read-more">
                        <span>Read Article</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Add more blog posts following the same structure -->
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>