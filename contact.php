<?php
session_start();
require_once 'config.php'; // Database configuration

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = preg_replace('/[^0-9]/', '', trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate inputs
    $errors = [];
    if (empty($name)) $errors[] = 'Name is required';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email';
    if (empty($message)) $errors[] = 'Message is required';

    if (empty($errors)) {
        try {
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $phone, $message);
            $stmt->execute();
            
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'Your message has been sent successfully!';
        } catch (Exception $e) {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Error: ' . $e->getMessage();
        }
        header('Location: contact.php');
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;
        header('Location: contact.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --gradient-1: #ff6b6b;
            --gradient-2: #4ecdc4;
        }

        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
        }

        .form-control:focus {
            border-color: var(--gradient-1);
            box-shadow: 0 0 0 0.25rem rgba(255, 107, 107, 0.25);
        }

        .btn-gradient {
            background: linear-gradient(45deg, var(--gradient-1), var(--gradient-2));
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .toast-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="toast-notification" data-aos="fade-down">
            <div class="alert alert-<?= $_SESSION['status'] ?> alert-dismissible fade show">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
        <?php unset($_SESSION['status'], $_SESSION['message']); ?>
    <?php endif; ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-card p-4 p-md-5 mb-4" data-aos="zoom-in">
                    <h1 class="text-center mb-4 display-4 fw-bold" style="background: linear-gradient(45deg, var(--gradient-1), var(--gradient-2)); -webkit-background-clip: text; color: transparent;">
                        Get in Touch
                    </h1>
                    
                    <form method="POST" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control <?= isset($_SESSION['errors']) && isset($_SESSION['old']['name']) ? 'is-invalid' : '' ?>" 
                                           id="name" name="name" placeholder="John Doe" 
                                           value="<?= $_SESSION['old']['name'] ?? '' ?>" required>
                                    <label for="name">Your Name</label>
                                    <div class="invalid-feedback">Please enter your name</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control <?= isset($_SESSION['errors']) && isset($_SESSION['old']['email']) ? 'is-invalid' : '' ?>" 
                                           id="email" name="email" placeholder="name@example.com" 
                                           value="<?= $_SESSION['old']['email'] ?? '' ?>" required>
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback">Please enter a valid email</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="phone" 
                                           placeholder="Phone" value="<?= $_SESSION['old']['phone'] ?? '' ?>">
                                    <label for="phone">Phone Number (optional)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control <?= isset($_SESSION['errors']) && isset($_SESSION['old']['message']) ? 'is-invalid' : '' ?>" 
                                              id="message" name="message" placeholder="Your message" 
                                              style="height: 150px" required><?= $_SESSION['old']['message'] ?? '' ?></textarea>
                                    <label for="message">Your Message</label>
                                    <div class="invalid-feedback">Please enter your message</div>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-gradient btn-lg px-5 py-3" type="submit">
                                    <i class="fas fa-paper-plane me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php unset($_SESSION['errors'], $_SESSION['old']); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                new bootstrap.Alert(alert).close();
            });
        }, 5000);
    </script>
</body>
</html>