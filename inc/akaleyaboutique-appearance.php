<?php
add_action('customize_register','akaleyaboutique_customize_register');
function akaleyaboutique_customize_register( $wp_customize ) {
    $wp_customize->add_section('akaleyaboutique_appearance_header',[
        'title'         =>  'Réglages supplémentaires de l\'entête',
        'description'   =>  'Ajouter un titre, un texte et un bouton sur l\'image d\'en\'entête',
        'priority'      =>  70
    ]);
    $wp_customize->add_setting('header_title',[
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control('header_title',[
        'type'      =>  'text',
        'section'   =>  'akaleyaboutique_appearance_header',
        'label'     =>  'Titre',
        'input_attrs' => array(
            'placeholder' => __( 'Titre de mon entête' ),
        ),
    ]);
    $wp_customize->add_setting('header_text');
    $wp_customize->add_control('header_text',[
        'type'      =>  'textarea',
        'section'   =>  'akaleyaboutique_appearance_header',
        'label'     =>  'Texte',
        'input_attrs' => array(
            'placeholder' => __( 'Texte de mon entête' ),
        ),
    ]);
    $wp_customize->add_setting('header_button');
    $wp_customize->add_control('header_button',[
        'type'      =>  'text',
        'section'   =>  'akaleyaboutique_appearance_header',
        'label'     =>  'Lien du bouton',
        'input_attrs' => array(
            'placeholder' => __( 'https://www.mon-site.fr/lien-de-la-page' ),
        ),
    ]);
    $wp_customize->add_setting('header_button_text', [
        'default'   =>  __( 'En savoir plus' ),
    ]);
    $wp_customize->add_control('header_button_text',[
        'type'      =>  'text',
        'section'   =>  'akaleyaboutique_appearance_header',
        'label'     =>  'Text du bouton',
        'input_attrs' => array(
            'placeholder' => __( 'En savoir plus' ),
        ),
    ]);

}