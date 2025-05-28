<?php $title = "Paiements"; ?>
<?php ob_start(); ?>
<?php require('src/tables/paiement.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
