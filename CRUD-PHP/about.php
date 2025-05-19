<?php include('header.php'); ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-primary animate-text">About Me</h1>
            <div class="avatar-frame mx-auto mb-4">
                <img src="https://i.pinimg.com/736x/f3/08/86/f30886fba75775458b330086399efd86.jpg" alt="Avatar"
                    class="img-fluid rounded-circle">
                <div class="avatar-overlay"></div>
            </div>
        </div>

        <div class="card shadow border-0 hover-lift mx-auto" style="max-width: 800px;">
            <div class="card-body">
                <p class="text-muted mb-4 fade-in">My name is REN CHANTOLA. I live in Phnom Penh.</p>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="info-card">
                            <div class="d-flex mb-2">
                                <div class="icon-box gradient-1 me-3"><i class="fas fa-user-graduate"></i></div>
                                <div>
                                    <h6>Education</h6><small>Computer Science</small>
                                </div>
                            </div>
                            <p class="text-muted">I study at Royal University of Phnom Penh.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card">
                            <div class="d-flex mb-2">
                                <div class="icon-box gradient-2 me-3"><i class="fas fa-briefcase"></i></div>
                                <div>
                                    <h6>Experience</h6><small>Web Developer</small>
                                </div>
                            </div>
                            <p class="text-muted">I can do frontend and backend.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-top fade-in">
                    <h6 class="text-gradient mb-3">Let's Connect</h6>
                    <a href="mailto:chantola.ren@gmail.com" class="contact-link d-block mb-2"><i
                            class="fas fa-envelope text-primary me-2"></i>chantola.ren@gmail.com</a>
                    <a href="tel:+85516354159" class="contact-link d-block"><i
                            class="fas fa-phone text-primary me-2"></i>+855 16 354 159</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --grad1: linear-gradient(135deg, #0d6efd, #6610f2);
    --grad2: linear-gradient(135deg, #ff6b6b, #ff8e53);
}

.avatar-frame {
    width: 180px;
    height: 180px;
    border: 4px solid #fff;
    box-shadow: 0 0 15px rgba(13, 110, 253, 0.2);
    border-radius: 50%;
    position: relative;
    overflow: hidden;
}

.avatar-overlay {
    position: absolute;
    inset: 0;
    background: var(--grad1);
    opacity: 0;
    border-radius: 50%;
    transition: opacity 0.3s;
}

.avatar-frame:hover .avatar-overlay {
    opacity: 0.1;
}

.icon-box {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}

.gradient-1 {
    background: var(--grad1);
}

.gradient-2 {
    background: var(--grad2);
}

.info-card {
    background: #fff;
    padding: 1rem;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.info-card:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
}

.text-gradient {
    background: var(--grad1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.contact-link {
    color: #333;
    text-decoration: none;
    transition: all 0.3s;
}

.contact-link:hover {
    background: rgba(13, 110, 253, 0.05);
    padding-left: 5px;
}

.fade-in {
    animation: fadeIn 0.6s ease-in;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.animate-text {
    animation: shine 3s infinite ease;
    background-size: 200% auto;
}

@keyframes shine {
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