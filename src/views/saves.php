<?php $title = "Saves"; ?>
<?php ob_start(); ?>
<?php require('src/tables/saves.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
