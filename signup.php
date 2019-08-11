<!DOCTYPE html>
<html lang="en">

<head>

    <title>Switch Law</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- ICONS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    
    <link rel="stylesheet" href="assets/css/signup_style.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="assets/img/SwitchLaw.png" width="400" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-right" id="main-navigation">
            <ul class="navbar-nav  ml-auto text-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>


    <container class="">
        <div class="row justify-content-center sign-up">
            <div class="col-md-6 shadow-lg p-3 mb-md-5 bg-white rounded mt-md-2">
                <h1 class="text-center  sign-up-bg p-3 rounded"><span>Sign Up</span> </h1>
                <hr>

                <form id="signupForm" class="was-validated" action="dashboard.php" method="GET">

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please provide valid email address.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" id="pwd" name="pwd" required></input>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please provide password.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" id="cpwd" name="cpwd" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please provide password.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>

                            <input type="text" class="form-control" id="first-name" name="first-name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please provide first name.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>

                            <input type="text" class="form-control" id="last-name" name="last-name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please provide last name.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="company-name">Company Name:</label>
                        <input type="text" class="form-control" id="company-name" name="company-name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please provide company name.</div>
                    </div>


                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" required>I Agree to Terms & Conditions

                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                    <button type="submit" class="form-control btn btn-primary" id="mvc1">Submit</button>

                </form>
            </div>
        </div>
    </container>

    <!-- Modal -->
    <div class="modal fade" id="errModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Incorrect Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Please make sure your passwords match and try again.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------->
    <!-- FOOTER                -->
    <!--------------------------->
    <?php require_once('partials/footer.php'); ?>
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script>
        // Click! for Submit button
        $('#mvc1').click(function(event) {
            //console.log('sumbit.onclick event');
        });

        // Sumbit form function
        $('#signupForm').submit(function() {
            console.log('form.Submit function');

            var err = true;

            var pwd = $('#pwd').val();
            var cpwd = $('#cpwd').val();

            console.log(pwd, cpwd);


            if (pwd != cpwd) {
                console.log("submit: failed validation ");
                $('#errModalCenter').modal('show');
                return false;
            } else {
                console.log("submit: submitting form data ");
                return true;
            };
        });
    </script>

</body></html>
