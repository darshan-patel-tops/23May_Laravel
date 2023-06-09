<?php 

require_once('header.php');

?>


<div class="container mt-4">

    <form method="post">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" name="name" placeholder="Enter Your Username"class="form-control" id="inputEmail3">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" placeholder="Enter Your Password" class="form-control" id="inputPassword3">
    </div>
</div>
<button type="submit" name="save" class="btn btn-primary">Sign in</button>
</form>
</div>