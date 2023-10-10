<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>HOME</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
</head>
<body>
<?php if (isset($_session['id'])) { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav  ml-auto mt-2 mt-lg-0  ">
                <li class="nav-item "><a class="nav-link" href="#">Add Product </a></li>
                <li class="nav-item "><a class="nav-link" href="#">Manage Product</a></li>
                <li class="nav-item "><a class="nav-link" href="#">Add User</a></li>
                <li class="nav-item "><a class="nav-link" href="#">Manage User </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        <?php echo isset($_SESSION['name'])? $_SESSION['name'] : ''; ?>   
                    </a>
                    
                    
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a  href="action.php?status=logout" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
            <form class=" px-3 form-inline  mr-1 my-2 my-lg-0 py-2">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php } ?>