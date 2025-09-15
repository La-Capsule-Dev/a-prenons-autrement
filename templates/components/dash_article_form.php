<?php

use CapsuleLib\Security\CsrfTokenManager;
?>
<section class="articles">

    <h1>Mettre à jour un article</h1>

    <form action="/dashboard/articles/edit/<?= $article->id ?>" method="post">
        <?= CsrfTokenManager::insertInput() ?>

        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" value="<?= $article->titre; ?>">

        <label for="resume">Résumé</label>
        <textarea id="resume" name="resume" rows="10"><?= $article->resume; ?></textarea>

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="10"><?= $article->description; ?></textarea>

        <label for="date_article">Date</label>
        <input type="date" id="date_article" name="date_article" value="<?= $article->date_article; ?>">

        <label for="hours">Heure</label>
        <input type="time" id="hours" name="hours" value="<?= $article->hours; ?>">

        <button type="submit">Mettre à jour</button>
    </form>

</section>