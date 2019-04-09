<nav class="navbar navbar-expand-lg navbar-light bg-black">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="../home"><img src="../webroot/assets/cinemaLogo.png" alt="logo du site" width="150"></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-danger" href="home">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-danger" href="historique">Historique<span class="sr-only">(current)</span></a>
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
<form method="post" action="deletegenre">
    <h5 class="mt-5">Titre du genre :</h5>
    <div class="form-inline">
    <input type="text" name="nom" placeholder="Delete genre ..." class="form-control col-3">
    <input type="submit" value="Confirm" class="btn btn-danger">
    </div>
</form>