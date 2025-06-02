<?php $title = "Categories & Actualités"; ?>

<?php ob_start(); ?>
<?php require('src/tables/categorie-actu.php')?>
<?php require('config/modals/categorie-actualite/add-modal.php') ?>
<?php require('config/modals/categorie-actualite/edit-modal.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
