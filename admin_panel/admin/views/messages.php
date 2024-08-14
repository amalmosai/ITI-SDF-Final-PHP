<?php
    require_once("../connection.php");
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
    <link rel="stylesheet" href="../css/dashboard.css?878" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">                  
                <i class="fas fa-solid fa-recycle me-2"></i> Recycle</div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php?action=dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="index.php?action=user" class="list-group-item list-group-item-action bg-transparent second-text  fw-bold">
                    <i class="fas fa-solid fa-user me-2"></i>Users</a>
                <a href="index.php?action=product" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i  class="fas fa-gift me-2"></i>Products</a> 
                <a href="index.php?action=item" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i  class="fas fa-gift me-2"></i>items</a>            
                <a href="index.php?action=order" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-shopping-cart me-2"></i>Orders</a>
                <a href="index.php?action=message" class="list-group-item list-group-item-action bg-transparent second-text  active">
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

                <div class="row my-5 p-4">
                    <h3 class="fs-4 mb-3">Messages</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead class="t_head">
                                <tr>
                                    <th scope="col" width="50">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" class="b_text">Message</th>
                                    <th scope="col"><i class="fas fa-duotone fa-trash me-2"></i>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($message as $value){ 
                            ?> 
                                <tr>
                                    <th scope="row"><?=$value['id']?></th>
                                    <td><?=$value['name']?></td>
                                    <td><?=$value['email']?></td>
                                    <td class="b_text"><?=$value['message']?></td>
                                    <td><a href="index.php?id=<?=$value['id']?>&action=message_del" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-duotone fa-trash me-2"></i></a></td> 
                                </tr>
                            <?php    
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

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