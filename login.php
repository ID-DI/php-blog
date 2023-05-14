<?php
    session_start();
    include('includes/header.php');
    include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <?php include('message.php')?>
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="loginCode.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" placeholder="example@example.com" class="form-control"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Passowrd" id="password" class="form-control"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="loginBtn" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include('includes/header.php');
?>