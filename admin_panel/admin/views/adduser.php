<?php
    require_once("../../connection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../css/dashboard.css??/890328" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">                  
                <i class="fas fa-solid fa-recycle me-2"></i> Recycle</div>
            <div class="list-group list-group-flush my-3">
                <a href="../index.php?action=dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="../index.php?action=user" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-solid fa-user me-2"></i>Users</a>
                <a href="../index.php?action=product" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i  class="fas fa-gift me-2"></i>Products</a> 
                <a href="../index.php?action=item" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i  class="fas fa-gift me-2"></i>items</a>            
                <a href="../index.php?action=order" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-shopping-cart me-2"></i>Orders</a>
                <a href="../index.php?action=message" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-comment-dots me-2"></i>Messages</a>    
                <a href="../../index.php?action=logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>

                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $_SESSION['fullname'];?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../../index.php?action=homepage">Home</a></li>
                                <li><a class="dropdown-item" href="../../index.php?action=userprofile">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <section class="vh-100 gradient-custom">
                <div class="container py-5 h-40">
                    <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <form method="post" action="../index.php?action=store" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="fullname" class="form-control" name="fullname" id="fullname" placeholder="fullname">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                                <div class="col">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                <input type="city" class="form-control" name="city" placeholder="City">
                                </div>
                                <div class="col">
                                <input type="address" class="form-control" name="address" placeholder="Address">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone NO.">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" id="image" placeholder="Image">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="form-control">
                                <option selected>Choose Role...</option>
                                <option>User</option>
                                <option>Vendor</option>
                                <option>Admin</option>
                                </select>
                            </div>
                            <br>
                            <input type="submit" value="create User" class="form-group btn btn-success">
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>