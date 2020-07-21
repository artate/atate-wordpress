<?php
add_filter( 'auto_update_plugin', '__return_true' ); 
add_filter( 'allow_minor_auto_core_updates', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_true' );
add_filter( 'allow_dev_auto_core_updates', '__return_false' );
?>