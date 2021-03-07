<?php
include("lock.php");
	$valid_formats = array("jpg", "png", "bmp","JPG");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
		$name = $_FILES['fl']['name'];
		$size = $_FILES['fl']['size'];
		$ext= explode(".", $name);
					if(in_array($ext[1],$valid_formats))
					{
					$tmp = $_FILES['fl']['tmp_name'];
								  $imgData = base64_encode(file_get_contents($tmp));
                                 // Format the image SRC:  data:{mime};base64,{data};
                                //$src = 'data:;base64,'.$imgData;
				$sqlsrh=mysql_query("SELECT *  FROM criminal WHERE c_img LIKE '%$imgData%'");
							while($row=mysql_fetch_array($sqlsrh))
				{
				$c_id=$row['c_id']; 
				$c_pstation=$row['c_pstation']; 
				$c_caseno=$row['c_caseno']; 
				$c_section=$row['c_section']; 
				$c_name=$row['c_name']; 
				$c_nickname=$row['c_nickname']; 
				$c_father=$row['c_father']; 
				$c_surname=$row['c_surname']; 
				$c_age=$row['c_age']; 
				$c_cast=$row['c_cast']; 
				$c_subcast=$row['c_subcast']; 
				$c_arrdate=$row['c_arrdate']; 
				$c_convection=$row['c_convection']; 
				$c_adhar=$row['c_adhar']; 
				$c_pan=$row['c_pan']; 
				$c_eleid=$row['c_eleid']; 
				$c_drivel=$row['c_drivel']; 
				$c_mob=$row['c_mob']; 
				$c_crime=$row['c_crime']; 
				$c_img=$row['c_img'];
				 $src1="data:;base64,".$c_img;
								?>
								 <div class="col-md-6 col-sm-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="media">
                              <a class="pull-left" href="#">
                                 <img style="" src="<?php echo $src1 ; ?>"  alt="" />
                              </a>
                              <div class="media-body">
                                  <h4><?php echo $c_name ;?> <?php echo $c_father ;?> <?php echo $c_surname ;?> <span class="text-muted small"> <br> Crime Type: <?php echo $c_crime ;?> Section: <?php echo $c_section ;?></span></h4>
                                  
                                  <address>
                                      <strong>police station: <?php echo $c_pstation ;?>, Case NO:<?php echo $c_caseno ;?>.</strong><br>
									  Age: <?php echo $c_age ;?><br>
									  Cast: <?php echo $c_cast ;?><br>
									 Sub Cast: <?php echo $c_subcast ;?><br>
                                      Adhar No: <?php echo $c_adhar ;?><br>
                                      Pan No: <?php echo $c_pan ;?> <br>
                                      <abbr title="Phone">Driving Licence No:</abbr>  <?php echo $c_drivel ;?>
                                  </address>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
<?php } } } ?>