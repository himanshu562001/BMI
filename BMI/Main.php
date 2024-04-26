<!DOCTYPE HTML>
<html>
    <head>
        <title>
            BMI Calculator
        </title>
    </head>
    <body>
        <div id="main">
            <form method="post">
                <h1>BMI Calculator</h1>
                <label>Enter the height:</label><br>
                <input type="number" name="height"/><br>
                <select name="unit1">
                    <option>feet</option>
                    <option>centimeter</option>
                </select><br/>
                <label>Enter the Weight:</label><br>
                <input type="number" name="weight"/><br>
                <select name="unit2">
                    <option>kg</option>
                    <option>pound</option>
                </select><br/>
                <label>Male</label>
                <input type="checkbox" name="Male" value="Male"/>
                <label>Female</label>
                <input type="checkbox" name="Female" value="Female"/><br>
              
                
                <input type="submit" name="Submit">
         </form>
         <?php
         error_reporting(0);
        // print_r($_POST);
         if(isset ($_POST['Submit'])){ 
             if(isset($_POST['height']) && isset( $_POST['weight']) )  

             {
                
                $height= $_POST['height'];
                $weight= $_POST['weight'];
                $unit1= $_POST['unit1'];
                $unit2= $_POST['unit2'];

              

  
                if($unit1=="feet"){
                    $height= $height*0.3048;
                    
                }
                
                 if($unit1== "centimeter"){

                    $height= $height*0.01;
                
             }
             
            /* if($unit2== "kg"){

                $weight= $kg;
            }*/
               
                if($unit2== "pound"){

                    $weight= $weight*0.453;
                }
       

                    $result= $weight/($height*$height);
                   


                    echo "BMI". "<br/>". number_format($result,0);

                    if($result<=18){
                        echo "<br/>".'Underweight';

                    }
                     if($result>=19 || $result<=24){
                        echo "<br/>"."Normal";

                    }

                   if($result>=25 || $result<=29){
                        echo "<br/>"."Overweight";

                    }
                               
                   
                }

             }
            


         
       
         ?>
        </div>

    </body>
</html>
