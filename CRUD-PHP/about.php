<?php include('header.php'); ?>

<section class="about-section py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h1 class="display-4 fw-bold text-primary mb-4 animate-text">About Me</h1>
                <div class="position-relative hover-scale">
                    <div class="avatar-frame shadow-lg">
                        <img src="pf.jpg" alt="Vedent Patel-Serisken" class="img-fluid rounded-circle hover-zoom">
                        <div class="avatar-overlay"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 hover-lift">
                    <div class="card-body p-5">
                        <div class="bio-content">
                            <p class="lead text-muted mb-4 fade-in">
                                My name is REN CHANTOLA.Currently I live in Phnom Penh.
                            </p>

                            <div class="row g-4">
                                <!-- Education Card -->
                                <div class="col-md-6">
                                    <div class="info-card hover-shadow">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="icon-box gradient-1 text-white me-3">
                                                <i class="fas fa-user-graduate fs-4"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Education</h5>
                                                <small class="text-muted">Computer Science</small>
                                            </div>
                                        </div>
                                        <p class="text-muted">
                                            I study at Royal University of Phnom Penh with major Computer Science.
                                        </p>
                                    </div>
                                </div>

                                <!-- Experience Card -->
                                <div class="col-md-6">
                                    <div class="info-card hover-shadow">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="icon-box gradient-2 text-white me-3">
                                                <i class="fas fa-briefcase fs-4"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Experience</h5>
                                                <small class="text-muted">Web Developer</small>
                                            </div>
                                        </div>
                                        <p class="text-muted">
                                            I can do both of fronetend and backend.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Section -->
                        <div class="contact-info mt-5 pt-4 border-top fade-in">
                            <h4 class="text-gradient mb-4">Let's Connect</h4>
                            <div class="d-flex flex-wrap gap-4">
                                <a href="mailto:vedent@example.com" class="contact-link hover-scale">
                                    <i class="fas fa-envelope me-2 text-primary"></i>
                                    chantola.ren@gmail.com
                                </a>
                                <a href="tel:+15551234567" class="contact-link hover-scale">
                                    <i class="fas fa-phone me-2 text-primary"></i>
                                    +855 (016) 16-354-159
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
    --secondary-gradient: linear-gradient(135deg, #ff6b6b 0%, #ff8e53 100%);
}

.hover-scale {
    transition: transform 0.3s ease;
}

.hover-scale:hover {
    transform: scale(1.03);
}

.avatar-frame {
    width: 250px;
    height: 250px;
    margin: 0 auto;
    border: 4px solid white;
    box-shadow: 0 0 30px rgba(13, 110, 253, 0.2);
    position: relative;
    overflow: hidden;
    border-radius: 50%;
}

.avatar-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--primary-gradient);
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 50%;
}

.avatar-frame:hover .avatar-overlay {
    opacity: 0.1;
}

.icon-box {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

.gradient-1 {
    background: var(--primary-gradient);
}

.gradient-2 {
    background: var(--secondary-gradient);
}

.info-card {
    padding: 1.5rem;
    border-radius: 15px;
    transition: all 0.3s ease;
    background: white;
}

.info-card:hover {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
}

.text-gradient {
    background: var(--primary-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}

.contact-link {
    text-decoration: none;
    color: #333;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.contact-link:hover {
    background: rgba(13, 110, 253, 0.05);
    transform: translateY(-2px);
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in {
    animation: fadeIn 0.8s ease forwards;
}

.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
}

.animate-text {
    animation: textShine 3s ease infinite;
    background-size: 200% auto;
}

@keyframes textShine {
    0% {
        background-position: 0 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0 50%;
    }
}
</style>

<?php include('footer.php'); ?>