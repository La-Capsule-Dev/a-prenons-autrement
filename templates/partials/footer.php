<footer>
    <div class="footer-infos">
        <div class="infos">
            <p>Association ADDESKI, 2 Rue Michel Bakounine, 29600 Morlaix</p>
            <p>
                Tel: 02 98 63 98 77 |
                Email :
                <a href="mailto:ssapaysdemorlaix@mailo.com">
                    contact@a-prenons-autrement.fr
                </a>
            </p>
            <p><?= secure_html($str['footer_siret']) ?></p>
        </div>
        <img src="/assets/img/logo.svg" alt="SSA logo">
    </div>
</footer>

<?= $this->renderComponent('copyright.php', ['str' => $str]) ?>