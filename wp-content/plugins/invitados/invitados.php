<?php
   /*
   Plugin Name: Invitados
   Plugin URI: http://maxifalcone.org
   description: Plugin para manejar invitados 
   Version: 1.0
   Author: Maxi Falcone
   Author http://maxifalcone.org
   License: GPL2
   */

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'invitados',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'invitados' ),
                'singular_name' => __( 'Invitado' ),
                'add_new' => _( 'Agregar Invitado' ),
                'add_new_item' => _( 'Invitado' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'invitados'),
            'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
        )
    );
    flush_rewrite_rules();
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function invitados_metabox_agregar()
{

    $lospost = ['post', 'wporg_cpt'];
    foreach ($lospost as $elpost) {
        add_meta_box(
            'wporg_box_id',           // Unique ID
            'Invitado',  // Box title
            'invitados_metabox',  // Content callback, must be of type callable
            $elpost                   // Post type
        );

        add_meta_box(
            'wporg_box_id_2',           // Unique ID
            'Segundo Invitado',  // Box title
            'invitados_metabox_2',  // Content callback, must be of type callable
            $elpost                   // Post type
        );
      };

    
}

add_action('add_meta_boxes', 'invitados_metabox_agregar');


 function invitados_metabox($post)
{
   global $wpdb;

$custom_post_type = 'invitados'; // define your custom post type slug here

    // A sql query to return all post titles
$results = $wpdb->get_results( $wpdb->prepare( "SELECT ID, post_title FROM {$wpdb->posts} WHERE post_type = %s and post_status = 'publish'", $custom_post_type ), ARRAY_A );

//print_r($results);
$seleccionado = get_post_meta($post->ID, '_Invitado_field', true);?>
<select name="Invitado_field" id="Invitado_field">
<option disabled selected value> -- seleccione un Invitado -- </option>
<?php foreach( $results as $index => $post ) { ?>
        <option value="<?php echo $post['ID'];?>" <?php echo $post['ID'] == $seleccionado ? 'selected' : ''?> ><?php echo $post['post_title']; ?> </option>';
<?php  } ?>
    </select>
    o <a href="<?php echo site_url(); ?>/wp-admin/post-new.php?post_type=invitados"> agregue uno nuevo</a>
<?php

}

 function invitados_metabox_2($post){
  global $wpdb;
  $custom_post_type = 'invitados';
  $results = $wpdb->get_results( $wpdb->prepare( "SELECT ID, post_title FROM {$wpdb->posts} WHERE post_type = %s and post_status = 'publish'", $custom_post_type ), ARRAY_A );
  $seleccionado = get_post_meta($post->ID, '_Invitado_field_2', true);
  if($seleccionado){?>
    <div id="otro_Invitado">
  <?php }else{ ?>
    <span id="mostrar_otro_Invitado" style="cursor: pointer">Sumar segundo Invitado</span>
    <div id="otro_Invitado" style="display: none;">
 <?php }
?>
<select name="Invitado_field_2" id="Invitado_field_2">
<option disabled selected value> -- seleccione un Invitado -- </option>
<?php foreach( $results as $index => $post ) { ?>
        <option value="<?php echo $post['ID'];?>" <?php echo $post['ID'] == $seleccionado ? 'selected' : ''?> ><?php echo $post['post_title']; ?> </option>';
<?php  } ?>
    </select>
    o <a href="<?php echo site_url(); ?>/wp-admin/post-new.php?post_type=invitados"> agregue uno nuevo</a>
</div>
<script type="text/javascript">
  $ = jQuery;
  $(document).ready(function(){
      $("#mostrar_otro_Invitado").click(function(){
        $("#otro_Invitado").toggle();
      })
  })
</script>
<?php
}





function guardar_invitados($post_id)
{
    if (array_key_exists('Invitado_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_Invitado_field',
            $_POST['Invitado_field']
        );
    }

    if (array_key_exists('Invitado_field_2', $_POST)) {
        update_post_meta(
            $post_id,
            '_Invitado_field_2',
            $_POST['Invitado_field_2']
        );
    }


}

add_action('save_post', 'guardar_invitados');
?>