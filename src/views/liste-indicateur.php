<?php $title = "Liste des indicateurs"; ?>

<?php ob_start(); ?>
<?php require('src/tables/liste-indicateur.php')?>
<?php require('config/modals/liste-indicateur/add.php') ?>
<?php require('config/modals/liste-indicateur/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
