<!-- # Use of Math Operators! -->


<?php 

$x = 6;
$y = 9;

echo $x+$y, 
      $x-$y,
      $x*$y,
      $x/$y % 10


?>
<br>
<!-- # Use of Comparison Operators ! -->
<?php
$i = 10;
$h = 15;

echo $i < $h;

    var_dump($i == $h);
    var_dump($i > $h);
    var_dump($i != $h);
    var_dump($i <= $h);

?>

<?php 

if ($i < $h || $i == $h){

    echo "<h3>This is comparison </h3>";

}

if (!($i > $h)){

    echo "<h4>This is Not</h4>";
};


?>