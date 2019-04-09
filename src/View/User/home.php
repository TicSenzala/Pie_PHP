<nav class="navbar navbar-expand-lg navbar-light bg-black">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"><img src="../webroot/assets/cinemaLogo.png" alt="logo du site" width="150"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-danger" href="home">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="historique">Historique</a>
                </li>
            </ul>
        </div>
            <a href="myaccount"><i class="text-danger mr-3 mt-2 h2 fas fa-user"></i></a>
        <div>
        <form method="POST">
            <button type='submit' name="deconnexion" class="mt-2 btn btn-danger">Deconnexion</button>
        </form>
        </div>
    </nav>
    <h1 class="font-weight-bold">Films</h1>
    <div class="mt-5 text-right col-11 mr-5">
        <a href="genreEdit"><button class="btn btn-danger">Modifier un genre <i class="fas fas fa-edit ml-3"></i></button></a>
        <a href="deletemovie"><button class="btn btn-danger">Supprimer un genre <i class="fas fa-minus-circle ml-3"></i></button></a>
        <a href="addgenre"><button class="btn btn-danger">Ajouter un Genre <i class="fas fa-plus-circle ml-3"></i></button></a>
        <a href="modifmovie"><button class="btn btn-danger">Modifier un film <i class="fas fa-edit ml-3"></i></button></a>
        <a href="deletemovie"><button class="btn btn-danger">Supprimer un film <i class="fas fa-minus-circle ml-3"></i></button></a>
        <a href="add"><button class="btn btn-danger mr-5">Ajouter un film <i class="fas fa-plus-circle ml-3"></i></button></a>
    </div>
<div class="container col-10">
<div class="col-12 container mt-5 row">
    <?php foreach($data as $val): ?>
        <a class="text-dark" href="fiche/<?= $val[0]; ?>"><div class="col-12">
            <img src="<?= $val['image'] ?>" width="350" height="410" alt="photo du film">
            <h5><?= $val['titre'] ?></h5>
        </div></a>
    <?php endforeach; ?>
</div>
</div>