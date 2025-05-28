<?php $title = "Images des agences"; ?>
<?php ob_start(); ?>
<?php require('src/tables/image-agence.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
