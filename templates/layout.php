<!DOCTYPE html>
<html>

<head>
    <?php require('inc/head.php')?>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        
        <div class="layout-container">
            <!-- Menu -->
            <?php require('inc/aside.php')?>
            <div class="layout-page">
                
                <?= $content ?>
            </div>
            <!-- Menu -->
        </div>
</body>

</html>
<script>
<?php require('inc/scripts.php')?>
</script>