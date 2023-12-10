<?php
    extract($_REQUEST);
    $file=fopen("msg.txt","a");

    fwrite($file,"Név :");
    fwrite($file, $name ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Telefonszám: :");
    fwrite($file, $tel ."\n");
	fwrite($file,"Üzenet: :");
    fwrite($file, $comment ."\n");
	fwrite($file, " " ."\n");
	fclose($file);
    header("location: redirect.html");
 ?>
