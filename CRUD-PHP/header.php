<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
    :root {
        --primary-color: #6366f1;
        --secondary-color: #4f46e5;
        --sidebar-width: 280px;
    }

    .dashboard-main {
        backg round-color: #f8fafc;
        min-height: 100vh;
        margin-left: var(--sidebar-width);
    }

    /* Navigation Sidebar */
    .sidebar {
        width: var(--sidebar-width);
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        background: white;
        border-right: 1px solid #e2e8f0;
        padding: 1rem;
        transition: all 0.3s;
    }

    .nav-link {
        border-radius: 8px;
        padding: 12px 16px;
        color: #64748b;
        transition: all 0.2s;
        margin: 4px 0;
    }

    .nav-link:hover {
        background: #f1f5f9;
        color: var(--primary-color);
    }

    .nav-link.active {
        background: var(--primary-color);
        color: white !important;
    }

    .topbar {
        height: 60px;
        background: white;
        border-bottom: 1px solid #e2e8f0;
        padding: 0 1.5rem;
    }

    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
        }

        .dashboard-main {
            margin-left: 0;
        }

        .sidebar.active {
            transform: translateX(0);
        }
    }
    </style>
</head>

<body>
    <!-- Navigation Sidebar -->
    <nav class="sidebar shadow-sm">
        <div class="d-flex flex-column h-100">
            <!-- Brand -->
            <div class="mb-4">
                <div class="d-flex align-items-center gap-3">
                    <h4 class="mb-0 fw-bold text-primary">MyCompany</h4>
                </div>
            </div>

            <!-- Navigation Menu -->
            <ul class="nav flex-column flex-grow-1">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="staffManagement.php" class="nav-link">
                        <i class="bi bi-people me-2"></i>
                        Staff Management
                    </a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">
                        <i class="bi bi-gear me-2"></i>
                        About Me
                    </a>
                </li>
            </ul>

            <!-- User Profile -->
            <div class="mt-auto border-top pt-3">
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <p class="mb-0 fw-medium">Admin User</p>
                        <small class="text-muted">Administrator</small>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Sidebar Toggle
    document.getElementById('sidebarToggle').addEventListener('click', () => {
        document.querySelector('.sidebar').classList.toggle('active');
    });
    </script>
</body>

</html>