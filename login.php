<?php  include('config.php'); ?>
<?php  include('registration_login.php'); ?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login and Registration  | Accept</title>
    <link rel="stylesheet" href="assets/css/loginstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="services section">

        <div class="wrapper">
            <div class="title-text">
                <div class="title login">
                    <img src="assets/images/logo.png" style="background: -webkit-linear-gradient(left, #21d6ff, #0064b9);padding:10px;border-radius:20px">
                </div>
                <div class="title signup">
                    <img src="assets/images/logo.png" style="background: -webkit-linear-gradient(left, #21d6ff, #0064b9);padding:10px;border-radius:20px">
                </div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Join Us</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">

                    <form method="post" action="login.php" class="login">
                        <div class="field">
                            <input type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <!-- <div class="pass-link">
                            <a href="#">Forgot password?</a>
                        </div> -->
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" name="login_btn" value="Login">
                        </div>
                        <!-- <div class="signup-link">
                            Not a member? <a href="">Signup now</a>
                        </div> -->
                    </form>
                    <form action="#" class="signup">
                        <div class="field">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Email " required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Confirm password" required>
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>
</body>

</html>