<label class='burger text-center d-flex d-lg-none flex-column position-fixed rounded-circle' id='burger'>MENU
    <span class='bg-grey-dark isclosed mx-auto' id='burger1'>&nbsp;</span>
    <span class='bg-grey-dark isclosed mx-auto' id='burger2'>&nbsp;</span>
    <span class='bg-grey-dark isclosed mx-auto' id='burger3'>&nbsp;</span>
</label>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'navigation', 'menu_class' => 'display-none fw-bold','container' => 'nav' ) ); ?>