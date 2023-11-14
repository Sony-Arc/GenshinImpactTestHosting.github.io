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

    <div class="poster"></div>

    <div class="blackNav bg-dark sticky-top"></div>

    <div class="konten-home bg-dark">
        <div class="container">
            <div class="container-fluid">
                <div class="judul d-flex justify-content-center">
                    Welcome to Genshin Impact Wiki!
                </div>
                <div class="description d-flex justify-content-center mt-3">
                    <b><i>Gesnhin Impact&nbsp;</i></b>is an open-world action RPG developed and published
                    by&nbsp<b>HoYoverse&nbsp</b>for the PC,iOS/Android, and PS4/PS5 platforms.
                </div>
                <div class="description d-flex justify-content-center">
                    The game is free-to-play with a gacha monetizationsystem in the form of Wishes.
                </div>
                <div class="line mt-4"></div>
                <br>
                <div class="frame">
                    <a class="row text-white ms-4 mt-3" style="font-size: 18px;"
                        href="{{ route('allcharacter') }}">Character List</a>
                    <div class="mx-4 mt-1 d-flex justify-content-between">
                        <h6 style="color: white;">5 Stars</h6>
                        <a href="{{ route('character5star') }}" style="color: white; font-size: 12px;">View more</a>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <?php
                        $ctr = 0;
                        foreach ($listCharacters as $char) {
                            if ($char["rarity"] == 5) {
                                $ctr++;
                        ?>
                        <div class='card bg-secondary mx-2' style='width: 12rem;'>
                            <img src="<?= $char['img_url'] ?>" class='card-img-top'>
                            <div class='card-body d-flex align-items-bottom flex-column'>
                                <b class='card-text text-white'><?= $char['name'] ?></b>
                                <hr>
                                <b class='card-text text-white'>Description</b>
                                <p class='card-text text-white'><?= $char['description'] ?></p>
                                <h10 class='card-text text-white mt-auto'>Vision: <?= $char['vision'] ?></h10>
                                <hr>
                                <h10 class='card-text text-white'>Weapon: <?= $char['weapon'] ?></h10>
                            </div>
                        </div>
                        <?php
                            }
                            if ($ctr == 5) {
                                break;
                            }
                        }
                        ?>
                    </div>
                    <div class="mx-4 mt-1 d-flex justify-content-between">
                        <h6 style="color: white;">4 Stars</h6>
                        <a href="{{ route('character4star') }}" style="color: white; font-size: 12px;">View more</a>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <?php
                        $ctr = 0;
                        foreach ($listCharacters as $char) {
                            if ($char["rarity"] == 4) {
                                $ctr++;
                        ?>
                        <div class='card bg-secondary mx-2' style='width: 12rem;'>
                            <img src="<?= $char['img_url'] ?>" class='card-img-top'>
                            <div class='card-body d-flex align-items-bottom flex-column'>
                                <b class='card-text text-white'><?= $char['name'] ?></b>
                                <hr>
                                <b class='card-text text-white'>Description</b>
                                <p class='card-text text-white'><?= $char['description'] ?></p>
                                <h10 class='card-text text-white mt-auto'>Vision: <?= $char['vision'] ?></h10>
                                <hr>
                                <h10 class='card-text text-white'>Weapon: <?= $char['weapon'] ?></h10>
                            </div>
                        </div>
                        <?php
                            }
                            if ($ctr == 5) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer d-flex justify-content-center bg-warning">
        Sony Sanjaya Yunanto - 222117062
    </div>
</body>

</html>
