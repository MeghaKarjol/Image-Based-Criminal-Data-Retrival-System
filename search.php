<?php
include('lock.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
$q=$_POST['searchword'];
$sql_res=mysql_query("SELECT *
FROM criminal
WHERE (c_drivel LIKE  '%$q%') 
OR (c_adhar LIKE  '%$q%' ) 
OR (c_pan LIKE  '%$q%' )
OR (c_name LIKE  '%$q%')
OR (c_surname LIKE  '%$q%')
OR (c_father LIKE  '%$q%')
OR (c_cast LIKE  '%$q%')
OR (c_subcast LIKE  '%$q%')
OR (c_age LIKE  '%$q%')
OR (c_caseno LIKE  '%$q%')
OR (c_eleid LIKE  '%$q%')
OR (c_mob LIKE  '%$q%')
OR (c_crime LIKE  '%$q%')
OR (c_nickname LIKE  '%$q%')
OR (c_pstation LIKE  '%$q%')
");
	while($row=mysql_fetch_array($sql_res))
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
                                       
<?php } } ?>