<?php include('header.php'); ?>
<?php include 'database.php'; ?>
<!-- this is count total from database -->
<?php
$sql = "SELECT * FROM staff";
$result = $conn->query($sql);
$totalresult = $result->num_rows;
// Close connection (optional, but good practice)
$conn->close();
?>

<!-- Main Content -->
<div class="dashboard-main">
    <!-- Top Navigation Bar -->
    <nav class="topbar d-flex align-items-center bg-white shadow-sm py-3 px-4">
        <button class="btn btn-link text-dark" id="sidebarToggle">
            <i class="bi bi-list h4"></i>
        </button>

        <div class="ms-auto d-flex align-items-center gap-4">
            <div class="dropdown">
                <button class="btn btn-link text-dark position-relative" data-bs-toggle="dropdown">
                    <i class="bi bi-bell fs-5"></i>
                    <span
                        class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="min-width: 300px;">
                    <div class="p-3">
                        <h6 class="dropdown-header fw-bold text-primary">Notifications</h6>
                        <div class="dropdown-item d-flex align-items-start py-2">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div>
                                <p class="mb-0 small">New staff member added</p>
                                <small class="text-muted">2 hours ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn btn-link text-dark d-flex align-items-center gap-2" data-bs-toggle="dropdown">
                    <div class="avatar-sm bg-primary text-white rounded-circle d-flex 
                            align-items-center justify-content-center">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="d-none d-md-block">
                        <span class="small mb-0">Admin User</span>
                        <small class="text-muted d-block">Administrator</small>
                    </div>
                </button>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow">
                    <a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a>
                    <a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="p-4">
        <!-- Stats Overview -->
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card stat-card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-lg bg-primary text-white rounded-circle 
                                    d-flex align-items-center justify-content-center">
                                <i class="bi bi-people fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0"><?= $totalresult ?></h3>
                                <span class="text-muted small">Total Staff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more stat cards here -->
        </div>

        <!-- Content Sections -->
        <div class="row g-4">
            <!-- Recent Activity -->
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 py-3">
                        <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item border-0 d-flex align-items-center py-3">
                                <div class="avatar-sm bg-success text-white rounded-circle 
                                        d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small">John Doe updated profile information</p>
                                    <small class="text-muted">45 minutes ago</small>
                                </div>
                            </div>
                            <!-- Add more activity items -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 py-3">
                        <h5 class="mb-0"><i class="bi bi-lightning-charge me-2"></i>Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="../src/fmStaff.php" class="btn btn-outline-primary text-start d-flex 
                                    align-items-center gap-2">
                                <i class="bi bi-person-plus fs-5"></i>
                                Add New Staff
                            </a>
                            <button class="btn btn-outline-success text-start d-flex 
                                    align-items-center gap-2">
                                <i class="bi bi-file-eargon-spreadsheet fs-5"></i>
                                Generate Report
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add this CSS -->
<style>
.dashboard-main {
    margin-left: 280px;
    background-color: #f8fafc;
    min-height: 100vh;
}

.stat-card {
    transition: transform 0.2s, box-shadow 0.2s;
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.avatar-sm {
    width: 40px;
    height: 40px;
}

.icon-lg {
    width: 55px;
    height: 55px;
}

@media (max-width: 768px) {
    .dashboard-main {
        margin-left: 0;
    }
}
</style>