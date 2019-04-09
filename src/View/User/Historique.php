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
    <i class="text-danger mr-3 mt-2 h2 fas fa-user"></i>
    <form method="POST">
        <button type='submit' name="deconnexion" class="btn btn-danger">Deconnexion</button>
    </form>
</nav>
<h1 class="text-danger">Historique</h1>
<table class="table table-dark">
    <tr>
        <th>Titre</th>
        <th>Resum</th>
        <th>Date de sortie</th>
    </tr>
    <?php foreach($data as $val): ?>
    <tr>
        <td><?= $val['titre'] ?></td>
        <td><?= $val['resum'] ?></td>
        <td><?= $val['date_sortie'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>