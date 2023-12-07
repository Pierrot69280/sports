<form action="" method="post" class="form-control">

    <input value="<?= $hockeyeur['name'] ?>" placeholder="modele" type="text" name="nom" class="form-control mb-3">
    <input value="<?= $hockeyeur['team'] ?>" placeholder="marque" type="text" name="team"  class="form-control mb-3">
    <input value="<?= $hockeyeur['position'] ?>" placeholder="annee" type="text" name="position" class="form-control mb-3">
    <button name="id" value="<?= $hockeyeur['id'] ?>" class="btn btn-primary" type="submit" >Modifier</button>

</form>
