    <?php
    // Q6) Demonstrate 1d and 2d array in PHP. Also, demonstrate any 5 string functions in PHP.

    // 1D array in php
    $cities = array("Dehradun" , "Delhi" , "Uttarpradesh" , "Himanchal Pradesh");
    echo "The name of all the cities present in the array : ";
    foreach ($cities as $city) {
        echo $city . " ";
    }

    echo"\n\n";

    // 2D array in php
    $result  = array(

        array("Ankit" ,"Himanshu" , "Rohan"),
        array(86 , 88 , 98)
    );

    echo "The name and marks of all the students are : "."\n";
    for($i=0;$i<count($result);$i++)
    {
        for($j=0;$j<count($result[$i]);$j++)
        {
            echo $result[$i][$j] . " ";
        }
        echo "\n";
    }

    echo "\n\nInformation about the 2D array : \n";
    print_r($result);
    //  display all the information about the array 



    echo "\n\n";
    // 5 string functio in php
    $str = "This is a string in php"."\n";
    echo "Length of string is : ".strlen($str)."\n";
    echo "N.o of words in the string is : " .str_word_count($str)."\n";
    echo "Position of php in the string is : ".strpos($str,"php")."\n";
    echo "After replacing the php with PHP string is  : ".str_replace("php","PHP",$str)."\n";
    echo "subsrting from 5 to 9 is : ".substr($str,5,9)."\n";


    ?>