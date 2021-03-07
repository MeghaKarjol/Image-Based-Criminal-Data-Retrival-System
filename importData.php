<?php
//load the database configuration file
include 'lock.php';

if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    $csvMimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same email
                $prevQuery = "SELECT c_id FROM criminal WHERE c_caseno = '".$line[1]."'";
                $prevResult = mysql_query($prevQuery);
                if(mysql_num_rows($prevResult) > 0){
                    mysql_query("UPDATE criminal SET c_pstation = '".$line[0]."', c_section = '".$line[2]."', c_name = '".$line[3]."', c_nickname = '".$line[4]."', c_father = '".$line[5]."', c_surname = '".$line[6]."', c_age = '".$line[7]."', c_cast = '".$line[8]."', c_subcast = '".$line[9]."', c_arrdate = '".$line[10]."', c_convection = '".$line[11]."', c_adhar = '".$line[12]."', c_pan = '".$line[13]."', c_eleid = '".$line[14]."', c_drivel = '".$line[15]."', c_mob = '".$line[16]."', c_crime = '".$line[17]."' WHERE c_caseno = '".$line[1]."'");
                }else{
                    //insert member data into database
                    $qry= mysql_query("INSERT INTO criminal (c_pstation, c_caseno, c_section, c_name, c_nickname, c_father, c_surname, c_age, c_cast, c_subcast, c_arrdate, c_convection, c_adhar, c_pan, c_eleid, c_drivel, c_mob, c_crime, c_img, c_flag, ad_id) 
	VALUES ('$line[0]', '$line[1]', '$line[2]', '$line[3]', '$line[4]', '$line[5]', '$line[6]', '$line[7]', '$line[8]', '$line[9]', '$line[10]', '$line[11]', '$line[12]', '$line[13]', '$line[14]', '$line[15]', '$line[16]', '$line[17]', 'demo.jpg', '$line[18]', '$line[19]');");
                }
            }
            
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
header("Location: upload.php".$qstring);