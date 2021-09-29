<?php
 //variables and strings//
$num = 2;
$so = $num." be";
$haa = " or not to be";

echo $so.$haa;

$arr = [1,1,2,3,5,8,13,21];

// associative array //
$arr2 = [
    "first" => "Sam",
    "last" => "Ungar",
];


// LOOPS //
if (true) {
    echo "TRUE \n";
}   else {
    echo "FALSE \n";
}

while (true) {
    break;
}

echo "<ul>";
foreach ($arr2 as $key => $val) {
    echo "<li>".$key." is ".$val."</li>\n";
}
echo "</ul>";

// $arr as JSON //
echo json_encode($arr);
$jason = json_encode(
    $arr2,
    JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
echo $jason;

//variable naming: variables in camelCase, constants in UPPER_SNAKE_CASE
/* snake_case, kebab-case, PascalCase (class names) */

