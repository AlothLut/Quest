<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<?php

function config($optionName, $defaultValue = '', $arr = [])
{
    $settings = require_once 'settings.php';
    if ($arr == []) {
        $arr = $settings;
    }
    if ($defaultValue !=='') {
        return $defaultValue;
    }

    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $arr = $value;
            $optionName = substr($optionName, strpos($optionName, '.') + 1);

            return config($optionName, $defaultValue = '', $arr);
        } elseif ($key == $optionName) {
            return $value;
        }

    }

}


    //echo config("site_name").'<br />' ;

    echo config("db.db2.db3.user3").'<br />';

    //echo config("db.name").'<br />';
    //echo config("db.host", "localhost").'<br />';
    //echo config("db.user").'<br />';
    //echo config("db.host");
?>
    </body>
</html>
