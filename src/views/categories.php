<?php $title = "Categories"; ?>

<?php ob_start(); ?>
<?php require ('config/views/categorie.php');?>
<?php require('src/tables/categorie.php')?>
<?php require('config/modals/categories/add-modal.php') ?>
<?php require('config/modals/categories/edit-modal.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
