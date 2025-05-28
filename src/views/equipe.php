<?php $title = "Equipes"; ?>
<?php ob_start(); ?>
<?php require('src/tables/equipe.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
