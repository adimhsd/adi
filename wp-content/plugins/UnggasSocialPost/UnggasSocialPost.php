<?php
/**
 * Plugin Name:UnggasSocialPost
 * Author: Unggasid Developers
 * Description: An official social share plugin of UnggasID.com - V.1.0.0
 */

 add_action('init','add_footer_share');

function add_footer_share()
{
    // echo "hello world";
    wp_enqueue_style( 'share_style', plugins_url('/css/share-style.css', __FILE__), false, '1.0.0', 'all');
    // wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '1.0.0', 'all');
    // wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css', false, '1.0.0', 'all');
    wp_enqueue_script('font-awesome','https://kit.fontawesome.com/d001905878.js');
}

add_filter( 'the_content', 'share_button' );

function share_button( $content ) {

    // echo htmlspecialchars("hello & the world");
    global $post;
    $postlink  = get_permalink($post->ID);
    $posttitle = get_the_title($post->ID);

    $html = '<hr><p style="margin:3px;"></p><div class="share-wrapper"><ul class="share-unggasid">';
    
    $html .= '<li><a class="share-twitter" title="Share on Twitter" rel="external" href="http://twitter.com/share?text='.$posttitle.'&url='.$postlink.'"><i class="fab fa-twitter"></i> Twitter</a></li>';
    
    $html .= '<li><a class="share-facebook" title="Share on Facebook" rel="external" href="http://www.facebook.com/share.php?u=' . $postlink . '"> <i class="fab fa-facebook"></i>  Facebook</a></li>';
    
    $html .= '<li><a class="share-linkedin" title=" LinkedIn" rel="external" href="http://www.linkedin.com/shareArticle?mini=true&url=' . $postlink . '&title=' . $posttitle . '"><i class="fab fa-linkedin"></i> LinkedIn</a></li>';
    
    $html .= '<li><a class="share-whatsapp" title=" Whatsapp" rel="external" href="whatsapp://send?text='.urlencode(htmlspecialchars_decode($posttitle)).' - Baca Selengkapnya Di : '.$postlink. '"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>';
    
    $html .= '<li><a class="share-telegram" title=" Telegram" rel="external" href="tg://msg?text='.urlencode(htmlspecialchars_decode($posttitle)).' - Baca Selengkapnya Di : '.$postlink. '"><i class="fab fa-telegram"></i> Telegram</a></li>';
    
    $html .= '<li><a class="share-line" title=" Line" rel="external" href="line://msg/text/'.urlencode(htmlspecialchars_decode($posttitle)).' - Baca Selengkapnya Di : '.$postlink. '"><i class="fab fa-line"></i> Line</a></li>';
   
    $html .= '</ul></div>';
    return $content . $html;
}