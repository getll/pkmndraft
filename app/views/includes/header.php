<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <title><?php echo SITENAME; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="/pkmndraft/Home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/pkmndraft/Drafts">Drafts</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/pkmndraft/Replays">Replays</a>
                    </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if (isLoggedIn()) {
                            echo '<li class="nav-item"><a class="nav-link" href="/pkmndraft/Login/logout">Logout  '. $_SESSION['user_username'].'</a></li>';
                        } 
                        else {
                            echo '<li class="nav-item"><a class="nav-link" href="/pkmndraft/Login/">Login</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">