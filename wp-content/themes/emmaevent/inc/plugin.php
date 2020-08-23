
<?php
// desactivate update plugin Event
function stop_plugin_update( $value ) {
    unset( $value->response['event/event.php'] );
    return $value;
   }
   add_filter( 'site_transient_update_plugins', 'stop_plugin_update' );