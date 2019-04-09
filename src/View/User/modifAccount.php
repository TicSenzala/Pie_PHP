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
                <li class="nav-item active">
                    <a class="nav-link text-danger" href="historique">Historique <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <a href="myaccount"><i class="text-danger mr-3 mt-2 h2 fas fa-user"></i></a>
        <div>
        <form action="login" method="POST">
            <button name="deconnexion" class="btn btn-danger">Deconnexion</button>
        </form>
        </div>
    </nav>
<div class="page--modif p-5">
<div class="text-center">
    <h1>Modifer mon compte</h1>
</div>
    <div class="container text-white mt-5 p-5">
        <a href="modifMail" class="text-danger"><p class="float-left">email</p>
        <i class="fas fa-edit ml-3"></i></a>
        <hr class="bg-white">
        <a href="modifPass" class="text-danger"><p class="float-left">Mot de passe</p>
        <i class="fas fa-edit ml-3"></i></a>
        <hr class="bg-white">
        <a href="delete" class="text-danger"><p class="float-left">Supprimer le compte</p>
        <i class="fas fa-edit ml-3"></i></a>
    </div>
</div>