<?php
/**
 * Ongehoord functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

add_filter('attachments_default_instance', '__return_false');
add_action('attachments_register', function ($attachments) {
    $attachments->register('annotations', [
        'fields' => [
            [
                'name' => 'id',
                'type' => 'text',
                'label' => 'id'
            ],
            [
                'name' => 'content',
                'type' => 'textarea',
                'label' => 'content'
            ],
        ],
        'label' => 'Annotations',
        'post_type' => ['page'],
        'priority' => 'high',
        'filetype' => null
    ]);
});
