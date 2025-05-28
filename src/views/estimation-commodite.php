<?php $title = "Estimations & Commodités"; ?>
<?php ob_start(); ?>
<?php require('src/tables/estimation-commodite.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
