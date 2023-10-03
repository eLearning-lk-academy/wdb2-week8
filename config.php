<?php
$config = [
  'mysql' => [
    'host' => 'localhost',
    'port' => '3309',
    'username' => 'root',
    'password' => 'root',
    'database' => 'wdb2_week8'
  ]
];

foreach ($config as $key => $value) {
  $GLOBALS[$key] = $value;
}