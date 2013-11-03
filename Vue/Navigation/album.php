<?php $titre = $album['nom'] ?>

<?php ob_start() ?>
<aside class="col-md-3 col-sm-4 hidden-xs">
    <?php require 'Vue/Partielles/menuGenres.php'; ?>
</aside>

<!-- Partie principale de la page d'accueil -->
<div class="col-md-9 col-sm-8 col-xs-12">
    <?php if (isset($idAlbum)): ?>
        <h3><?= $album['nom'] ?></h3>
        <img src="Contenu/Images/placeholder_big.jpg" alt="" />
        <h4>Artiste : <?= $album['nomArtiste'] ?></h4>
        <h4>Genre : <?= $nomGenre ?></h4>
        <a class="btn btn-primary"><i class="icon-shopping-cart icon-white"></i> Ajouter au panier</a>
    <?php else: ?>
        <div class="alert alert-warning">
            Sélectionnez un album pour afficher ses informations.
        </div>
    <?php endif; ?>
</div>
<?php $contenu = ob_get_clean() ?>

<?php require 'Vue/gabarit.php' ?>
