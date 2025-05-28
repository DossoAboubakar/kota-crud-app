<?php
$_table = [
  ["Projet A", "Client X", "3", "Actif"],
  ["Projet B", "Client Y", "2", "Inactif"]
];

echo json_encode(['data' => $_table]);