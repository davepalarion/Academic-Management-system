<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>import</title>
</head>
<body>
   <style>
    h1{
        text-align: center;
    }
   </style> 

<h1>IMPORT EXCELL</h1>
<hr>
<br><br>


<form enctype="multipart/form-data" method="post">
<input type="file" name="upload" id="">
<input type="submit" value="upload" name="btnUpload" >

</form>
<?php

if(isset($_POST['btnUpload'])){
    echo "
    <br><h1>IMPORT EXCELL</h1>
    <br>
    <table border='1' width='60%'>
    

    <tr>
    <td>first_name</td> 
    <td>middle_name</td>
    <td>lastn_ames</td>
   
    
    </tr> ";

    $filename = $_FILES["upload"]["tmp_name"];
    if($_FILES["upload"] ["size"] > 0){
        $file = fopen($filename,"r");
        $row=1;
        while(($getData =fgetcsv($file,1000,",")) !== FALSE){
            if($row == 1){
                $row++;
                continue;
            }

            $fname = $getData[0];
            $lname = $getData[1];
            $mname = $getData[2];

            echo "
            <tr>
            <td>$fname</td>
            <td>$mname</td>
            <td>$lname</td>
            </tr>
            
            
            ";
        }

      
    }else{
        // echo"please input";
    }



    echo"   </table>";
}

?>

</body>
</html>