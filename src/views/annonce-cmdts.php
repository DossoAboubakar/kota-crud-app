<?php $title = "Annonces & Commodités"; ?>

<?php ob_start(); ?>
<?php require('src/tables/annonce-cmdts.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>