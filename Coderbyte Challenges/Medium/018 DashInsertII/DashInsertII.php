<?php
/*
 *
Developer: Mirza S. Baig

Date: 5-15-2014

Description:    Using the PHP language, have the function DashInsertII(num) insert
                dashes ('-') between each two odd numbers and insert asterisks ('*')
                between each two even numbers in num. For example: if num is 4546793
                the output should be 454*67-9-3. Don't count zero as a negative or
                positive number.

*/

//Create and store all test vectors in an array.
$vectors = array(4546793, 99946, 56647304);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . DashInsertII($vector). PHP_EOL;
}

function DashInsertII($num) {

    //Split the input into an array.
    $arr = str_split($num);

    //Create a for loop...
    for ($i = 0; $i < count($arr); $i++) {
        //Check to see if a number is odd.
        if ($arr[$i] % 2 !== 0) {
            //Account for the first value (otherwise an array exception would occur).
            if ($i !== 0) {
                //Check to see if the previous digit was odd.
                if ($arr[$i-1] % 2 !== 0){
                    if ($arr[$i-1] !== 0) {
                        $arr[$i] = "-".$arr[$i];
                    }
                }
            }

        }
        //If the number is even...
        else {
           //Account for the first value ...
            if ($i !== 0) {
                //Check to see if the previous digit was even.
                if ($arr[$i-1] % 2 == 0) {
                    if ($arr[$i-1] !== "0") {
                        $arr[$i] = "*".$arr[$i];
                    }
                }
            }
        }
    }

    //Concatenate all elements in the array to form a final string.
    $num = implode("", $arr);

    //Return the final value
    return $num;
}

?>