<?php $title = "Annonces"; ?>

<?php ob_start(); ?>
<?php require('src/tables/annonce.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
