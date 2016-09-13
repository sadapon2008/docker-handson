<?php
class DATABASE_CONFIG {

        public $default = array(
                'datasource' => 'Database/Mysql',
                'persistent' => false,
                'host' => 'localhost',
                'login' => '',
                'password' => '',
                'database' => 'cake',
                'encoding' => 'utf8',
        );
        public $test = array(
                'datasource' => 'Database/Mysql',
                'persistent' => false,
                'host' => 'localhost',
                'login' => '',
                'password' => '',
                'database' => 'test_cake',
                'encoding' => 'utf8',
        );
}
