<?php

return array(
   'doctrine' => array(
       'connection' => array(
           'orm_default' => array(
               'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
               'params' => array(
                   'host' => 'localhost',
                   'port' => '5432',
                   'user' => 'leonardo',
                   'password' => 'vidanova',
                   'dbname' => 'zf2_livraria'
                )
           )
       )
   ) 
);