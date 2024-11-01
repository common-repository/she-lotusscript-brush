<?php
/*
Plugin Name: SyntaxHighlighter Evolved: LotusScript Brush
Description: Adds support for the LotusScript language to the SyntaxHighlighter Evolved plugin.
Author: Ulrich Krause <eknori@eknori.de>
Version: 1.0.0
Author URI: https://eknori.de
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
*/

function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'style1', $plugin_url . 'css/syntaxhighlighter_lotusscript.css' );
}

add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );
add_action( 'init', 'syntaxhighlighter_lotusscript_regscript' );
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_lotusscript_addlang' );

function syntaxhighlighter_lotusscript_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-lotusscript', plugins_url( 'shBrushLotusScript.js', __FILE__ ), array('syntaxhighlighter-core'), '1.0.0' );
}

function syntaxhighlighter_lotusscript_addlang( $brushes ) {
    $brushes['lotusscript'] = 'lotusscript';
    $brushes['ls'] = 'lotusscript';

return $brushes;
}

?>