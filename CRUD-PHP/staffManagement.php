<?php include('header.php'); ?>
<?php include 'database.php'; ?>

<div class="container py-4">
    <!-- Enhanced header with icon and border -->
    <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
        <h2 class="h1 text-primary fw-bold mb-0">
            <i class="fas fa-users-cog me-2"></i>Staff Directory
        </h2>
        <a href="fmStaff.php" class="btn btn-primary">
            <i class="fas fa-plus-circle me-2"></i>Add New Staff
        </a>
    </div>

    <!-- ✅ Include edit form if edit_id is present -->
    <?php if (isset($_GET['edit_id'])): ?>
    <?php include '../src/edit.php'; ?>
    <?php endif; ?>
    <!-- Modern table styling with hover effects -->
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <!-- Updated header style -->
                    <thead class="bg-light-2">
                        <tr>
                            <th class="ps-4">#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Salary</th>
                            <th class="pe-4 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM staff";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0):
                            while ($row = $result->fetch_assoc()):
                        ?>
                        <tr class="position-relative">
                            <td class="ps-4 fw-medium"><?= $row['id'] ?></td>
                            <td><?= $row['first_name'] ?></td>
                            <td><?= $row['last_name'] ?></td>
                            <td>
                                <span class="badge bg-secondary bg-opacity-10 text-secondary">
                                    <?= ucfirst($row['gender']) ?>
                                </span>
                            </td>
                            <td>
                                <a href="mailto:<?= $row['email'] ?>" class="text-decoration-none">
                                    <?= $row['email'] ?>
                                </a>
                            </td>
                            <td><?= $row['phone'] ?></td>
                            <td><?= $row['position'] ?></td>
                            <td class="text-success fw-medium">
                                $<?= number_format($row['salary'], 2) ?>
                            </td>
                            <td class="pe-4 text-end">
                                <!-- Modern button group with icons -->
                                <div class="d-flex gap-2 justify-content-end">
                                    <a href="?edit_id=<?= $row['id']; ?>"
                                        class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                        <i class="fas fa-pencil-alt me-2"></i>Edit
                                    </a>
                                    <a href="delete.php?id=<?= $row['id'] ?>"
                                        class="btn btn-sm btn-outline-danger rounded-pill px-3"
                                        onclick="return confirm('Are you sure you want to delete this staff member?');">
                                        <i class="fas fa-trash-alt me-2"></i>Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php
                            endwhile;
                        else:
                            ?>
                        <tr>
                            <td colspan="9" class="text-center text-muted py-4">
                                <i class="fas fa-user-slash fa-2x mb-3"></i><br>
                                No staff members found
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('../includes/footer.php'); ?>