<?php
for( $i = 0; $i < 5; $i++){
	
global $wpdb;
$dia = date('dmyHis');
$sorteio = mt_rand(100,999);
$numero_gerado = $dia.$i.$sorteio;
echo $numero_gerado."<br>";
$wpdb->insert(
'wppl_posts',
array(
'post_author' => '1',
'post_date' => ''.date('Y-m-d H:i:s').'',
'post_date_gmt' => ''.date('Y-m-d H:i:s').'',
'post_content' => ''.$numero_gerado.'',//aqui pode por o numero gerado do post
'post_title' => ''.$numero_gerado.'',
'post_status' => 'open',
'ping_status' => 'open',
'post_name' => '',//slug tambem tem ser o numero
'post_parent' => '0',
'guid' => ''.site_url().'/aircode/'.$numero_gerado.'',//url com o numero gerado
'menu_order' => '0',
'post_type' => 'post_type',
'comment_count' => '0'
)
);
}
