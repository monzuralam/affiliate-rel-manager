<?php
if (!defined('ABSPATH')) {
    die;
} // Cannot access directly.

// Check core class for avoid errors
if (class_exists('CSF')) {
    //
    // Set a unique slug-like ID
    //
    $prefix = 'affiliate_link_manager';

    //
    // Create options
    //
    CSF::createOptions($prefix, array(
        'menu_title' => 'Affiliate Rel Manager',
        'menu_slug'  => 'affiliate-rel-manager',
        'menu_icon' =>  'dashicons-admin-links',
    ));

    //
    // Affiliate link Section
    //
    CSF::createSection($prefix, array(
        'title'  => 'Affiliate Links ',
        'icon'   => 'fas fa-link',
        'description' => '',
        'fields'      => array(

            array(
                'id'       => 'affiliate-link',
                'type'     => 'repeater',
                'title'    => '',
                'subtitle' => '',
                'fields'   => array(
                    array(
                        'id'    => 'affiliate-link-url',
                        'type'  => 'text',
                        'title' => 'URL',
                        'placeholder' => 'https://amzn.to'
                    ),
                ),
                'default' => array(
                    array(
                        'affiliate-link-url' => '',
                    ),
                ),
            ),

        )
    ));
}