<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bar">
                    <div class="dropdown">

                        <?php require_once './User.class.php'; ?>

                        <?php if( User::isLoggedIn() ) { 
                            $loggedInUser = new User();
                            $loggedInUser->loadLoggedInUser();
                        ?>

                        <button class="btn btn-outline-success dropdown-toggle mt-2 mb-2" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $loggedInUser->name; ?>
                            (<?php echo $loggedInUser->email;?>)
                        </button>

                        <div class="dropdown-menu dropdown-menu-right mt-3 drp" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item dropa" href="./logout.php">Log out</a>
                        </div>

                        <?php } else { ?>
                        <a href="./login.php"><button class="btn btn-outline-success mt-2 mb-2">Log in</button></a>
                        <a href="./register.php"><button class="btn btn-outline-success mt-2 mb-2">Register</button></a>
                    </div> <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>