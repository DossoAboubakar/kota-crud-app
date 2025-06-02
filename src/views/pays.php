<?php $title = "Pays"; ?>
<?php ob_start(); ?>
<?php require('src/tables/pays.php')?>
<?php require('config/modals/pays/add.php') ?>
<?php require('config/modals/pays/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php')?>
