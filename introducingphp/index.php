<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<p>


1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.
<br />

<?php
for($i = 1; $i <= 10; $i++) {
    if ($i < 10) {
        echo "$i-";
    } else {
        echo "$i" . "\n";
    }
}
?>
<hr />


2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.
<br />

<?php
$sum = 0;
for($i = 0; $i <= 30; $i++){
    echo $i . " + " . $sum . " = ";
    $sum += $i;
    echo $sum . "<br />";
}
echo "The sum of the numbers 0 to 30 is $sum" . "\n"
?>
<hr />


3. Create a script to construct the following pattern, using nested a for loop.

<!--  *  -->
<!--  * *  -->
<!--  * * *  -->
<!--  * * * *  -->
<!--  * * * * *  -->
<br />

<?php
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= $i; $j++){
            echo "*";
            if($j < $i) {
                echo " ";
            }
        }
        echo "<br />";
    }
?>
<hr />


4. Create a script to construct the following pattern, using a nested for loop.

<!--   *   -->
<!--   * *   -->
<!--   * * *   -->
<!--   * * * *   -->
<!--   * * * * *   -->
<!--   * * * * *   -->
<!--   * * * *   -->
<!--   * * *   -->
<!--   * *   -->
<!--   *   -->
<br />

<?php
$n = 9;
for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo '<br />';
}

for($i=$n - 1; $i>=1; $i--) {
    for($j=1; $j<=$i; $j++) {
        echo ' * ';
    }
    echo '<br /> ';
}
?>
<hr />


5. Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.
<br />

<form action="index.php" method="GET">
    <span>Enter a number</span><input type="text" name="userNum" /><input type="submit" />
</form>

<?php
if (isset($_GET["userNum"])) {
    $userNum = $_GET["userNum"];
    $sum = 1;
    if (! ctype_digit($_GET["userNum"])) {
        echo "You didn't enter a number fool - try again";
    } elseif ($userNum == 0) {
        echo 0 . "<br />";
    } else {
        for ($i = 1; $i <= $userNum - 1; $i++) {
            $sum *= ($i + 1);
        }
        echo "The factorial of $userNum is $sum. <br />";
    }
}
?>
<hr />


6. Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format:
Sample output :
<!--00, 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99,-->
<br />
<?php
for ($a = 0; $a < 10; $a++) {
    for ($b = 0; $b < 10; $b++) {
        $c = $a.$b;
        if ($c == 99) {
            echo $a.$b;
        } else {
            echo $c . ", ";
        }
    }
}
?>
<hr />


7. Write a program which will count the "r" characters in the text "w3resource".
<br />

<form action="index.php" method="GET">
    <span>Enter a word or phrase</span><input type="text" name="userWord" />
    <span>Enter a letter you wish to count</span><input type="text" maxlength="1" name="searchChar" />
    <input type="submit" />
</form>

<?php
$count = 0;
if (isset($_GET["userWord"], $_GET["searchChar"])) {
    $userWord = $_GET["userWord"];
    $searchChar = $_GET["searchChar"];
    if (ctype_digit($_GET["userWord"])) {
        echo "No numbers allowed - try again";
    } else {
        for ($x = "0"; $x < strlen($userWord); $x++) {
            if (substr($userWord, $x, 1) == $searchChar) {
                $count += 1;
            }
        }
        echo "There is $count \"$searchChar's\" in $userWord.";
    }
}

?>
<hr />


8. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.

<br />

<table  border="1" cellpadding="3" cellspacing="0" style="margin-bottom: 10px">
    <?php
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td>$i*$j=" . $i*$j . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<br />
<hr />


9. Write a PHP script using nested for loop that creates a chess board. Use table width="270px" and take 30px as cell height and width.

<br />
<table width="270px" cellspacing="0" cellpadding="0" border="1px">
<!--cell 270px wide (8 columns x 60px)-->
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for($col = 1; $col <= 8; $col++) {
            $total = $row+$col;
            if($total % 2 == 0) {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            } else {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
<hr />


10. Write a PHP script that creates the following table (use for loops).

<!--1	2	3	4	5	6	7	8	9	10-->
<!--2	4	6	8	10	12	14	16	18	20-->
<!--3	6	9	12	15	18	21	24	27	30-->
<!--4	8	12	16	20	24	28	32	36	40-->
<!--5	10	15	20	25	30	35	40	45	50-->
<!--6	12	18	24	30	36	42	48	54	60-->
<!--7	14	21	28	35	42	49	56	63	70-->
<!--8	16	24	32	40	48	56	64	72	80-->
<!--9	18	27	36	45	54	63	72	81	90-->
<!--10	20	30	40	50	60	70	80	90	100-->
<br />
<table border="1px" style="border-collapse: collapse" cellpadding="10px">
    <?php
    // Create first row of table headers
    echo '<tr>'; // this line starts the table row
    echo '<th>&nbsp;</th>'; // this line creates the first cell
    for ($col = 1; $col <= 12; $col++) :
        echo "<th>$col</th>";
    endfor;
    echo '</tr>';
    // Create remaining rows
    for ($row = 1, $col = 1; $row <= 12; $row++) :
        echo '<tr>';
        // First cell is a table header
        if ($col == 1) {
            echo "<th>$row</th>";
        }
        while ($col <= 12) :
            echo '<td>' . $row * $col++ . '</td>';
        endwhile;
        echo '</tr>';
        // Reset $col at the end of each row
        $col = 1;
    endfor;
    ?>
</table>
<hr />

11. Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".
<br />


<?php
for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz <br />";
    } elseif ($i % 5 == 0) {
        echo "Buzz <br />";
    } elseif ($i % 3 == 0) {
        echo "Fizz <br />";
    } else {
        echo $i . "<br />";
    }
}
?>
<hr />


