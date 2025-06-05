<?php require('config/views/liste-localisation.php');?>
<?php ob_start() ?>
<?php require('templates/tableLayout.php')?>
<div id="map" style="height: 300px;"></div>
<input type="text" id="gps" name="gps" placeholder="Latitude, Longitude" readonly>
<?php ob_end_flush() ?>