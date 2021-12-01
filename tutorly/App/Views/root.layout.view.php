<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css.css" type="text/css">
    <script src="public/js/js.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hlavná stránka | Tutorly</title>
    <link rel="shortcut icon" type="image/jpg" href="public/pics/logo.png"/>

    <link rel="stylesheet" href="public/css.css" type="text/css">
</head>
<body>
<div class="logo">
    <div class="container-fluid">
        <a href="?c=home"><img class="logo_pic" src="public/pics/logo_w.png" alt="logo"></a>
        <?php if (\App\Auth::isLogged()) { ?>
            <p style="text-align: right; color: white">Prihlásený používateľ: <?php echo \App\Auth::getRealName() ?></p>
        <?php } ?>
    </div>
</div>

<header>
    <h1>Tutorly</h1>
    <p>Doučovanie pre študentov od študentov</p>
</header>

<nav class="navbar navbar-expand-sm justify-content-center">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="?c=home&a=categoryTutor" style="border-right: 1px solid #333333">Doučujem</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?c=home&a=categoryTutoree" style="border-right: 1px solid #333333">Vyhľadávam</a>
        </li>
        <?php if (!\App\Auth::isLogged()) { ?>
            <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Pridaj sa k nám</a>
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="?c=home&a=offerForm" style="border-right: 1px solid #333333">Pridaj nový
                    inzerát</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=auth&a=logout">Odlásenie</a>
            </li>
        <?php } ?>
    </ul>
</nav>

<div class="row">
    <div class="menu">
        <ul>
            <?php if (\App\Auth::isLogged()) { ?>
                <li><a href="?c=home&a=myoffers">Moje ponuky</a></li>
                <li><a href="?c=auth&a=editProfile">Nastavenie účtu</a></li>

            <?php } ?>
            <li><a href="?c=home">Domov</a></li>
            <li><a href="#contact">Kontakt</a></li>
            <li><a href="?c=home&a=about">O nás</a></li>
            <li><a href="?c=home">Podmienky používania</a></li>
            <?php if (\App\Auth::isAdmin()) { ?>
                <li><a href="?c=home&a=archive">Archív</a></li>
            <?php } ?>

        </ul>
    </div>

    <div class="main">
        <?= $contentHTML ?>

    </div>
</div>


<footer>


    <div class="container" style="width: 250px; float:right">

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Vyhľadávanie...">
            <button class="btn btn-success" type="submit" STYLE="background-color: #9488ad ;color: white">Hľadaj
            </button>
        </form>
    </div>

    <p id="contact" style="padding: 35px">
    <h4 style="text-align: center; font-size: 17px"> Kontakt:</h4>
    <p><strong>E-Mail: </strong> karcolova4@stud.uniza.sk</p>
    <p><strong>Tel.č:</strong> +421 922 355 987</p>
</footer>

</body>
</html>

