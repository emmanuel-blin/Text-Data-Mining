<?php 

/**
 * Plugin Name: Text & Data Mining
 * Plugin URI: https://github.com/emmanuel-blin/Text-Data-Mining
 * Description: Ajoute le protocole de reservation Text & Data Mining (TDMRep), aux pages des articles
 * Requires at least: 5.0
 * Requires PHP: 5.6
 * Version: 1.0
 * Author: E.Blin
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 */


 if ( !defined( 'ABSPATH' ) ) { 
   exit; // Exit if access directly
 }

 function textAndDataMining() { 
   if ( is_single() ) { 
      ?>
         <meta charset="utf-8">
         <meta name="tdm-reservation" content="1">
         <meta name="tdm-policy"
         content="<?php echo home_url('/policies/policy.json/');?>">
      <?php
   }
 }

add_action('wp_head', 'textAndDataMining');

?>