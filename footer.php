<?php
/**
 * The template for displaying the footer.
 *
 * @package Deluxara
 */
?>
</main>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo"><?php esc_html_e( 'DÉLUXARA', 'deluxara' ); ?></div>
            <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php esc_html_e( 'Déluxara Digital Atelier. Where Intelligence Meets Elegance.', 'deluxara' ); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
