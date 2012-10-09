<?php
/**
 * @package CallFile
 */
/*
Plugin Name: Callfile
Plugin URI: http://marcelogomesrp.blogspot.com/?return=true
Description: Call a file 
Version: 0.1
Author: Marcelo Gomes
Author URI: http://marcelogomesrp.blogspot.com/wordpress-plugins/callfile
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/




class callfile {

  private static $info;
  private $status;

  public static function inicializar(){
    global $wpdb;

//    add_action('admin_menu', array('callfile','adicionarMenu'));
    add_action('plugins_loaded', array('callfile','ativaPlugin'));
//    add_action('the_content', array('servers','teste'));
    add_filter( 'the_content', 'callfile::teste', 11 );

    $status = $status . "inicializar";
  }

  public static function teste($text){
     //echo "trocando";
	 $padrao = "callfile";
	 if (ereg($padrao,$text)) {
	
		$results = "call file chamado"; 
//		echo "Padrao encontrado";
//		echo "<br /> O padrao e " . $text ." fim";

                $meuarray = split ("=", $text);
		
#		print_r($meuarray);
# 		print "<hr /> $meuarray[1] <hr />";
		$meuarquivo= split("<", $meuarray[1]);
//		include_once $meuarray[1];
		include_once $meuarquivo[0];

                return $test;
	} 	
	else {	
		return $text;
	}
	
	
	
  }

  public static function ativarPlugin(){
    $status = $status . "AtivarPlugin";
  }
  
  public static function instalar(){
   $status = $status . "instalar";
    if(is_null(servers::$wpdb))
      servers::inicializar();
 }
  
}

/** Funcao de inicializacao */
add_filter('init', array('callfile','inicializar'));

register_activation_hook($mppPluginFile,array('callfile','instalar'));



?>
