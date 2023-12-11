<?php

use Illuminate\Support\Facades\Hash;

$password = 'admin';
$hashedPassword = Hash::make($password);

echo $hashedPassword;
