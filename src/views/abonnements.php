<?php  $title = "Abonnements"; ob_start(); ?>
<?php require('src/tables/abonnement.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>