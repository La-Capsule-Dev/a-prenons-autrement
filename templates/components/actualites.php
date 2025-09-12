<?php

declare(strict_types=1);
$e = static fn($v) => htmlspecialchars((string)$v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>

<section id="news" class="news">
    <h2><?= secure_html($str['news_title']) ?></h2>
    <div class="news-grid">
        <?php foreach ($articles as $article): ?>
            <article class="news-item">
                <h3><?= $e($article->titre) ?></h3>
                <p><?= $e($article->resume) ?></p>
                <img src="/assets/img/<?= $e($article->image) ?>" alt="Illustration de l'article">
                <a href="/article/<?= $e($article->id) ?>" class="read-more">
                    <?= secure_html($str['read_more']) ?>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>