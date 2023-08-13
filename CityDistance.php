<html>
<?php
         $page_title = 'Distance Between 2 Cities';
         include ('./includes/header.html');
?>

<body> 
    <form action = "CityDistance.php" method = "post">

         <br><br>
         <fieldset><legend> Select City To Check Distance </legend>
         <p><b>Current City : </b> </p>

            <?php 
                  // The current city is display in an array.
                  $currentCity = array (' ' => NULL, 1 => 'Kuala Lumpur','Johor Bahru','Kuantan','Kuala Terengganu','Arau');

                  //The current city is display using the pull-down menu.
                  echo '<select name = "currentCity">';
                  foreach ($currentCity as $key => $value ){
                         echo "<option value=\"$value\">$value</option>\n";
                  }
                         echo '</select>';
            ?>

         <p><b>Destination City: </b></p>
              
            <?php
                  //The destination city is display in an array.
                  $destinationCity = array (' ' => NULL, 1 => 'Kuala Lumpur','Johor Bahru','Kuantan','Kuala Terengganu','Arau');

                  //The destination city is display using the pull-down menu. 
                  echo '<select name="destinationCity">';
			      foreach ($destinationCity as $key => $value) {
				         echo "<option value=\"$value\">$value</option>\n";
			      }
			             echo '</select>';
		    ?>

         </p></fieldset>
         <br><br>
          <div align = "left">
		<input type="submit" style="font-size:15px; width:150px; margin: 0 auto;" name="submit" value="Check Distance" />
	     </div>
			
     </form>

</body> 
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

     // Validate Current City
     if (!empty($_POST['currentCity'])) {
          $currentCity  = $_POST['currentCity'];
     } 
     else {
          $currentCity  = NULL;
          echo'<p><b>PLEASE SELECT YOUR CURRENT CITY TO CHECK THE DISTANCE! </b></p>';
     }
    
     // Validate Destination City
     if (!empty($_POST['destinationCity'])) {
         $destinationCity  = $_POST['destinationCity'];
    } 
    else {
         $destinationCity = NULL;
         echo'<p><b>PLEASE SELECT YOUR DESTINATION CITY TO CHECK THE DISTANCE!!</b></p>';
    }


    //The distance between the two citites

    if ($currentCity && $destinationCity) {
        $distance = 0;

        switch ($currentCity) {

            case "Kuala Lumpur";
             switch ($destinationCity){

                case "Kuala Lumpur";
                $distance = 0;
                break;

                case "Johor Bahru";
                $distance = 335;
                break;

                case "Kuantan";
                $distance = 243;
                break;

                case "Kuala Terengganu";
                $distance = 449.8;
                break;

                case "Arau";
                $distance = 477.5;
                break;

                default;
	            echo'<p><b>INVALID INPUT. PLEASE PUT A CORRECT INPUT!</b></p>';
             }
             break;

            case "Johor Bahru";
             switch ($destinationCity){

                case "Kuala Lumpur";
                $distance = 335;
                break;

                case "Johor Bahru";
                $distance = 0;
                break;

                case "Kuantan";
                $distance = 357;
                break;

                case "Kuala Terengganu";
                $distance = 579;
                break;

                case "Arau";
                $distance = 831;
                break;

                default;
	            echo'<p><b>INVALID INPUT. PLEASE PUT A CORRECT INPUT!</b></p>';

             }
            break;

            case "Kuantan";
             switch ($destinationCity){

                case "Kuala Lumpur";
                $distance = 243;
                break;

                case "Johor Bahru";
                $distance = 357;
                break;

                case "Kuantan";
                $distance = 0;
                break;

                case "Kuala Terengganu";
                $distance = 222;
                break;

                case "Arau";
                $distance = 710;
                break;

                default;
	            echo'<p><b>INVALID INPUT. PLEASE PUT A CORRECT INPUT!</b></p>';

             }
            break;

            case "Kuala Terengganu";
             switch ($destinationCity){

                case "Kuala Lumpur";
                $distance = 449.8;
                break;

                case "Johor Bahru";
                $distance = 579;
                break;

                case "Kuantan";
                $distance = 222;
                break;

                case "Kuala Terengganu";
                $distance = 0;
                break;

                case "Arau";
                $distance = 648;
                break;

                default;
	            echo'<p><b>INVALID INPUT. PLEASE PUT A CORRECT INPUT!</b></p>';

             }
            break;

            case "Arau";
             switch ($destinationCity){

                case "Kuala Lumpur";
                $distance = 477.5;
                break;

                case "Johor Bahru";
                $distance = 831;
                break;

                case "Kuantan";
                $distance = 710;
                break;

                case "Kuala Terengganu";
                $distance = 648;
                break;

                case "Arau";
                $distance = 0;
                break;

                default;
	            echo'<p><b>INVALID INPUT. PLEASE PUT A CORRECT INPUT!</b></p>';

             }
            break;

            default;
                 echo'<p><b>INVALID INPUT. PLEASE PUT A CORRECT INPUT!</b></p>';
        }

        // If everything is fine, print the message. 
        //Print the detail of the distance between two cities.
         echo "<br />
         <p><h2>THE DISTANCE BETWEEN TWO CITIES</h2><br />
         </p>Below are the details:
         </p> 
         <br /><b>Current City         :</b>$currentCity
         <br /><b>Destination City     :</b>$destinationCity
         <br /><b>The Distance (in KM) :</b>$distance";
        
    } else {
     // if one of the form is not filled out properly. 
      echo '<p><font color="red">THERE ARE SOME ERROR ON YOUR DETAILS. PLEASE REFILL THE FORM PROPERLY !</font></p>';
     }
}
?> 

<?php
include ('./includes/footer.html');
?>

