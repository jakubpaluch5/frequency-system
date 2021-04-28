<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="register-style.css">
    <script src="https://kit.fontawesome.com/c22f07ca69.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="shortcut-icon.png" />
    <title>Portal FREQ | Rejestracja</title>
</head>

<body>
    <div id="big-desktop-container">
        <div id="register-container">
            <div id="register-left-side">
                <div id="register-left-side-column">
                    <div id="top-side">
                        <img id="logo" src="logo.png" alt="freq-logo">
                    </div>
                    <div id="mid-side">
                        <ul>
                            <li>Statystyki w jednym miejscu</li>
                            <li>Darmowa aplikacja</li>
                            <li>Szybkie sprawdzenie obecności</li>
                            <li>Prosty w obsłudze</li>
                            <li>I wiele więcej!</li>
                        </ul>
                    </div>
                    <div id="bot-side">
                        <a href="#"><i class="fab facebook fa-facebook-square"></i></a>
                        <a href="#"><i class="fab instagram fa-instagram-square"></i></a>
                        <a href="#"><i class="fab twitter fa-twitter-square"></i></a>
                    </div>
                    <div id="copyright-side">
                        <h4>www.freq.pl</h4>
                    </div>
                </div>
            </div>
            <div id="register-right-side">
                <div id="register-right-side-register-container">
                    <div onclick="window.location='about.html';" class="navigation-tab about-tab">O serwisie</div>
                    <div onclick="window.location='index.html';" class="navigation-tab login-tab">Logowanie</div>
                    <div class="navigation-tab register-tab">Rejestracja</div>
                </div>
                <div id="register-right-side-header">
                    <h1>Załóż konto</h1>
                </div>
                <div id="register-right-side-form">
                    <form id="form" method="post" action="register.php" onsubmit="return validate();">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputSpanIcon"><i
                                        class="fas icons fa-user-circle"></i></span>
                            </div>
                            <input placeholder="Login..." onblur="login_validate()" type="text" name="login"
                                id="login_field" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputSpanIcon"><i class="fas icons fa-at"></i></span>
                            </div>
                            <input placeholder="Adres e-mail..." type="text" onblur="email_validate()" id="email_field"
                                name="email" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputSpanIcon"><i class="fas icons fa-key"></i></span>
                            </div>
                            <input placeholder="Hasło..." type="password" name="password" onblur="password_validate()"
                                id="password_field" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text inputSpanIcon"><i
                                        class="fas icons fa-check-double"></i></span>
                            </div>
                            <input placeholder="Powtórz hasło..." type="password" name="passwordtwo"
                                id="ConfirmPassword_field" onblur="ConfirmPassword_validate()" class="form-control"
                                aria-label="Amount (to the nearest dollar)">
                        </div>
                        <button type="submit" id="button" name="submit" class="btn btn-info">Zarejestruj</button>
                    </form>
                    <?php
                        if( isset( $_POST['submit'] ) )
                        {
                            include 'connect.php';
                            $login = $_POST['login'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $passwordtwo = $_POST['passwordtwo'];
                            $duplicatelogin=mysqli_query($conn,"select * from users where login='$login'");
                            $duplicatemail=mysqli_query($conn,"select * from users where email='$email'");
                            $min = strlen($password);
                            $uppercase = preg_match('@[A-Z]@', $password);
                            $lowercase = preg_match('@[a-z]@', $password);
                            $number    = preg_match('@[0-9]@', $password);
                            $specialChars = preg_match('@[^\w]@', $password);
                            if(empty($login)) 
                            {
                                echo '<p class="text-danger">Login nie może być pusty!</p>';
                            }
                            elseif($password != $passwordtwo)
                            {
                                echo '<p class="text-danger">Hasła muszą się zgadzać!</p>';
                            }
                            elseif(!$uppercase || !$lowercase || !$number || !$specialChars || $min < 8)
                            {
                                echo '<p class="text-danger">Hasło musi spełniać wymogi!</p>';
                            }
                            elseif(mysqli_num_rows($duplicatemail)>0)
                            {
                                echo '<p class="text-danger">Na ten e-mail jest już założone konto!</p>';
                            }
                            elseif(mysqli_num_rows($duplicatelogin)>0)
                            {  
                                echo '<p class="text-danger">Login już istnieje!</p>';
                            } 
                            else
                            {
                            $curr = time();
                            $pepper = 'p3pp37';
                            $strongpassword = $password.$curr.$pepper;
                            $hashedpassword = hash('sha512', $strongpassword);
                            $sql = "INSERT INTO users (login, email, password, time) VALUES ('$login', '$email', '$hashedpassword', '$curr')";
                            if (mysqli_query($conn, $sql))
                            {
                                echo '<script>';
                                echo 'window.location = "index.php";';
                                echo '</script>';
                            }
                            else
                            {
                                echo "Nie udało się zalogować: " . $sql . "<br>" . mysqli_error($conn);
                            }
                            }
                            mysqli_close($conn);
                        }
                    ?>
                    <h6>Masz już konto? <a href="index.html"><span> Kliknij tutaj </span></a> aby się zalogować!</h6>
                </div>
                <div id="register-right-side-footer">
                    <ul>
                        <li>Wymogi hasła</li>
                    </ul>
                    <ul>
                        <li>Zapomniałem hasła</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="big-mobile-container">
        <div id="mobile-register-container">
            <div id="mobile-logo-img">
                <img src="logo.png" alt="mobile-logo">
            </div>
            <div id="mobile-register">
                <h1 class="text-center">Zaloguj się!</h1>
                <form action="index.php" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                        </div>
                        <input placeholder="Adres e-mail..." name="email" type="text" class="form-control"
                            aria-label="Amount (to the nearest dollar)">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input placeholder="Hasło..." type="text" class="form-control"
                            aria-label="Amount (to the nearest dollar)">
                    </div>
                    <button type="submit" name="submit" class="btn btn-info">Zaloguj</button>
                </form>
                <h6>Nie masz konta? To nie problem! <span>Kliknij tutaj</span> aby je szybko i bezpłatnie założyć!
                    <ul>
                        <li>Statystyki w jednym miejscu</li>
                        <li>Darmowa aplikacja</li>
                        <li>Szybkie sprawdzenie obecności</li>
                        <li>Prosty w obsłudze</li>
                        <li>I wiele więcej!</li>
                    </ul>
                    <h4 class="text-center">©JPcollab</h4>
            </div>
        </div>
    </div>
    <script src="./js-register-form-validation/login-validation.js"></script>
    <script src="./js-register-form-validation/email-validation.js"></script>
    <script src="./js-register-form-validation/password-validation.js"></script>
    <script src="./js-register-form-validation/ConfirmPassword-validation.js"></script>
    <script src="./js-register-form-validation/form-validation.js"></script>

</body>

</html>