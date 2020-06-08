<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $this->e($title) ?></title>
</head>

<body>
    <div class="page">
        <header class="header-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-7">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Главная страница</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/posts">Статьи</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">Обо мне</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="nav justify-content-center">
                            <?php if (!isset($_SESSION["auth_username"])) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sign-in">Вход</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sign-up">Регистрация</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <p class="user-greating">
                                        Привет, <a class="user-link" href="/users/id"><?= $_SESSION["auth_username"]; ?><a>
                                    </p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/exit">Выход</a>

                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
            <?= $this->section('content') ?>
        </div>

        <footer>
            <div class="container-fluid">
                <div class="row footer-content">
                    <div class="col-md-3 footer-col">
                        <p class="info">Привет</p>
                    </div>
                    <div class="col-md-6 footer-col">
                        <p class="copyright">2020</p>
                    </div>
                    <div class="col-md-3 footer-col">
                        <p class="email-adress">mastetandron@gmail.com</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>