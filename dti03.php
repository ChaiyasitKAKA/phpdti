<?php
  //function
  function sshowhell(){
    echo "<h1 style='color: red;'>Hello from function</h1> " . "<br>";
  }                          
  
sshowhell();
sshowhell();

//have parameter no return
function showfullname($fname, $lname){
    echo "Fullname: " . $fname . " " . $lname . "<br>";


    }

    showfullname("kaka","kkkk");
    showfullname("saurabh","kumar");

    //no parameter with return
    function returnmpara(){
        echo "This function has no parameter but return value" . "<br>";
        return 123456;
    }

    echo '<hr>';

    echo returnmpara();
    $data = returnmpara();
    echo  "<br>" . $data . "i luv tiktok";

    //have par has return
    function subnum ($sum1, $sum2){
        $sum = $sum1 + $sum2;
        return $sum;
    }

    echo " <br/><br/>100+200 = " . subnum(100,200);

    //arrow function
    $woo = fn() => "<br/>woo woo wo0o";

    echo $woo();    

    $hi1 = fn($nickname) => "hello" . $nickname . "<br/>";

    echo $hi1("saurabh");
?>