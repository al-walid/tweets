<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php

            $today = date("m.d.y");
            $pasday = ("05.29.19");

            echo "<p>$today</p>";
            if ($pasday == $today){
                echo "can you call walid";
            }else{
                echo "thanks for waiting";
            }
            // $names = ['Walid','Mohammed','Ali','Hassan','Alzubaidi'];
            //  print_r($names);
            // echo "</br>";
            // echo $names[0];

            $pepole = [
                ['name'=>'Walid', 'age'=>27, 'city'=>'Tokyo'],
                ['name'=>'Asim', 'age'=>28, 'city'=>'Makkah'],
                ['name'=>'Ahmmed', 'age'=>24, 'city'=>'Baha'],
                ['name'=>'Mohammed', 'age'=>30, 'city'=>'Jeddah'],
            ];
            echo "<pre>";
            print_r($pepole);
            echo "</pre>";

            echo "</br>";
            $timestamp = time(); 
            echo($timestamp); 
            echo "\n"; 
            echo(date("F d, Y h:i:s A", $timestamp));
            echo "</br>";
            echo "Your Collage in ".$pepole[1]['city']
        ?>
    </body>
</html>