<?php
$students = array(
"vivek" => 90,
"Harsh" => 72,
"Mitesh"=> 82,
"Naina" => 78
);

echo "<h3>Original Associative Array</h3>";
foreach ($students as $name => $marks) {
echo $name . " : " . $marks . "<br>";
}
echo "<br>";
asort($students);
echo "<h3>Array after asort() (Sort by Values)</h3>";
foreach ($students as $name => $marks) {
echo $name . " : " . $marks . "<br>";
}
echo "<br>";
ksort($students);
echo "<h3>Array after ksort() (Sort by Keys)</h3>";
foreach ($students as $name => $marks) {
echo $name . " : " . $marks . "<br>";
}
?>