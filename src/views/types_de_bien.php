<?php $title = "Types de bien & Details"; ?>
<?php ob_start(); ?>
<?php require('src/tables/types_de_bien.php')?>
<?php require('config/modals/types_bien/add.php') ?>
<?php require('config/modals/types_bien/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
