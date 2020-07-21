<?php
namespace CloudStorges;

use CloudStorges\Mail\Mailer;

// use CloduStorges\Mail\Mailer;
spl_autoload_register(function ($className){
    $path = strtolower(str_replace("CloudStorges\\","","$className")).".php";
    $path = str_replace("\\","/","$path");
    include_once($path);
    // echo $path;
    // die();
});
// include "mail/Mailer.php";
class Main{
    function  __construct(){
    //   (new Mailer())->mailSend();
      $mailer = new Mailer();
      $mailer->mailSend();
    }
}
new main();