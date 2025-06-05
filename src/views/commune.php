<?php $title = "Communes"; ?>
<?php ob_start(); ?>
<?php require('src/tables/commune.php')?>
<?php require('config/modals/communes/add-modal.php') ?>
<?php require('config/modals/communes/edit-modal.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php')?>
