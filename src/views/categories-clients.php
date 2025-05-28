<?php $title = "Categories & Clients"; ?>

<?php ob_start(); ?>
<?php require('src/tables/categorie-client.php')?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>
