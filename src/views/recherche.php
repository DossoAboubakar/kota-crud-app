<?php $title = "Recherches"; ?>
<?php ob_start(); ?>
<?php require('src/tables/recherche.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
