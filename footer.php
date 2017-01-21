<div class="clear"></div>
</main>

<?php wp_footer(); ?>
<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <?php get_sidebar('footer')?>
    <div class="clear"></div>
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'thivinfo' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'thivinfo' ), 'WordPress' ); ?></a>
    </div>
</footer>
</body>
</html>