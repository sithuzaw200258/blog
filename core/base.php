<?php

//=============  DB Connection  =============
function conn()
{
    return mysqli_connect("localhost", "root", "", "mmsit_webdev_blog");
}

//=============  Project URL  =============
$url = "http://{$_SERVER['HTTP_HOST']}/mmsit_webdev_blog";


//=============  Perission Role  =============
$roles = ["Admin", "Editor", "Users"];

//=============  Timezone Setup  =============
date_default_timezone_set('Asia/Yangon');
