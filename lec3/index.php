<?php
//echo vs print -------------------------
echo 'Hello World<br>'; // does not return value => simple print statement
print 'Hello World<br>'; // return value of 1
echo print 'Hello World', '<br>'; // output => Hello World1
print('Hello World<br>');
echo ('Hello World<br>');
echo 'Hello', ' ', 'World<br>'; // echo is faster than print
echo 'Swarup\'s Invoice<br>';

//variables----------------------------------
$name = 'Swarup';
$_123name = 'Swarup1';

//--------------------------------------
$x = 1;
$y = $x;

$x = 3;

echo $y, '<br>'; //output is 1

//---------------------------------------
$x = 1;
$y = &$x; //assigned by reference

$x = 3;

echo $y, '<br>'; //output is 3

//----------------------------------
$name = 'Snow';
echo 'Name is $name<br>'; //output => 'Name is $name'
echo "Name is $name<br>"; //output => 'Name is Snow'
echo "Name is {$name}<br>"; //output => 'Name is Snow'

//----------------------------------------------------
echo 'Hello' . $name; //concatenation operator
?>

<!DOCTYPE html>
<html>

<body>

    <h1>
        <?php
        $x = 10;
        $y = 5;

        echo $x . ',' . $y;
        ?>

        <?= 'Hello World' ?>
    </h1>

    <p>My first paragraph.</p>
    <?php
    $x = 10;
    $y = 5;

    echo '<p>' . $x . ',' . $y . '</p>';
    ?>

</body>

</html>