<?php $title = "Années"; ?>

<?php ob_start(); ?>
<?php require('config/views/annees.php');?>
<?php require('config/modals/annee/add-annee.php') ?>
<?php require('config/modals/annee/edit-annee.php') ?>
<?php require('src/tables/annee.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
