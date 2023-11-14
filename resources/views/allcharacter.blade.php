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
                        <a class="nav-link active text-warning mx-2" aria-current="page"
                            href="{{ route('allcharacter') }}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning mx-2" href="{{ route('allweapon') }}">Weapons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning mx-2" href="{{ route('artifacts') }}">Artifacts</a>
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
            <div class="filter">
                <div class="kotakFilter">
                    <div class="konten text-white ms-2 mt-2">
                        <b>Filter</b>
                        <br>
                        <a class="nav-link mt-2" href="{{ route('allcharacter') }}">All character</a>
                        <a class="nav-link" href="{{ route('character5star') }}">5 Stars characters</a>
                        <a class="nav-link" href="{{ route('character4star') }}">4 Stars characters</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="character">
                <div class="kotakCharacter rounded" style="height: 4235px;">
                    <div class="konten mt-3 mx-4">
                        <b class="text-white">All Characters</b>
                        <?php
                        foreach ($listCharacters as $char) {
                        ?>
                        <div class="row d-flex justify-content-center mt-2">
                            <div class='card' style='width: 600px; background-color: <?= $visionColor[$char['vision']]
                                ?>;'>
                                <div class='card-body'>
                                    <div class="row">
                                        <div class="col-3" style="border: 1px solid black; margin: -5px -5px;">
                                            <img src="<?= $char['img_url'] ?>" class='card-img-top' height="125">
                                        </div>
                                        <div class="col-9" style="margin: -10px 0px;">
                                            <b class='card-text' style='font-size: 14px;'><?= $char['name'] ?></b>
                                            <div class="separator my-2" style=" border: 1px solid black; width: 420px;">
                                            </div>
                                            <p class='card-text' style="font-size: 10px; margin-bottom: 0px;">
                                                <?= $char['description'] ?></p>
                                            <b class="card-text" style="font-size: 10px;">Details :</b>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class='card-text' style="font-size: 10px; margin-bottom: 0px;">
                                                        Gender: <?= $char['gender'] ?></p>
                                                    <p class='card-text' style="font-size: 10px; margin-bottom: 0px;">
                                                        Birthday: <?= $char['birthday'] ?></p>
                                                    <p class='card-text' style="font-size: 10px; margin-bottom: 0px;">
                                                        Vision: <?= $char['vision'] ?></p>
                                                </div>
                                                <div class="col-6" style="border-left: 1px solid black;">
                                                    <p class='card-text' style="font-size: 10px; margin-bottom: 0px;">
                                                        Weapon: <?= $char['weapon'] ?></p>
                                                    <p class='card-text' style="font-size: 10px; margin-bottom: 0px;">
                                                        Rarity:
                                                        <?php
                                                            for ($i = 0; $i < $char["rarity"]; $i++) {
                                                            ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: yellow;"
                                                            width="10" height="10" fill="currentColor"
                                                            class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <?php
                                                            }
                                                            ?>
                                                    </p>
                                                </div>
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

    <div class="footer d-flex justify-content-center bg-warning" style="margin-top: 4350px;">
        Sony Sanjaya Yunanto - 222117062
    </div>
</body>

</html>
