<?php

function custom_metabox() {
   global $post;

//Todas os noticias
  $post_metabox = new Odin_Metabox(
      'conteudo', // Slug/ID of the Metabox (Required)
      'Conteúdo', // Metabox name (Required)
      'video', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
    array(
      array(
        'id'          => 'tempo', // Required
        'label'       => __( 'Tempo de Duração', 'odin' ), // Required
        'type'        => 'input', // Required
        // 'default'  => 'Default text', // Optional
        'description' => __( 'Insira o tempo do vídeo', 'odin' ), // Optional
        'attributes'  => array( // Optional (html input elements)
          'type' => 'number',
          'max'  => 999,
          'min'  => 1
        )
      ),
      array(
        'id'          => 'url', // Required
        'label'       => __( 'URL do vídeo', 'odin' ), // Required
        'type'        => 'input', // Required
        // 'default'  => 'Default text', // Optional
        'description' => __( 'inclua o URL do vídeo', 'odin' ), // Optional
        'attributes'  => array( // Optional (html input elements)
            'type' => 'url'
        )
      ),  
      
      array(
        'id'          => 'sinopse', // Obrigatório
        'label'       => __( 'Sinopse:', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
        // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)      
      ), 
      array(
        'id'          => 'destaque-banner', // Obrigatório
        'label'       => __( 'Destaque', 'odin' ), // Obrigatório
        'type'        => 'checkbox', // Obrigatório
        // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)      
      ),    
    )
  );
}
add_action( 'init', 'custom_metabox', 1 );

