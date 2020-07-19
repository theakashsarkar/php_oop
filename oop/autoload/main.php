<?php
namespace CloudStorges;
include "mail\Mail.php";
class Main{
    function  __construct(){
        (new CloudStorges\Mail\Mailer())->sendMail();
    }
}
new main();