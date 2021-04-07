<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c22f07ca69.js" crossorigin="anonymous"></script>
    <title>Portal FREQ</title>
</head>
<body>
    <div id="big-desktop-container">
        <div id="login-container">
            <div id="login-left-side">
                <div id="login-left-side-column">
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
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-instagram-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                    </div>
                    <div id="copyright-side">
                        <h4>©JPcollab</h4>
                    </div>
                </div>
            </div>
            <div id="login-right-side">
                <div id="login-right-side-header">
                    <h1>Witaj w portalu FREQ!</h1>
                </div>
                <div id="login-right-side-form">
                    <h1>Zaloguj się!</h1>
                    <form action="index.php" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                            </div>
                            <input placeholder="Adres e-mail..." type="text" name="email" class="form-control"
                                aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input placeholder="Hasło..." type="text" name="password" class="form-control"
                                aria-label="Amount (to the nearest dollar)">
                        </div>
                        <button type="submit" name="submit" class="btn btn-info">Zaloguj</button>
                    </form>
                    <div id="fail"></div>
                   
                    <h6>Nie masz konta? To nie problem! <span>Kliknij tutaj</span> aby je szybko i bezpłatnie założyć!
                    </h6>
                </div>
                <div id="login-right-side-footer">
                    <ul>
                        <li>Regulamin</li>
                    </ul>
                    <ul>
                        <li>Zapomniałem hasła</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="big-mobile-container">
        <div id="mobile-login-container">
            <div id="mobile-logo-img">
                <img src="logo.png" alt="mobile-logo">
            </div>
            <div id="mobile-login">
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
</body>

</html>