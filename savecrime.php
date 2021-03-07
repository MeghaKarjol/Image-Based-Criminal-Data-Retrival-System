<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$c_pstation= $_POST['pstation'];
	$c_case= $_POST['case'];
	$c_section= $_POST['sections'];
	$c_name= $_POST['name'];
	$c_nick= $_POST['n_name'];
	$c_father= $_POST['f_name'];
	$c_surname= $_POST['s_name'];
	$c_age= $_POST['age'];
	$c_cast= $_POST['cast'];
	$c_subcast= $_POST['s_cast'];
	$c_adate= $_POST['adate'];
	$c_convection= $_POST['con'];
	$c_adhar= $_POST['adhar'];
	$c_pan= $_POST['pan'];
	$c_eid= $_POST['ele'];
	$c_dl= $_POST['dlc'];
	$c_mobile= $_POST['contact'];
	$c_crime= $_POST['crimet'];
	$tmp = $_FILES['img_file']['tmp_name'];
	
								  $imgData = base64_encode(file_get_contents($tmp));
                                 // Format the image SRC:  data:{mime};base64,{data};
                                $src ='data:;base64,'.$imgData;
	$qry= mysql_query("INSERT INTO criminal (c_pstation, c_caseno, c_section, c_name, c_nickname, c_father, c_surname, c_age, c_cast, c_subcast, c_arrdate, c_convection, c_adhar, c_pan, c_eleid, c_drivel, c_mob, c_crime, c_img, c_flag, ad_id)VALUES ('$c_pstation', '$c_case', '$c_section', '$c_name', '$c_nick', '$c_father', '$c_surname', '$c_age', '$c_cast', '$c_subcast', '$c_adate', '$c_convection', '$c_adhar', '$c_pan', '$c_eid', '$c_dl', '$c_mobile', '$c_crime', ' $imgData', '1', '$ad_id')");
	
	if($qry == true)
	{
		header("location:addcrime.php");
	}
	else
	{
		echo "not".mysql_error();
	}
}
else
	{
		echo "invalid data";
	}
?>
