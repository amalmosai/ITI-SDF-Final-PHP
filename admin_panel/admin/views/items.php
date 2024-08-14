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
    <link rel="stylesheet" href="../css/dashboard.css?45466" />
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
                <a href="index.php?action=user" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-solid fa-user me-2"></i>Users</a>
                <a href="index.php?action=product" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i  class="fas fa-gift me-2"></i>Products</a> 
                <a href="index.php?action=item" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i  class="fas fa-gift me-2"></i>items</a>            
                <a href="index.php?action=order" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-shopping-cart me-2"></i>Orders</a>
                <a href="index.php?action=message" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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

                <div class="row flex-column my-5 p-4">
                    <h3 class="fs-4 mb-3">#Pending Items</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead class="t_head">
                                <tr>
                                    <th scope="col" width="80">Item_id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="b_text">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Item-status</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Points</th>
                                    <th scope="col"><i class="fas fa-solid fa-check me-2"></i>Approved</th>
                                    <th scope="col"><i class="fas fa-duotone fa-trash me-2"></i>Rejected</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($pending_item as $value){ 
                            ?> 
                                <tr>
                                    <th scope="row"><?=$value['item_id']?></th>
                                    <td><?=$value['name']?></td>
                                    <td class="b_text"><?=$value['description']?></td>
                                    <td><img width='60px' src='../../assets/imgs/items_imgs/<?=$value['image']?>'></td>
                                    <td><?=$value['address']?></td>
                                    <td><?=$value['item_status']?></td>
                                    <td><?=$value['fullname']?></td>
                                    <form method="post" action="./index.php?id=<?=$value['item_id']?>&action=approved&user_id=<?=$value['user_id']?>" enctype="multipart/form-data">
                                    <td><input type="number"class="form-control" name="number" id="number" placeholder="points"></td>
                                    <td><button class="list-group-item list-group-item-action bg-transparent second-text fw-bold" type="submit"><i class="fas fa-solid fa-check me-2"></i></button></td>
                                    </form>
                                    <td><a href="./index.php?id=<?=$value['item_id']?>&action=rejected" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-duotone fa-trash me-2"></i></a></td> 
                                </tr>
                            <?php    
                            }
                            ?>    
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                    <h3 class="fs-4 mb-3">#Approved &Rejected Items</h3>
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead class="t_head">
                                <tr>
                                    <th scope="col" width="80">Item_id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="b_text">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Item-status</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Points</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($other_item as $value){ 
                            ?> 
                                <tr>
                                    <th scope="row"><?=$value['item_id']?></th>
                                    <td><?=$value['name']?></td>
                                    <td class="b_text"><?=$value['description']?></td>
                                    <td><img width='60px' src='../../assets/imgs/items_imgs/<?=$value['image']?>'></td>
                                    <td><?=$value['address']?></td>
                                    <td><?=$value['item_status']?></td>
                                    <td><?=$value['fullname']?></td>
                                    <td><?=$value['points']?></td>
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

</html>