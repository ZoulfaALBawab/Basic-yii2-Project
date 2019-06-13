<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Users</h1>

 <?php
 foreach ($users as $user){
     echo $user->username."<br>";
 }