<!-- Sign in / sign up modal-->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab"
                            role="tab" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="me-2 mt-n1 bi bi-unlock" viewBox="0 0 16 16">
                                <path
                                    d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z" />
                            </svg>
                            S'identifier</a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab"
                            role="tab" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="me-2 mt-n1 bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            Créer un compte</a>
                    </li>
                </ul>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body tab-content py-4">
                <form class="needs-validation tab-pane fade show active" method="POST" autocomplete="off" novalidate
                    id="signin-tab">
                    <span id="result-in"></span>
                    <div class="mb-3">
                        <label class="form-label" for="si-email">Address email</label>
                        <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com"
                            name="email" required>
                        <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="si-password">Mot de passe</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" id="si-password" required name="password">
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
                    <div class="mb-3 d-flex flex-wrap justify-content-between">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="si-remember">
                            <label class="form-check-label" for="si-remember">Se
                                souvenir</label>

                        </div><a class="fs-sm" href="#">Mot de passe oublié?</a>
                    </div>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit" id="signin" name="signin">Se
                        connecter</button>
                </form>
                <!-- JQuery AJAX signin  -->
                <script>
                $(document).ready(function() {
                    $('#signin').on('click', function(event) {
                        event.preventDefault();
                        var email = $('#si-email').val();
                        var password = $('#si-password').val();
                        var signin = $('#signin').val();
                        var csrf = $('#csrf_token').val();
                        var souv = $('#si-remember:checkbox:checked').length;
                        // console.log(souv);
                        $.ajax({
                            url: '../private/controllers/Signin-up_Validation.php',
                            method: 'POST',
                            dataType: 'json',
                            data: {
                                'email': email,
                                'password': password,
                                'signin': signin,
                                'stocker': souv
                            },
                            success: function(response) {
                                var result = eval(response);
                                if (result.length > 0) {
                                    var err = "";
                                    for (var index in result) {
                                        // you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
                                        err = err + result[index] + "<br>";
                                        $('#result-in').html(err);
                                        $('#si-name').val('');
                                        $('#si-email').val('');
                                        $('#si-password').val('');
                                    }
                                } else {
                                    location.reload();
                                }
                            }

                        })
                    })
                })
                </script>
                <!-- Form Sign up -->
                <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                    <span id="result"></span>
                    <div class="mb-3">
                        <label class="form-label" for="su-name">Votre nom</label>
                        <input class="form-control" type="text" id="su-name" placeholder="Nom Prénom" required
                            name="fullName">
                        <div class="invalid-feedback">Veuillez entrez votre nom.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="su-email">Adresse email</label>
                        <input class="form-control" type="email" id="su-email" placeholder="i.e@example.com" required
                            name="email">
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
                            <input class="form-control" type="password" id="su-password-confirm" required
                                name="confirm-password">
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
                </form>
                <!--JQuery AJAX scrip  -->
                <script>
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
                </script>
            </div>
        </div>
    </div>
</div>
<main class="page-wrapper">