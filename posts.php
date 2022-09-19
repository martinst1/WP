<?php
function output_projects_list() {
    ini_set('memory_limit', '-1');
    set_time_limit(0);
    require(dirname(__FILE__) . '../../wp-load.php');
    global $wpdb;
    $result = $wpdb->get_results ( "
        SELECT distinct post_title 
        FROM  $wpdb->posts
            WHERE post_type = 'post' and post_status = 'publish'
    " );
    echo count($result);
    foreach ( $result as $page )
    {
       echo $page->post_title.'<br/>';
    }
}
output_projects_list();
