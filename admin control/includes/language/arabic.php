<?php

function lang($pharase)
{
    static $lang=array(
        'welcome'=>'مرحبا',
      'admin'=>'بالمدير'
    );
    return $lang[$pharase];
}

?>