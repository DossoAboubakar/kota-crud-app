<?php $title = "Situations"; ?>
<?php ob_start(); ?>
<?php require('src/tables/situation.php')?>
<?php require('config/modals/situation/add.php') ?>
<?php require('config/modals/situation/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
