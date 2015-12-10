<?php
class DATABASE_CONFIG {

        public $default = array(
                'datasource' => 'Database/Postgres',
                'persistent' => false,
                'host' => 'localhost',
                'login' => 'postgres',
                'password' => 'postgres',
                'database' => 'cake',
        );
        public $test = array(
                'datasource' => 'Database/Postgres',
                'persistent' => false,
                'host' => 'localhost',
                'login' => 'postgres',
                'password' => 'postgres',
                'database' => 'test_cake',
        );
}
