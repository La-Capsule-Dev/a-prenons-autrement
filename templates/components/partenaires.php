<?php

/** @var array<string, string> $str */

$partenaires = [
    [
        'name' => 'Primel-Tregastel Amitiés',
        'role' => 'partenaire',
        'url' => 'https://www.facebook.com/p/Primel-Tr%C3%A9gastel-Amiti%C3%A9s-100063717031144/?locale=fr_FR',
        'logo' => '/assets/img/primeltregastelamities.webp',
    ],
    [
        'name' => 'Lions Club',
        'role' => 'partenaire',
        'url' => 'https://lions-morlaix.myassoc.org/',
        'logo' => '/assets/img/lionsclub.webp',
    ],
    [
        'name' => 'AFPA',
        'role' => 'partenaire',
        'url' => 'https://ulamir-cpie.bzh/',
        'logo' => '/assets/img/afpa.webp',
    ],
    [
        'name' => 'Finistère Habitat',
        'role' => 'partenaire',
        'url' => 'https://www.adess29.fr/faire-reseau/le-pole-du-pays-de-morlaix/',
        'logo' => '/assets/img/finistere_habitat.webp',
    ],
    [
        'name' => 'Ville de Morlaix',
        'role' => 'partenaire',
        'url' => 'https://www.resam.net/',
        'logo' => '/assets/img/morlaix.webp',
    ],
    [
        'name' => 'Plouigneau',
        'role' => 'partenaire',
        'url' => 'https://leaderfrance.fr/le-programme-leader/',
        'logo' => '/assets/img/plouigneau.webp',
    ],
    [
        'name' => 'Locquirec',
        'role' => 'partenaire',
        'url' => 'https://leaderfrance.fr/le-programme-leader/',
        'logo' => '/assets/img/locquirec.webp',
    ],
    [
        'name' => 'IBEP Formations',
        'role' => 'partenaire',
        'url' => 'https://leaderfrance.fr/le-programme-leader/',
        'logo' => '/assets/img/ibep.svg',
    ],
    [
        'name' => 'Carantec',
        'role' => 'partenaire',
        'url' => 'https://leaderfrance.fr/le-programme-leader/',
        'logo' => '/assets/img/carantec.webp',
    ],
    [
        'name' => 'Morlaix Communauté',
        'role' => 'partenaire',
        'url' => 'https://leaderfrance.fr/le-programme-leader/',
        'logo' => '/assets/img/morlaixco.webp',
    ],
];
?>

<section class="partenaires">
    <h2><?= secure_html($str['partners_title']) ?></h2>
    <div class="icons partners">
        <h3>Partenaires</h3>
        <div class="logos">

            <?php foreach ($partenaires as $p): ?>
                <a href="<?= secure_url($p['url']) ?>" target="_blank" rel="noreferrer noopener">
                    <img src="<?= secure_attr($p['logo']) ?>" alt="<?= secure_attr($p['name']) ?>">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>