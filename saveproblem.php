<?php
error_reporting(0);
include("lock.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 $uid=$_POST['uid'];
 $fee=$_POST['fee'];
 $p_desc=$_POST['p_desc'];
 $regidate=time();
 
$sql="INSERT INTO problem (p_desc, p_date, p_flag, p_fee, u_id, ad_id) VALUES ('$p_desc', '$regidate', '1', '$fee', '$uid', '$ad_id')";
$ins=mysql_query($sql);
$problem_id= mysql_insert_id();
$icode="DB-PROB-".$problem_id;
if(!empty($_POST['fee'])) {
			$sqlaud=mysql_query("INSERT INTO audit (aud_credit, aud_flag, aud_date, i_code, ad_id) VALUES ('$fee', '1', '$regidate', '$icode', '$ad_id')");
		}


                     					$result = mysql_query("SELECT * FROM  problem WHERE u_id= $uid ORDER BY  p_id DESC ");
										$row = mysql_fetch_array($result);
                        							$p_descr=$row['p_desc'];
													$p_id=$row['p_id'] ;
													$p_date=date("d M Y g:ia",$row['p_date']);
													$p_fee=$row['p_fee'] ;
                      						?>
                           <div  class="panel-body profile-activity">
                                <!--  <h5 class="pull-right">12 August 2013</h5> -->
                                  <div class="activity terques">
                                      <span>
                                          <a href="recipt?key=<?php echo md5($p_id); ?>&outh=<?php echo $row['p_date'].$p_id; ?>"><i class="fa fa-clipboard"> </i></a>
                                      </span>
                                      <div class="activity-desk">
                                          <div class="panel">
                                              <div class="panel-body">
                                                  <div class="arrow"></div>
                                                  <i class=" fa fa-clock-o"></i>
                                                  <h4><?php echo $p_date; ?></h4>
                                                  <p><?php echo $p_descr; ?></p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
							 </div>
							<?php  } ?>	