<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insulin Calculator</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css\index.css">
    <link rel="stylesheet" href="../css/calculators.css">
    <link href="https://fonts.googleapis.com/css?family=Signika:400" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <!-- <div class="container"> -->
        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">	
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       
        
        
        </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home<span class="caret"></span></a></li>

          <!--LINK ONE-->
           <li class="dropdown">
              <a href="diabetes\signs-and-symptoms.html"  role="button" aria-haspopup="true" aria-expanded="false">Diabetes <span class="sr-only">(current)</span</a>
              <ul class="dropdown-menu">
               <li><a href="../diabetes/signs-and-symptoms.html">Signs/Symptoms</a></li>
                <li><a href="../diabetes/treatment.html">Treatment/Medications</a></li>
              </ul>
            </li>

           <!--LINK TWO-->
           <li class="dropdown">
            <a href="#" role="button" aria-haspopup="true" aria-expanded="false">Living with Diabetes <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../living-with-diabetes/type1.html">Type 1</a></li>
                <li><a href="../living-with-diabetes/type2.html">Type 2</a></li>
                <li><a href="../living-with-diabetes/gestational.html">Gestational Diabetes</a></li>
                <li><a href="../living-with-diabetes/prediabetes.html">Prediabetes</a></li>
              
              </ul>

            </li>
            <li class="dropdown">
             <a href="#"  role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../account/signup.php">Sign UP</a></li>
                <li><a href="../account/login.php">Log in</a></li>
                <li><a href="../account/logout.php">Log Out</a></li>
              </ul>
            </li>

            

            <!-- LINK FOUR -->
            <li class="dropdown">
              <a href="#"  role="button" aria-haspopup="true" aria-expanded="false">Healthy Living <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../healthy-living/diet.php">Diet and Nutrition</a></li>
                  <li><a href="../healthy-living/physical.php">Physical Activity</a></li>
                </ul>
            </li>


            <!--LINK FIVE-->
            <li class="dropdown">
              <a href="#"  role="button" aria-haspopup="true" aria-expanded="false">Calculators <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="bmi.php">BMI Calculator</a></li>
                <li><a href="calorie_calc.php">Calorie Calculator</a></li>
                <li><a href="insulin_calculator.php">Insulin Calculator</a></li>
              </ul>
            </li>

            

        </ul>
        
   </nav>

    <div class="calculator">
        <h2>Insulin Calculator</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $blood_sugar_level = $_POST["blood_sugar_level"];
            $carbohydrates = $_POST["carbohydrates"];
            
            // Your insulin calculation logic here
            // This is just a simple example
            $insulin_dose = ($blood_sugar_level - 100) / 50 + ($carbohydrates / 10);
            
            echo "<p>Based on your input, you need " . round($insulin_dose, 2) . " units of insulin.</p>";
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="blood_sugar_level">Blood Sugar Level (mg/dL):</label>
            <input type="number" name="blood_sugar_level" id="blood_sugar_level" required>
            <label for="carbohydrates">Carbohydrates (grams):</label>
            <input type="number" name="carbohydrates" id="carbohydrates" required>
            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>
