<?php
$pdo = new PDO("mysql:host=localhost;dbname=chatboulette;charset=utf8", "root", "");

$sql = "SELECT * FROM `chat` ORDER BY date DESC LIMIT 10" ;

$output = $pdo->query($sql)->fetchAll();

//print_r($output);
echo json_encode($output);




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

