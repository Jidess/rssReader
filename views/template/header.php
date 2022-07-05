<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouRss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="../public/assets/css/styleDark.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-danger navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../index.php"><img id="logo" src="../../public/assets/img/youRss.svg"> YouRss</a>
                <button class="navbar-toggler focused" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../controllers/flux-rss.html?<?='theme='.$sujet1?>">
                                <?=$sujet1 ?? ''?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../controllers/flux-rss.html?<?='theme='.$sujet2?>">
                            <?=$sujet2 ?? ''?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../controllers/flux-rss.html?<?='theme='.$sujet3?>">
                            <?=$sujet3 ?? ''?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../controllers/parameters.html">
                                Préférences</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>