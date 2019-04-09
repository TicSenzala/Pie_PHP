<div class="page--account">
    <nav class="navbar navbar-expand-lg navbar-light">
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
        <form method="post">
            <input type="submit" name="deconnexion" class="btn btn-danger" value="Deconnexion">
        </form>
    </nav>
    <div class="text-danger h3 ml-2 col-3 ml-5 p-5">
        <a href="modifAccount"><i class="fas fa-cogs float-right text-danger"></i></a>
        <p class="mt-4">Prénom : <?= $_SESSION['prenom']; ?></p>
        <p>Nom : <?= $_SESSION['nom']; ?></p>
        <p>Email : <?= $_SESSION['email'] ?></p>
</div>
</div>