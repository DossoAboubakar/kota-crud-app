<?php $title = "Vendeurs"; ?>
<?php ob_start(); ?>
<?php require('src/tables/vendeur.php')?>
<?php require('config/modals/vendeur/add.php') ?>
<?php require('config/modals/vendeur/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