<!--12. Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).-->
<!--According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:-->
<!--Sample output for n = 5 :-->
<!--1-->
<!--2 3-->
<!--4 5 6-->
<!--7 8 9 10-->
<!--11 12 13 14 15-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!---->
<!--13. Write a PHP program to print alphabet pattern 'A'.-->
<!--Expected Output:-->
<!---->
<!--***-->
<!--*   *-->
<!--*   *-->
<!--*****-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--14. Write a PHP program to print alphabet pattern 'B'.-->
<!--Expected Output:-->
<!---->
<!--****-->
<!--*   *-->
<!--*   *-->
<!--****-->
<!--*   *-->
<!--*   *-->
<!--****-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--15. Write a PHP program to print alphabet pattern 'C'.-->
<!--Expected Output:-->
<!---->
<!--***-->
<!--*   *-->
<!--*-->
<!--*-->
<!--*-->
<!--*   *-->
<!--***-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--16. Write a PHP program to print alphabet pattern 'D'.-->
<!--Expected Output:-->
<!---->
<!--****-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--****-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--17. Write a PHP program to print alphabet pattern 'E'.-->
<!--Expected Output:-->
<!---->
<!--*****-->
<!--*-->
<!--*-->
<!--****-->
<!--*-->
<!--*-->
<!--*****-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--18. Write a PHP program to print alphabet pattern 'F'.-->
<!--Expected Output:-->
<!---->
<!--*****-->
<!--*-->
<!--*-->
<!--****-->
<!--*-->
<!--*-->
<!--*-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--19. Write a PHP program to print alphabet pattern 'G'.-->
<!--Expected Output:-->
<!---->
<!--***-->
<!--*   *-->
<!--*-->
<!--* ***-->
<!--*   *-->
<!--*   *-->
<!--***-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--20. Write a PHP program to print alphabet pattern 'H'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*****-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--21. Write a PHP program to print alphabet pattern 'I'.-->
<!--Expected Output:-->
<!---->
<!--*****-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--*****-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--22. Write a PHP program to print alphabet pattern 'J'.-->
<!--Expected Output:-->
<!---->
<!--***-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--* *-->
<!--*-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--23. Write a PHP program to print alphabet pattern 'K'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*  *-->
<!--* *-->
<!--**-->
<!--* *-->
<!--*  *-->
<!--*   *-->
<!--*    *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--24. Write a PHP program to print alphabet pattern 'L'.-->
<!--Expected Output:-->
<!---->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--*****-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--25. Write a PHP program to print alphabet pattern 'M'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*   *-->
<!--** **-->
<!--* * *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--26. Write a PHP program to print alphabet pattern 'N'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*   *-->
<!--**  *-->
<!--* * *-->
<!--*  **-->
<!--*   *-->
<!--*   *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--27. Write a PHP program to print alphabet pattern 'O'.-->
<!--Expected Output:-->
<!---->
<!--***-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--***-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--28. Write a PHP program to print alphabet pattern 'P'.-->
<!--Expected Output:-->
<!---->
<!--****-->
<!--*   *-->
<!--*   *-->
<!--****-->
<!--*-->
<!--*-->
<!--*-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--29. Write a PHP program to print alphabet pattern 'Q'.-->
<!--Expected Output:-->
<!---->
<!--***-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--* * *-->
<!--*  *-->
<!--** *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--30. Write a PHP program to print alphabet pattern 'R'.-->
<!--Expected Output:-->
<!---->
<!--****-->
<!--*   *-->
<!--*   *-->
<!--****-->
<!--* *-->
<!--*  *-->
<!--*   *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--31. Write a PHP program to print alphabet pattern 'S'.-->
<!--Expected Output:-->
<!---->
<!--****-->
<!--*-->
<!--*-->
<!--***-->
<!--*-->
<!--*-->
<!--****-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--32. Write a PHP program to print alphabet pattern 'T'.-->
<!--Expected Output:-->
<!---->
<!--*****-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--33. Write a PHP program to print alphabet pattern 'U'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--***-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--34. Write a PHP program to print alphabet pattern 'V'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--* *-->
<!--*-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--35. Write a PHP program to print alphabet pattern 'W'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--*   *-->
<!--* * *-->
<!--* * *-->
<!--* *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--36. Write a PHP program to print alphabet pattern 'X'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*   *-->
<!--* *-->
<!--*-->
<!--* *-->
<!--*   *-->
<!--*   *-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--37. Write a PHP program to print alphabet pattern 'Y'.-->
<!--Expected Output:-->
<!---->
<!--*   *-->
<!--*   *-->
<!--* *-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!--38. Write a PHP program to print alphabet pattern 'Z'.-->
<!--Expected Output:-->
<!---->
<!--*******-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--*-->
<!--*******-->
<!--<br />-->
<?php
//
//?>
<!--<hr />-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->

</body>
</html>