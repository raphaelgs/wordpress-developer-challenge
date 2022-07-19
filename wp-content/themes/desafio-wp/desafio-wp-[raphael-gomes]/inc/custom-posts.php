<?php
function type_post_porsonalizados() {

//Videos
   $video = new Odin_Post_Type(
      'Vídeo',
      'video'
   );
   $video->set_labels(
      array( 'menu_name' => __( 'Vídeos', 'odin' ))
   );
   $video->set_arguments(
      array(
         'public' => true,
         'supports' => array('title','editor','author','revisions','thumbnail'),
         'has_archive' => true,
         'menu_icon' => 'dashicons-format-video',
         'show_in_nav_menus' => true,
         'show_in_rest' => true
      )
   );
   $categoria = new Odin_Taxonomy(
      'categoria',
      'categoria',
      'video'
   );
   $categoria ->set_labels(
      array(
         'menu_name' => __( 'Categorias', 'odin' )
      )
   );
   $categoria ->set_arguments(
      array(
         'hierarchical' => true,
         'show_in_rest' => true
      )
   );

}

function change_post_label() {
   global $menu;
   global $submenu;
   $menu[5][0] = 'Post';
   $submenu['edit.php'][5][0] = 'Post';
   $submenu['edit.php'][10][0] = 'Adicionar Post';
   $submenu['edit.php'][16][0] = 'Tags';
   echo '';
}
function change_post_object() {
   global $wp_post_types;
   $labels = &$wp_post_types['post']->labels;
   $labels->name = 'Post';
   $labels->singular_name = 'Post';
   $labels->add_new = 'Adicionar Post';
   $labels->add_new_item = 'Adicionar Post';
   $labels->edit_item = 'Editar Post';
   $labels->new_item = 'Post';
   $labels->view_item = 'Ver Post';
   $labels->search_items = 'Buscar Post';
   $labels->not_found = 'Nenhuma Post encontrado';
   $labels->not_found_in_trash = 'Nenhuma Post encontrado no Lixo';
   $labels->all_items = 'Todas Post';
   $labels->menu_name = 'Post';
   $labels->name_admin_bar = 'Post';
   $wp_post_types['post']->menu_position = '25';
   
}


add_action('init', 'type_post_porsonalizados', 1);
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );
