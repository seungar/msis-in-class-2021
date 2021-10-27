<?php
// require 'common.php';
require 'class/DbConnection.php';

// Step 1: Get a datase connection from our helper class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$sql = 'SELECT name, username, max(salary) as maxSalary, count(salary) as offerCount
from student left outer join offer on student.id = offer.studentId
group by username, name';

$vars = [];


$stmt = $db->prepare($sql);
$stmt->execute($vars);

$offers = $stmt->fetchAll();

if (isset($_GET['format']) && $_GET['format']=='csv') {
  header('Content-Type: text/csv');
  echo "Name,Username,MaxSalary,OfferCount\r\n";

  foreach($offers as $o){
    echo "\"".$o['name']. "\","
        .$o['username']. ","
        .$o['maxSalary']. ","
        .$o['offerCount']. "\r\n";
    }


} else {

// Step 3: Convert to JSON
$json = json_encode($offers, JSON_PRETTY_PRINT);

// Step 4: Output
header('Content-Type: application/json');
echo $json;
}