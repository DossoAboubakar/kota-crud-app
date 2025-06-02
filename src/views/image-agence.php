<?php $title = "Images des agences"; ?>
<?php ob_start(); ?>
<?php require('config/views/image-agence.php') ?>
<?php require('config/modals/images-agences/add-modal.php') ?>
<?php require('config/modals/images-agences/edit-modal.php') ?>
<?php require('src/tables/image-agence.php')?>
<?php require('inc/footer.php')?>
<?php $content = ob_get_clean() ?>
<?php require('templates/layout.php')?>
