@php
    require_once 'src/dataGenshin.php';
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('src/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="./src/logo.png" alt="" width="80" height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-warning mx-2" href="{{ route('allcharacter') }}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning mx-2" href="{{ route('allweapon') }}">Weapons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-warning mx-2" aria-current="page"
                            href="{{ route('artifacts') }}">Artifacts</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="poster fixed-top"></div>

    <div class="row">
        <div class="col">
            <div class="artifact">
                <div class="kotakartifact rounded" style="height: 3655px;">
                    <div class="konten mt-3 mx-4">
                        <b class="text-white">All Artifact</b>
                        <?php
                        foreach ($listArtifacts as $artifact) {
                        ?>
                        <div class="row d-flex justify-content-start mt-2">
                            <div class="col-6">
                                <div class='card' style='width: 575px; height: 125px; background-color: white;'>
                                    <div class='card-body'>
                                        <div class="row ps-1">
                                            <div class="col-2" style="">
                                                <img src="<?= $artifact['img_url'] ?>" class='card-img-top'
                                                    style="width: 90px; border: 1px solid black; padding: 0px;"
                                                    height="90">
                                            </div>
                                            <div class="col-10 ps-4">
                                                <b class='card-text'
                                                    style='font-size: 14px;'><?= $artifact['name'] ?></b>
                                                <div class="separator my-2"
                                                    style=" border: 1px solid black; width: 185px;">
                                                </div>
                                                <p class='card-text' style="font-size: 10px; margin-bottom: 0px;">
                                                    <b>2 Set bonus:</b> <?= $artifact['2_set_bonus'] ?>
                                                </p>
                                                <p class='card-text' style="font-size: 10px; margin-bottom: 0px;">
                                                    <b>4 Set bonus:</b> <?= $artifact['4_set_bonus'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer d-flex justify-content-center bg-warning" style="margin-top: 3765px;">
        Sony Sanjaya Yunanto - 222117062
    </div>
</body>

</html>
