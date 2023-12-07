<div class='d-flex justify-content-center'>
    <div class='card mb-3' style='width: 18rem;'>
        <img src='<?= $hockeyeur['image'] ?>' class='card-img-top img' alt='#'>
        <div class='card-body'>
            <h5 class='card-title'><?= $hockeyeur['name'] ?></h5>
            <p class='card-text'><?= $hockeyeur['team'] ?></p>
            <p class='card-text'><?= $hockeyeur['position'] ?></p>
            <a href="tousLesHockeyeurs.php?id=<?= $hockeyeur['id'] ?>" class="btn btn-warning">retour</a>
            <a href="deleteHockeyeur.php?id=<?= $hockeyeur['id'] ?>" class="btn btn-danger">supprimer</a>
            <a href="editHockeyeur.php?id=<?= $hockeyeur['id'] ?>" class="btn btn-warning">editer</a>
        </div>
    </div>
</div>
