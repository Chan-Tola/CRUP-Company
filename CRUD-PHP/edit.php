<?php
ob_start(); // Start output buffering

include 'database.php';

$editId = $_GET['edit_id'] ?? null;

if (!$editId) {
    die("No Staff Id provided.");
}

$editId = (int)$editId;
$result = $conn->query("SELECT * FROM staff WHERE id = $editId");

if ($result->num_rows === 0) {
    die("Staff not found.");
}

$staff = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $firstName = $_POST['first_name'];
    $lastName  = $_POST['last_name'];
    $email     = $_POST['email'];

    $conn->query("UPDATE staff SET 
        first_name = '$firstName', 
        last_name = '$lastName', 
        email = '$email' 
        WHERE id = $editId");
    echo "<script>window.location.href='staffManagement.php?updated=1';</script>";
    exit();
}

// After all PHP logic, end buffering to output everything safely
ob_end_flush();
?>

<?php if (isset($_GET['updated']) && $_GET['updated'] == 1): ?>
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 2000;">
    <div class="toast align-items-center text-bg-success border-0 show" role="alert">
        <div class="d-flex">
            <div class="toast-body">
                ✅ Staff updated successfully!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

<script>
const toastEl = document.querySelector('.toast');
const toast = new bootstrap.Toast(toastEl);
toast.show();
</script>
<?php endif; ?>

<!-- Edit Card Overlay -->
<div class="modal-overlay"
    style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 1000; display: flex; justify-content: center; align-items: center;">
    <div class="card edit-card shadow-lg" style="width: 500px; max-width: 95%; border-radius: 15px; border: none;">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3"
            style="border-radius: 15px 15px 0 0;">
            <h5 class="mb-0">
                <i class="fas fa-user-edit me-2"></i>
                Edit <?= htmlspecialchars($staff['first_name']) ?>
            </h5>
            <a href="staff.php" class="btn btn-link text-white p-0">
                <i class="fas fa-times"></i>
            </a>
        </div>

        <div class="card-body p-4">
            <form method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="id" value="<?= htmlspecialchars($staff['id']) ?>">

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="first_name" id="firstName" class="form-control border-2"
                                value="<?= htmlspecialchars($staff['first_name']) ?>" required>
                            <label for="firstName" class="text-muted">
                                <i class="fas fa-signature me-2"></i>First Name
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="last_name" id="lastName" class="form-control border-2"
                                value="<?= htmlspecialchars($staff['last_name']) ?>" required>
                            <label for="lastName" class="text-muted">
                                <i class="fas fa-signature me-2"></i>Last Name
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" id="email" class="form-control border-2"
                                value="<?= htmlspecialchars($staff['email']) ?>" required>
                            <label for="email" class="text-muted">
                                <i class="fas fa-at me-2"></i>Email Address
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="staffManagement.php" class="btn btn-secondary px-4">
                        <i class="fas fa-times me-2"></i>Cancel
                    </a>
                    <button type="submit" name="update" class="btn btn-primary px-4">
                        <i class="fas fa-save me-2"></i>Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.modal-overlay {
    backdrop-filter: blur(3px);
}

.edit-card {
    animation: slideIn 0.3s ease-out;
}

@keyframes slideIn {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }

    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.form-control.border-2 {
    border-width: 2px !important;
    border-color: #e9ecef !important;
}

.form-control:focus {
    border-color: #86b7fe !important;
    box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.25);
}
</style>

<!-- Bootstrap JS (Make sure this is included in your layout) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>