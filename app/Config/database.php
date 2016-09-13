<?php
class DATABASE_CONFIG {

        public $default = array(
                'datasource' => 'Database/MySql',
                'persistent' => false,
                'host' => 'localhost',
                'login' => 'root',
                'password' => 'root',
                'database' => 'cake',
                'encoding' => 'utf8',
        );
        public $test = array(
                'datasource' => 'Database/MySql',
                'persistent' => false,
                'host' => 'localhost',
                'login' => 'root',
                'password' => 'root',
                'database' => 'test_cake',
                'encoding' => 'utf8',
        );
}
