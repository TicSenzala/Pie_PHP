<div class="p-5">
    <div class="container col-4">
    <div class="text-right">
        <a href="modifAccount"><button class="btn btn-danger">Back</button></a>
    </div>
    <h3 class="text-danger mt-3">Pourquoi voulez-vous nous quitté ?</h3>
    <div>
        <input type="checkbox">
        <label class="text-dark">Manque de temps.</label>
    </div>
    <div>
        <input type="checkbox">
        <label class="text-dark">Je me suis fait pirater mon compte.</label>
    </div>
    <div>
        <input type="checkbox">
        <label class="text-dark">Je change de site.</label>
    </div>
    <div>
        <input type="checkbox">
        <label class="text-dark">Je n'ai plus le temps.</label>
    </div>
    <div>
        <input type="checkbox">
        <label class="text-dark">Je ne souhaite pas en parler..</label>
    </div>
    <div>
        <input type="checkbox">
        <label class="text-dark">Autre</label>
        <br>
        <textarea name="autre" cols="40" rows="7"></textarea>
    </div>
    </div>
    <hr class="bg-white">
    <form action="login" method="post" class="container">
    <h4 class="text-danger container col-6">Valider la suppression :</h4>
        <input type="email" name="mail" placeholder="email" class="form-control col-6 container">
        <input type="password" name="password" placeholder="password" class="form-control col-6 mt-2 container">
        <button type="submit" name="validDelete" class="btn btn-danger offset-8 mt-2">Valider</button>
    </form>
</div>