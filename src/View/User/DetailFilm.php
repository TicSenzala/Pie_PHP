<nav class="navbar navbar-expand-lg navbar-light bg-black">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="../home"><img src="../../webroot/assets/cinemaLogo.png" alt="logo du site" width="150"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-danger" href="../home">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-danger" href="../historique">historique <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <i class="text-danger mr-3 mt-2 h2 fas fa-user"></i>
        <div>
            <form action="../login" method="POST">
                <button name="deconnexion" class="btn btn-danger">Deconnexion</button>
            </form>
        </div>
    </nav>
<?php foreach($data as $val): ?>
    <div class="float-left">
        <img src="<?= $val['image'] ?>" class="mt-5 ml-5" width="350" height="350" alt="photo du film">
    </div>
    <div>
        <h1 class=" mt-5 container col-6"><?= $val['titre'] ?></h1>
    </div>
    <div class="col-11 ml-5 text-right">
        <form action="#" method="post">
            <button type="submit" class="btn btn-danger" name="addHistorique"><i class="fas fa-plus-square h1 mt-2" title="Ajoutez à l'historique"></i></button>
            <button type="submit" class="btn btn-danger" name="minusHistorique"><i class="fas fa-minus-square h1 mt-2" title="Retirer de l'historique"></i></button>
        </form>
    </div>
    <p class=" container col-6">Date de sortie : <?= $val['Date_sortie'] ?></p>
    <hr>
    <div class="container col-6">
        <h3 class="text-muted h-6">Résumé</h3>
    </div>
    <p class="container mt-4 col-6 h4 text-justify"><?= $val['resum'] ?></p>
    <hr class="mt-5">
    <p class="ml-5">Genre : <?= $val[8] ?></p>
    <div class="container col-6">
        <h2 class="mt-5">Bande-annonce VF</h2>
        <iframe width="1300" height="600" src="<?= $val['bande_annonce'] ?>" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
<?php endforeach; ?>
</div>
