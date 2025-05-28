<?php $title = "Alertes & Localités"; ?>
<?php ob_start(); ?>
<?php require('src/tables/alerte-localite.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
