<?php $title = "Messages et contacts"; ?>
<?php ob_start(); ?>
<?php require('src/tables/message-contact.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
