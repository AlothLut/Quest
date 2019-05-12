Quest machaon
<img src="https://raw.githubusercontent.com/AlothLut/Quest/master/XdGKn5q.png">

Description: 

* Написать функцию config($optionName, $defaultValue) для получения неких настроек проекта.

* Настройки пусть хранятся в php-файле примерно такого формата: 

```<?php 

// settings.php

return [

  “site_name” => “My site”,

  “site_url” => “http://mysite.ru”,

  “db” => [

    “user” => “admin”,

    “password” => “ifghigh8y8rt347ghi”,

    “name” => “my_database”

  ]

];
```
* Функция должна уметь возвращать значения вложенных настроек.

* Пример: 

* echo config(“site_url”); // "mysite.ru"

* echo config(“db.user”); // admin

* Должна быть возможность указать значение по-умолчанию, которое вернется, если опции в файле нет: 

* echo config(“db.host”, “localhost”); // localhost

* Если опции нет, и значение по-умолчанию не задано, следует бросать исключение.
