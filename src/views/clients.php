<?php $title = "Clients"; ?>

<?php ob_start(); ?>
<?php require ('config/views/client.php');?>
<?php require('src/tables/client.php')?>
<?php require('config/modals/user/add.php') ?>
<?php require('config/modals/user/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
