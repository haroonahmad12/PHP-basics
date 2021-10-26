<!-- # Use of for! -->

<?php for ($i = 0; $i < 5; $i++)
    echo "<h1>Headings Here</h1>"


?>


<!-- # Use of forEach! -->

<?php 
 
$siblings= ["haroon", "ayesha", "arsalan"];

foreach ($siblings as $sibling)
 echo "<h3>$sibling</h3>"


?>

<!-- # Use of While loop! -->

<?php 

$h = 0;

while ($h < 5){

echo "<h3>This is $h </h3>";

$h++;

}

?>

<!-- # Use of print! -->


<?php 

$o = 0;

do {
    echo "<h5>I am $o </h5>";
    $o++;
} while ($o <= 5);


?>