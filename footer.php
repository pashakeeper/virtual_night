<?php

/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) {
	if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
		get_template_part('template-parts/dynamic-footer');
	} else {
		get_template_part('template-parts/footer');
	}
}
?>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="../app/script.js?v_02"></script>


</body>

</html>