<?php

function add_role_viajero()
{

	remove_role('viajero');

    add_role(
        'viajero',
        'viajero',
        [
            'read'         => true,
            'edit_posts'   => true,
            'upload_files' => true,
            'publish_posts'=> true,
            //'delete_posts' => true,
            //'edit_posts'           => true, // edita posts generales no publicados
            'edit_published_posts' => true // edita los posts ya publicados
        ]
    );
}

add_action('init', 'add_role_viajero');