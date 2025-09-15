<footer>
    <div class="footer-infos">
        <div class="infos">
            <p>2 Rue Michel Bakounine, 29600 Morlaix</p>
            <p>
                Tel: <?= secure_html($str['footer_tel']) ?> |
                Email :
                <a href="mailto:<?= secure_attr($str['footer_email_1']) ?>">
                    <?= secure_html($str['footer_email_1']) ?>
                </a>
            </p>
            <p><?= secure_html($str['footer_siret']) ?></p>
        </div>
        <img src="/assets/img/logo.svg" alt="SSA logo">
    </div>
</footer>

<?= $this->renderComponent('copyright.php', ['str' => $str]) ?>