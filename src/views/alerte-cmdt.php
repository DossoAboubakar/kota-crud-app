<?php $title = "Alertes & Commandités"; ?>
<?php ob_start(); ?>
<?php require('src/tables/alerte-cmdt.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
