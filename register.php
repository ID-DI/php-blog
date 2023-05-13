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
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="registerCode.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="firstName">Name</label>
                                <input id="firstName" name="firstName" type="text" placeholder="First name" class="form-control"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="lastName">Last name</label>
                                <input id="lastName" name="lastName" type="text" placeholder="Last name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" placeholder="example@example.com" class="form-control"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Confirm password</label>
                                <input type="password" name="confirmPassword" placeholder="Confirm passowrd" id="confirmPassword" class="form-control"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="registerBtn" class="btn btn-primary">Register now</button>
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