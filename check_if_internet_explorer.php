<?php 

// // Using pure php
// if(strpos($_SERVER['HTTP_USER_AGENT'], "MSIE") !== FALSE){
//     echo "You are using Internet Explorer";
// } else {
//     echo "You are not using Internet Explorer";
// }

// combining php with html
if(stripos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>

<h3>strpos() must have returned non-false</h3>
<p>You are using Internet Explorer</p>

<?php 
    } else {
?>

<h3>strpos() must have returned false</h3>
<p>You are not using Internet Explorer</p>

<?php } ?>
