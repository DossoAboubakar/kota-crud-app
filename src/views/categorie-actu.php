<?php $title = "Categories & Actualités"; ?>

<?php ob_start(); ?>
<?php require('src/tables/categorie-actu.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
