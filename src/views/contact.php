<?php $title = "Contacts"; ?>

<?php ob_start(); ?>
<?php require('src/tables/contact.php')?>
<?php require('config/modals/contacts/add-modal.php') ?>
<?php require('config/modals/contacts/edit-modal.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
