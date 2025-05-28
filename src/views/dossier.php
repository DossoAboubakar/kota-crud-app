<?php $title = "Dossiers"; ?>
<?php ob_start(); ?>
<?php require('src/tables/dossier.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
