<?php $title = "Transactions"; ?>
<?php ob_start(); ?>
<?php require('src/tables/transaction.php')?>
<?php require('config/modals/transaction/add.php') ?>
<?php require('config/modals/transaction/edit.php') ?>
<?php require('inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php')?>
