<?php $title = "Favoris"; ?>
<?php ob_start(); ?>
<?php require('config/views/favoris.php');?>
<?php require('src/tables/favoris.php')?>
<?php require('config/modals/favoris/add-modal.php') ?>
<?php require('config/modals/favoris/edit-modal.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php')?>
