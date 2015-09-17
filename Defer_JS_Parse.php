<?php
//Defers loading JavaScript until all other content has loaded.
function defer_js ( $url ) {
if ( FALSE === strpos( $url, '.js' ) ) return $url;
if ( strpos( $url, 'jquery.js' ) ) return $url;
return "$url.' async onload='myinit()";
}
add_filter( 'clean_url', 'defer_js', 11, 1 );
//Sept6/2014
?>
