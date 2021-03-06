<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="/styles/main.css">
    <title>bitrix-support.ru</title>
</head>
<body>
    <?if($_GET['template'] == 'y'):?>
    <div class="template template--bitrix-support">

        <header class="bgcolor--green">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="nav nav--desktop">
                            <ul class="d-flex flex-nowrap justify-content-between">
                                <li><a href="#" class="link-light">Пункт меню 1</a></li>
                                <li><a href="#" class="link-light">Пункт меню 2</a></li>
                                <li><a href="#" class="link-light">Пункт меню 3</a></li>
                                <li><a href="#" class="link-light">Пункт меню 4</a></li>
                                <li><a href="#" class="link-light">Пункт меню 5</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <main>

            <section id="hero" class="f-flex align-items-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1>Привет!</h1>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="bgcolor--dark_blue color--light_grey">
            <div class="container">
                <div class="row">
                    <div class="col">Колонка 1</div>
                    <div class="col">Колонка 2</div>
                    <div class="col">Колонка 3</div>
                    <div class="col">Колонка 4</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"
            defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
            crossorigin="anonymous"
            defer></script>

    <?endif;?>
</body>
</html>