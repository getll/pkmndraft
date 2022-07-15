<?php require APPROOT . '/views/includes/header.php';  ?>

<form method="post" action="">
    <div class="mb-3" >
        <label for="teamName" class="form-label">Team</label>
        <select id="teamName" class="form-select">
            <option>team 1</option>
            <option>team 2</option>
            <option>team 3</option>
            <option>team 4</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Login</button>

    <?php
        if($data != []){
            echo 
                '<div class="alert alert-danger" role="alert">'.
                    $data['msg'].
                '</div>';
        }
    ?>
</form>

<?php require APPROOT . '/views/includes/footer.php'; ?>