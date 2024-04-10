<?php
$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ%';
$max = 54;
$token = substr(str_shuffle($characters), 0, $max);
