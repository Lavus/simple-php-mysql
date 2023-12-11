<?php
$files = scandir( "./" );
foreach( $files as $file ){
   echo "<a rel='noreferrer noopener' target='_blank' href='".$file."'>".$file."</a><br />";
}
echo "<br><br>";
phpinfo();
?>