<?php $title = "Dashboard"; ?>

<?php ob_start(); ?>

<?php require('inc/navbar.php');?>

<?php require('inc/dashboard.php')?>

<?php require('inc/footer.php');?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/layout.php') ?>