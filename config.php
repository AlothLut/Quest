<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        $settings = require_once 'settings.php';

        function config($optionName,$defaultValue='') {

        global $settings;

        foreach ($settings as $key=>$value) {
            if ($key == $optionName) {
                return $value;
        }
        if (is_array($value)) {
            foreach ($value as $k=>$v) {
                if ($key.'.'.$k == $optionName) {
                    return $v;
                }
            }
        }
    }
    return $defaultValue;
}
        echo config("db.user").'<br />';
        echo config("site_name").'<br />';
        echo config("db.name").'<br />';
        echo config("db.host", "localhost").'<br />';
        echo config("db.host");
        ?>
    </body>
</html>
