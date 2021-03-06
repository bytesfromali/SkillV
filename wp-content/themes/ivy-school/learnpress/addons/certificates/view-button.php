<?php
/**
 * Template for displaying button to view certificate inside course.
 *
 * @package LearnPress/Templates/Certificates
 * @author  ThimPress
 * @version 3.0.0
 */

defined( 'ABSPATH' ) or die();

if ( ! isset( $certificate ) ) {
	return;
}

?>
<form name="certificate-form-button" class="form-button" action="<?php echo $certificate->get_permalink( '' ); ?>" method="post">
    <button class="learn-press-popup-certificate btn-normal shape-round btn-primary"><?php _e( 'Certificate', 'ivy-school' ); ?></button>
</form>
