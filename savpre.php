<?php
include("lock.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 $uid=$_POST['uid'];
 $pid=$_POST['pid'];
 $medi=$_POST['medi'];
 $desc=$_POST['desc'];
 $dose=$_POST['dose'];
 $qty=$_POST['qty'];
 $regidate=time();  
 $sql="INSERT INTO pre_list (prel_medicine, prel_desc, prel_dosage, prel_qty, p_id, u_id, ad_id) VALUES ('$medi', '$desc', '$dose', '$qty', '$pid', '$uid', '$ad_id')";
$ins=mysql_query($sql);
$result = mysql_query("SELECT * FROM  pre_list WHERE u_id= $uid AND p_id=$pid AND ad_id=$ad_id ");
										while($row = mysql_fetch_array($result)){
                        							$prel_medicine=$row['prel_medicine'];
													$prel_desc=$row['prel_desc'] ;
													$prel_dosage=$row['prel_dosage'] ;
													$prel_qty=$row['prel_qty'] ;
													$prel_id=$row['prel_id'] ;
                      						?>
                               <tr>
                                  <td><?php echo $prel_id;?></td>
                                  <td><?php echo $prel_medicine;?> </td>
                                  <td class="hidden-phone"><?php echo $prel_desc;?></td>
                                  <td class=""><?php echo $prel_dosage;?></td>
                                  <td class=""><?php echo $prel_qty;?></td>
								 </tr>		
<?php } } ?>