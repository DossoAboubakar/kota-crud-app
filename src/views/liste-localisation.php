<?php $title = "Liste des localisations"; ?>
<?php ob_start(); ?>
<?php require('src/tables/liste-localisation.php')?>
<?php require('config/modals/liste-localisation/add.php') ?>
<?php require('config/modals/liste-localisation/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
