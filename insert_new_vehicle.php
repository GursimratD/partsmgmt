<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "fix_auto");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $In_Date =  $_REQUEST['In_Date'];
        $Out_Date = $_REQUEST['Out_Date'];
        $All_Parts_Here =  $_REQUEST['All_Parts_Here'];
        $Car_Name = $_REQUEST['Car_Name'];
        $Claim_Number = $_REQUEST['Claim_Number'];
        $Customer_Name =  $_REQUEST['Customer_Name'];
        
        $Insurance =  $_REQUEST['Insurance'];
        $License_Plate = $_REQUEST['License_Plate'];
        $VIN = $_REQUEST['VIN'];
        

        $sql = "INSERT INTO vehicle_details  VALUES ( '$License_Plate','$VIN','$Car_Name','$Customer_Name','$Insurance','$Claim_Number','$In_Date','$Out_Date','$All_Parts_Here')";



        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

         
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>