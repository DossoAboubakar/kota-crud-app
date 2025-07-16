<?php $title = "Admin"; ?>

<?php ob_start(); ?>
<?php require('config/views/admin.php');?>
<?php require('config/modals/admin/add.php') ?>
<?php require('config/modals/admin/edit.php') ?>
<?php require('src/tables/admin.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
