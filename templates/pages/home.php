<?php

/** @var array<string, string> $str */
/** @var App\Dto\ArticleDTO[] $articles */
?>
<?php
$e = static fn($v) => htmlspecialchars((string)($v ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$action   = $e($articleGenerateIcsAction ?? '/home/generate_ics');
?>

<section class="hero">
    <div class="overlay"></div>
    <h1>A. Prenons AUTREMENT</h1>
    <p class="slogan"><?= secure_html($str['hero_slogan']) ?></p>
    <div class="cta-buttons">
        <a href="/projet" class="btn primary"><?= secure_html($str['hero_cta_more']) ?></a>
        <a href="/benevoles" class="btn secondary">Les bénévoles</a>
        <a href="/#contact" class="btn secondary"><?= secure_html($str['hero_cta_contact']) ?></a>
    </div>
</section>

<?= $this->renderComponent('apropos.php', ['str' => $str]) ?>
<?= $this->renderComponent('actualites.php', ['str' => $str, 'articles' => $articles]) ?>

<div class="separator"></div>

<?= $this->renderComponent('partenaires.php', ['str' => $str]) ?>
<div class="separator"></div>
<?= $this->renderComponent('contact.php', ['str' => $str]) ?>