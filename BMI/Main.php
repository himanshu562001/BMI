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
                <input type="number" name="num"/><br>
                <select name="unit1">
                    <option>feet</option>
                    <option>centimeter</option>
                </select><br/>
                <label>Enter the Weight:</label><br>
                <input type="number" name="num2"/><br>
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
         print_r($_POST);
         if(isset ($_POST['Submit'])){ 
             if(isset($_POST['num']) && isset( $_POST['num2']) )  

             {
                
                $weight= $_POST['num'];
                $height= $_POST['num2'];
                $unit1= $_POST['unit1'];
                $unit2= $_POST['unit2'];

  
                if($unit1=="feet"){
                    $height= $height*0.3048;
                 
                }
                 if($unit1== "centimeter"){

                    $height= $height*0.01;
                
             }
             
             if($unit2== "kg"){

                $weight= $kg;
            }
               
                if($unit2== "pound"){

                    $weight= $weight*0.453;
                }
                    $result= $weight/($height*$height);

                    echo $result."<br/>";

                    echo "BMI". number_format($result,0);

                    if($result<=18){
                        echo 'underweight'."<br/>";

                    }
                    else if($result>=19 || $result<=24){
                        echo "Normal";

                    }
                    else if($result>= 25|| $result<= 29){

                        echo "Overweight"; 
                        

                    }
                    else{
                    echo "Enter weight and height";
                    }
                }

             }
            


         
       
         ?>
        </div>

    </body>
</html>