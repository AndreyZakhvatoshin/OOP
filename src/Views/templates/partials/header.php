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