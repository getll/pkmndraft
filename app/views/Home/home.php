<?php require APPROOT . '/views/includes/header.php'; 
?>
    <h1>Home</h1>
    <p>info</p>

    <?php
        if($data != []){
            echo '<div class="alert alert-success" role="alert">'.
             $data['msg'].'
          </div>';
        }
    ?>

    <h1>Current Draft</h1>
    <p>info</p>
    
    <h1>Random Replay</h1>
    <p>info</p>

<?php require APPROOT . '/views/includes/footer.php'; ?>