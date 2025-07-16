<?php require_once '../vendor/autoload.php'; ?>
<?php require_once 'crud.php'; ?>
<?php $title = "Equipements"; ?>
<?php ob_start(); ?>
<?php require('config/view.php');?>
<?php require('view/table.php')?>
<?php require('modals/add.php') ?>
<?php require('modals/edit.php') ?>
<?php require('../inc/footer.php');?>
<?php $content = ob_get_clean(); ?>
<!DOCTYPE html>
<html>
<head>
    <?php require('../inc/head.php')?>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        
        <div class="layout-container">
            <!-- Menu -->
            <?php require('../inc/aside.php')?>
            <div class="layout-page">
                
                <?= $content ?>
            </div>
            <!-- Menu -->
        </div>
    <?php require('../inc/scripts.php')?>
    <script src="/equipement/index.js"></script>
</body>

</html>
