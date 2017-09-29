<?php

function lang($pharase)
{
    static $lang=array(
        'welcome'=>'hello',
      'admin'=>'administrator'
    );
    return $lang[$pharase];
}

?>