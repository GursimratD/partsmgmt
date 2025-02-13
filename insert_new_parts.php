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
        $Qty =  $_REQUEST['Qty'];
        $Type = $_REQUEST['Type'];
        $Description =  $_REQUEST['Description'];
        $Part_Number = $_REQUEST['Part_Number'];

        $Vendor = $_REQUEST['Vendor'];
        $Status =  $_REQUEST['Status'];
        $Invoice_Number = $_REQUEST['Invoice_Number'];
        $Delivery_Date =  $_REQUEST['Delivery_Date'];
        $Delivery_Month=$_REQUEST['Delivery_Month'];
        $Comments = $_REQUEST['Comments'];
        $License_Plate = $_REQUEST['License_Plate'];
        $Est_Amt=$_REQUEST['Est_Amt'];
        $Vnd_Amt=$_REQUEST['Vnd_Amt'];
        

        $sql="INSERT INTO parts_details VALUES 
        (
            '$License_Plate','$Qty','$Type','$Description','$Part_Number','$Vendor','$Status','$Invoice_Number','$Delivery_Date','$Delivery_Month','$Comments','$Est_Amt','$Vnd_Amt'
        )

        ";



        
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