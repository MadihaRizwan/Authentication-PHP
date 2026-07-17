
<?php
session_start();
if(!isset($_SESSION['login'])){
    echo"
    <script>
    alert('Authentication Error: Unknown User')
    window.location.href = './login.php'
    </script>
    ";
}




include './config.php'
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">AUTHENTICATION</a>

            <a href="./logout.php" class="btn btn-danger">
                Logout
            </a>
        </div>
    </nav>

    <!-- Profile Section -->
    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4">

                        <div class="row g-4">

                            <!-- Left Side -->
                            <div class="col-md-4 text-center">

                                <!-- Avatar -->
                                <div class="mx-auto border rounded-circle bg-light d-flex justify-content-center align-items-center"
                                     style="width:150px; height:150px;">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="70"
                                         height="70"
                                         fill="currentColor"
                                         class="text-secondary"
                                         viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3z"/>
                                        <path d="M8 8a3 3 0 100-6 3 3 0 000 6z"/>
                                    </svg>

                                </div>

                                <!-- Name -->
                                <div class="mt-4">
                                    <label class="form-label fw-bold">Name</label>
                                    <div class="form-control text-center">
                                        John Doe
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="mt-3">
                                    <label class="form-label fw-bold">Email</label>
                                    <div class="form-control text-center">
                                        john@example.com
                                    </div>
                                </div>

                            </div>

                            <!-- Right Side -->
                            <div class="col-md-8">

                                <h4 class="mb-4">Update Profile</h4>

                                <form>

                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter password">
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">
                                        Save Changes
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>