<?php
/*
* Plugin Name: Ask a question Plugin 
* Plugin URI: http://www.thlangs.janehedegaard.com/
* Description: This is a Ask a question form Plugin for TH. LANGS based on HTML5, CSS, JS and PHP
* Version: 3.0.1
* Author: Oliver Brøker, Jane Hedegaard, Mia Jørgensen, Emma Dengsø og Nikolai Hansen
* Author URI: http://www.thlangs.janehedegaard.com/
* License: GPL2
*/

function newsletter_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<img id="logo" src=" '.plugins_url("ask-a-question-plugin/img/studievejleder.png").' "alt="Billede af studievejleder">';
    	$content .= '<h3 id="tilmeld">Hej! Jeg er studievejleder på TH. LANGS </h3>';
  	$content .= '<h3 id="tilmeld">Har du spørgsmål? Så skriv til mig her</h3>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
   $content .= '<input type="email" name="email" id="email" placeholder="Skriv din email her..." required><i class="fas fa-envelope"></i>';
    $content .= '<input type="text" name="text" id="email" placeholder="Skriv dit spørgsmål her..." required>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="Send" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
  	$content .= '<div>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

/*her linker vi til både eksterne og interne stylesheets samt scripts*/
    function register_styles_and_scripts_for_plugin() 
    {

        /*dette er et eksternt stylesheet til vores typografi*/
        wp_enqueue_style('CustomFontRaleway','https://fonts.googleapis.com/css2?family=Raleway:wght@200;400&display=swap');
        
        /*dette er et internt stylesheet*/
        wp_enqueue_style('CustomStylesheet', plugins_url('ask-a-question-plugin/css/style.css'));
        
        /*dette er til et overodnet jquery script*/
        wp_deregister_script('jquery');
        
        /*dette er et link til jquery*/
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        /*dette er et link til vores script*/
        wp_enqueue_script('CustomScript', plugins_url('ask-a-question-plugin/js/script.js'), array('jquery'), null, true);
    }

/*Her henter vi newsletter delen*/
add_shortcode('show_ask-a-question-plugin','newsletter_form');   

/*Her linker vi til vores stylesheets og scripts*/
add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    