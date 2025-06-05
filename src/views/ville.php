<?php $title = "Villes"; ?>
<?php ob_start(); ?>
<?php require('src/tables/ville.php')?>
<?php require('config/modals/ville/add.php') ?>
<?php require('config/modals/ville/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
