<?php

return [
    'class' => 'yii\db\Connection',
   # 'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'dsn' => 'pgsql:host=10.200.12.125;dbname=topshop',
    'username' => 'postgres',
    'password' => 'postgres',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
