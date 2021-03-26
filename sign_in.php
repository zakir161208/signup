<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="styles.css">
    
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
	<title>signup</title>
</head>
<body>
	 <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="img-login.jpg" alt="">
                </div>

                <div class="login__forms">
                    <form action="../api/post/api_sign_in.php" class="login__registre" id="login-in" method="post">
                        <h1 class="login__title">Sign In</h1>
    
                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="text" placeholder="Email"name="email" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" name="pass" class="login__input">
                        </div>

                        <a href="forget.php" class="login__forgot">Forgot password?</a>

                        <input type="submit"  class="login__button">

                        <div>
                            <span class="login__account">Don't have an Account ?</span>
                            <span class="login__signin" id="sign-up">Sign Up</span>
                        </div>
                    </form>

                    <form action="../api/post/api_sign_up.php" class="login__create none" id="login-up" method="post">
                        <h1 class="login__title">Create Account</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" name="name" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="text" placeholder="Email" name="email" class="login__input">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" name="pass" class="login__input">
                        </div>

                        
                        <input type="submit"  class="login__button">

                        <div>
                            <span class="login__account">Already have an Account ?</span>
                            <span class="login__signup" id="sign-in">Sign In</span>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>

        <!--===== MAIN JS =====-->
        <script src="main.js"></script>

</body>
</html>


