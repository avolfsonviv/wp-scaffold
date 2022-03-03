<?php
/**
 * Example ui component Partial
 *
 * @package TenUpTheme
 */

// Add default values for ALL args here
$arg_defaults = [
	// Additional classes can be passed through for edge case management
	'class_names' => '',
];
$args         = wp_parse_args( $args, $arg_defaults );

// Provides a final check to render the component or not
$should_render = true;
// The partial name - corresponds to naming used in CSS - used to build out child classnames (BEM)
$partial_name = 'example-ui-component';

// Extend this (.=) later on with variant specific classes if needed
$container_class_names = $args['class_names'];

// Bail early if there are any conditions that should prevent rendering
if ( ! $should_render ) {
	return;
}
?>
<div class="<?php echo esc_attr( "{$partial_name} {$container_class_names}" ); ?>">
	<div class="<?php echo esc_attr( "{$partial_name}__inner" ); ?>">
		Partial: Example ui component goes here
	</div>
</div>
