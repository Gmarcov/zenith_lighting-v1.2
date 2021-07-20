<?php
require_once "../private/models/Tokens.php";
session_start();
// if (isset($_SESSION['name'])) {
// }
unset($_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf_token" content="<?php echo createToken(); ?>" id="csrf_token" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Signin/Signup</title>
</head>

<body>
    <h1>Sign in</h1>
    <!-- <form id="in">
        <label for="">email</label> <input type="email" name="email" placeholder="email@example.com*" required>
        <label for="">Password</label> <input type="password" name="password" placeholder="********" required>
        <input type="submit" name="signin" value="Submit">
    </form> -->

    <!-- <h1>Sign up</h1> -->
    <!-- <span id="result"></span> -->
    <!-- <form id="up">
        <label for="">Full Name</label> <input type="text" name="fullName" placeholder="Fullname*" required id="name">
        <label for="">Email</label> <input type="email" name="email" placeholder="example@mail.com*" required
            id="email">
        <label for="">pasword</label> <input type="password" name="password" placeholder="********" required
            id="password">
        <label for="">Confirm password</label> <input type="password" name="confirm-password" placeholder="********"
            required id="confirm">
        <input type="submit" name="signup" id="signup" value="Submit">
    </form>
    <form action="../private/controllers/lougout.php" method="POST">
        <input type="submit" value="logout" name="logout">
    </form> -->

    <!-- <script>
    $(document).ready(function() {
        $('#signup').on('click', function(event) {
            event.preventDefault();
            var name = $('#su-name').val();
            var email = $('#su-email').val();
            var password = $('#su-password').val();
            var confirm = $('#su-password-confirm').val();
            var signup = $('#signup').val();
            var csrf = $('#csrf_token').val();
            $.ajax({
                url: '../private/controllers/Signin-up_Validation.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    'fullName': name,
                    'email': email,
                    'password': password,
                    'confirm-password': confirm,
                    'signup': signup
                },
                success: function(response) {
                    var result = eval(response);
                    var err = "";
                    for (var index in result) {
                        // you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
                        err = err + result[index] + "<br>";
                        $('#result').html(err);
                        $('#su-name').val('');
                        $('#su-email').val('');
                        $('#su-password').val('');
                        $('#su-password-confirm').val('');
                        // alert("index:" + index + "\n value" + result[index]);
                    }
                }

            })
        })
    })
    </script> -->

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->


    <!-- <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
        <span id="result"></span>
        <div class="mb-3">
            <label class="form-label" for="su-name">Votre nom</label>
            <input class="form-control" type="text" id="su-name" placeholder="Nom Prénom" required name="fullName">
            <div class="invalid-feedback">Veuillez entrez votre nom.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="su-email">Adresse email</label>
            <input class="form-control" type="email" id="su-email" placeholder="i.e@example.com" required name="email">
            <div class="invalid-feedback">Veuillez entrez votre adresse email.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="su-password">Mot de passe</label>
            <div class="password-toggle">
                <input class="form-control" type="password" id="su-password" required name="password">
                <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-eye password-toggle-indicator" viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="su-password-confirm">Confirmez votre mot de passe</label>
            <div class="password-toggle">
                <input class="form-control" type="password" id="su-password-confirm" required name="confirm-password">
                <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-eye password-toggle-indicator" viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </label>
            </div>
        </div>
        <button class="btn btn-primary btn-shadow d-block w-100" type="submit" name="signup"
            id="signup">S'enregistrer</button>
    </form> -->

</body>

</html>