<?php

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">

<?php woocommerce_content(); ?>

</div> <!-- #main-content -->

<?php

get_footer();