<?php $title = "Liste des localisations"; ?>
<?php ob_start(); ?>
<?php require('src/tables/liste-localisation.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
