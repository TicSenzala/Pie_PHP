<?php
namespace Core;
class ORM
{
    private $create;
    private $read;
    private $update;
    private $delete;
    private $find;
    private $bdd;

    function __construct()
    {
        $this->bdd = (new \Core\Database())->bdd();
    }

    public function create ($table, $fields) {
        $this->create = "INSERT INTO $table (prenom, nom, email, password, Des) VALUES (:prenom, :nom, :email, :pass, 0)";
        $request = $this->bdd->prepare($this->create);
        $request->bindValue(":prenom", $fields[0]);
        $request->bindValue(":nom", $fields[1]);
        $request->bindValue(":email", $fields[2]);
        $request->bindValue(":pass", $fields[3]);
        $request->execute();
    }

    public function createConnexion($field){
        $requet = $this->bdd->prepare("SELECT * FROM users WHERE email = :email");
        $requet->bindValue(':email', $field);
        $requet->execute();
        $data = $requet->fetchAll();
        return $data;
    }

    public function read($table, $id) {
        $this->read = "SELECT * FROM $table WHERE id_film= $id";
        $request = $this->bdd->prepare($this->read);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    public function readmovie($id)
    {
        $request = $this->bdd->prepare('SELECT * FROM film LEFT JOIN genre ON film.id_genre = genre.id_genre LEFT JOIN users ON genre.id_genre = users.id where id_film = :id');
        $request->bindValue(':id', $id);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    public function readAll($table){
        $request = $this->bdd->prepare("SELECT * FROM $table");
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    public function update ($table, $id, $fields)
    {
        $this->update = "UPDATE $table SET $fields[0] = '$fields[1]' WHERE id = $id";
        $request = $this->bdd->prepare($this->update);
        $request->execute();
    }

    public function delete ($table, $id) {
        $this->delete = "DELETE FROM $table WHERE id = $id";
        $request = $this->bdd->prepare($this->delete);
        $request->execute();
    }

    public function deleteMovie($field){
        $request = $this->bdd->prepare('DELETE FROM film WHERE titre = :title');
        $request->bindValue(':title', $field);
        $request->execute();
    }

    public function find ($table,  $params, $use, $value)
    {
        $this->find = "SELECT * FROM $table WHERE $params[0] = 1 ORDER BY $params[1] $use[0] LIMIT $value";
        $request = $this->bdd->prepare($this->find);
        $request->execute();
        $data = $request->fetchAll();
    }

    public function updatemail($field)
    {
        $requet = $this->bdd->prepare("UPDATE users SET email = :emailnew where email = :email");
        $requet->bindValue(':email', $field[0]);
        $requet->bindValue(':emailnew', $field[1]);
        $requet->execute();
    }

    public function updatepass($field)
    {
        $requet = $this->bdd->prepare("UPDATE users SET password = :pass where email = :email");
        $requet->bindValue(':pass', $field[0]);
        $requet->bindValue(':email', $field[1]);
        $requet->execute();
    }

    public function desactivateAccount($field)
    {
        $requet = $this->bdd->prepare("UPDATE users SET Des = 1 where email = :email");
        $requet->bindValue(':email', $field);
        $requet->execute();
    }

    public function addMovie($field){
        $request = $this->bdd->prepare('INSERT INTO film (titre, resum, Date_sortie, image, bande_annonce) VALUES (:title, :resum, :datemovie, :imagemovie, :annonce)');
        $request->bindValue(':title', $field[0]);
        $request->bindValue(':resum', $field[1]);
        $request->bindValue(':datemovie', $field[3]);
        $request->bindValue(':imagemovie', $field[4]);
        $request->bindValue(':annonce', $field[5]);
        $request->execute();
    }

    public function modifmovie($field)
    {
        $request = $this->bdd->prepare('UPDATE film SET titre = :title, resum = :resum, Date_sortie = :datemovie where titre = :lastmovie');
        $request->bindValue(':title', $field[0]);
        $request->bindValue(':resum', $field[1]);
        $request->bindValue(':datemovie', $field[2]);
        $request->bindValue(':lastmovie', $field[3]);
        $request->execute();
    }

    public function Genremodif($field)
    {
        $request = $this->bdd->prepare('UPDATE genre INNER JOIN film on genre.id_genre = film.id_genre SET film.id_genre = :idgenre WHERE film.titre = :title');
        $request->bindValue(':idgenre', $field[0]);
        $request->bindValue(':title', $field[1]);
        $request->execute();
    }

    public function AddGenre($field)
    {
        $request = $this->bdd->prepare('INSERT INTO genre (nom) VALUES (:nom)');
        $request->bindValue(':nom', $field);
        $request->execute();
    }

    public function deleteGenre($field)
    {
        $request = $this->bdd->prepare('DELETE FROM genre WHERE nom = :nom');
        $request->bindValue(':nom', $field);
        $request->execute();
    }

    public function addhisto($field)
    {
        $request = $this->bdd->prepare("INSERT INTO historique (titre, resum, date_sortie) VALUES (:titre, :resum, :date_sortie)");
        $request->bindValue(':titre', $field[0]);
        $request->bindValue(':resum', $field[1]);
        $request->bindValue(':date_sortie', $field[2]);
        $request->execute();
    }

    public function deleteHisto($field){
        $request = $this->bdd->prepare("DELETE FROM historique WHERE titre = :titre");
        $request->bindValue(":titre", $field);
        $request->execute();
    }
}
