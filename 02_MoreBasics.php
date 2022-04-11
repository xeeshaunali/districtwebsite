<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: green;
            margin: auto;
            padding-top: 23px;
        }

        h1 {
            text-align: center;
        }

        
    </style>
</head>
<body>

    <div class="container">
        <h1> Lets Learn about PHP</h1>
        This is a container
        <br>
        
        <?php 
        $age = 7;
            if($age>18){
                echo 'You can goto party';
            }
            else if($age==7){
                echo 'You are seven years old';
            }

            else {
                echo 'You can not go to party';
            }

            //Loops in Array

            echo '<br>';

            $languages = array('Python', 'c++', 'php', 'NodeJS');
            // echo $languages[0];
            // echo '<br>';
            // echo count($languages);
            // echo '<br>';
            // echo $languages[0];
            $a = 0;
            while ($a <= 10){
                 echo '<br> The value of A: ';
                echo $a;
                $a++;                
            }

            echo '<br>';

            $a = 0;
            while ($a < count($languages)){
                 echo '<br> The value of languages: ';
                echo $languages[$a];
                $a++;                
            }


            echo '<br>';

            $a = 9;
            do {
                echo '<br> The value of A: ';
               echo $a;
               $a++;                
           } while ($a <= 10);

           //FOR LOOPS IN PHP
           echo '<br>';
           //syntex

           for ($a=0; $a<10; $a++){
               //code
           }


           echo '<br>';

           function print_number($number){
               echo '<br> Your number is: ';
               echo $number;               
           }

           print_number(45);
           print_number(46);
           print_number(47);
           print_number(48);


           echo '<br>';

           $str = 'This';
           echo 'This is lenght of string: ';
           $strlen = strlen($str);
           echo $strlen;

           
        
        ?>
    </div>
    
</body>
</html>