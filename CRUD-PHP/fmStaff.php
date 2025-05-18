<?php include('header.php'); ?>
<?php
include 'database.php';
$successmessage = "";
$errormessage = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $sql = "INSERT INTO staff (first_name, last_name, email, gender, phone, position, salary)
                VALUES ('$first_name', '$last_name', '$email', '$gender', '$phone', '$position', '$salary')";
    if ($conn->query($sql) == TRUE) {
        $successmessage = "Data Insert Successed";
    } else {
        $errormessage = "Data Insert is fail";
    }
}
// ... (keep your existing PHP logic unchanged) ...
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staffs Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .form-card {
        border-radius: 1.5rem;
        border: 1px solid rgba(255, 255, 255, 0.3);
        background: linear-gradient(145deg, #ffffff, #f8f9fa);
        backdrop-filter: blur(10px);
        overflow: hidden;
    }

    .input-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        z-index: 4;
    }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <!-- Notifications -->
        <?php if (!empty($successmessage)): ?>
        <div class="alert alert-success alert-dismissible fade show mx-auto mb-4" style="max-width: 650px;">
            <i class="fas fa-check-circle me-2"></i><?= $successmessage ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <?php if (!empty($errormessage)): ?>
        <div class="alert alert-danger alert-dismissible fade show mx-auto mb-4" style="max-width: 650px;">
            <i class="fas fa-exclamation-circle me-2"></i><?= $errormessage ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <!-- Form Card -->
        <div class="card form-card shadow-lg mx-auto" style="max-width: 650px;">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <h3 class="h2 text-primary mb-2">
                        <i class="fas fa-user-tie me-2"></i>Staff Information
                    </h3>
                    <p class="text-muted">Fill in the details below to add new staff</p>
                </div>

                <form method="POST">
                    <div class="row g-3">
                        <!-- Name Inputs -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="inputFN" name="first_name"
                                    placeholder="First Name" required>
                                <label for="inputFN"><i class="fas fa-user me-2"></i>First Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="inputLN" name="last_name"
                                    placeholder="Last Name" required>
                                <label for="inputLN"><i class="fas fa-user me-2"></i>Last Name</label>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="inputEmailt" name="email"
                                    placeholder="email@example.com" required>
                                <label for="inputEmailt"><i class="fas fa-envelope me-2"></i>Email</label>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="col-12">
                            <label class="form-label"><i class="fas fa-venus-mars me-2"></i>Gender</label>
                            <div class="btn-group w-100 shadow-sm" role="group">
                                <input type="radio" class="btn-check" name="gender" id="male" value="Male" required>
                                <label class="btn btn-outline-primary" for="male">
                                    <i class="fas fa-male me-2"></i>Male
                                </label>

                                <input type="radio" class="btn-check" name="gender" id="female" value="Female">
                                <label class="btn btn-outline-primary" for="female">
                                    <i class="fas fa-female me-2"></i>Female
                                </label>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="inputPN" name="phone"
                                    placeholder="Phone Number">
                                <label for="inputPN"><i class="fas fa-phone me-2"></i>Phone</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="inputPos" name="position"
                                    placeholder="Position">
                                <label for="inputPos"><i class="fas fa-briefcase me-2"></i>Position</label>
                            </div>
                        </div>

                        <!-- Salary -->
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="inputSalary" name="salary"
                                    placeholder="Salary">
                                <label for="inputSalary"><i class="fas fa-dollar-sign me-2"></i>Salary</label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg w-100 py-3 rounded-pill">
                                <i class="fas fa-user-plus me-2"></i>Add Staff Member
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>