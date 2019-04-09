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
<div class=" p-5">
<form action="#" method="post" class="container col-4 mt-5 p-3">
  <h2 class="text-danger">Changer Password : </h2>
  <hr class="bg-white">
  <h5 class="text-white">Ancien Mot de passe :</h5>
  <input type="text" class="form-control" placeholder="Last pass...">
  <h5 class="text-white mt-2">Nouveau Mot de passe :</h5>
  <input type="text" class="form-control" name="newpass" placeholder="New pass...">

  <h5 class="mt-5 text-white">Confirmation /Mail </h5>
  <input type="text" class="form-control mt-2" name="mail" placeholder="Votre email">
  <button type="sybmit" name="confirmdate" class="btn btn-danger mt-2">Confirmer</button>
</form>