<?php 
include("lock.php");
 $cdate=strtotime("now");
 $sdate=$_POST['sdate'];
 $edate=$_POST['edate'];
 $sdate= strtotime($sdate);
 $edate= strtotime($edate); 
                     					$result = mysql_query("SELECT * FROM audit  
										WHERE ad_id= '".$ad_id."' 
										AND aud_date >='".$sdate."' AND aud_date <='".$edate."'
										AND aud_flag= 1
										ORDER BY  aud_id DESC 
										");
										$cnt=mysql_num_rows($result);
										if($cnt != Null){
										while($row = mysql_fetch_array($result))
                     						{
                        							$aud_debit=$row['aud_debit'] ;
													$aud_credit=$row['aud_credit'] ;
													$i_code=$row['i_code'] ;
													$v_code=$row['v_code'];
													$tcre +=$aud_credit;
													$tdeb +=$aud_debit;
													$aud_date=date("d-m-Y",$row['aud_date']);
                      						?>
                                      <tr>
                                          <td data-title="VOUCHER CODE"><?php echo ($v_code!= null ? "VHR-".$v_code : '--') ?></td>
                                            <td data-title="INVOICE CODE"><?php echo ($i_code!= null ? $i_code : '--') ?></td>
                                          <td class="numeric" data-title="CREDIT"><?php echo ($aud_credit!= null ? $aud_credit : '0') ?></td>
                                          <td class="numeric" data-title="DEBIT"><?php echo ($aud_debit!= null ? $aud_debit : '0') ?></td>
                                          <td class="numeric" data-title="Date"><?php echo $aud_date; ?></td>
                                      </tr>
                                      <?php }
									 echo" <td style='border-right-color: #f9f9f9'></td>
									 <td>Total Balance</td>
									 <td class='numeric' data-title='TOTAL CREDIT'><b>$tcre</b></td>
									  <td class='numeric' data-title='TOTAL DEBIT'><b>$tdeb</b></td> ";
									  }else{
											echo"<tr><td style='border-right-color: #f9f9f9'>
                                No data found
                            </td> 
							<td style='border-right-color: #f9f9f9'></td>
							<td style='border-right-color: #f9f9f9'></td>
							<td style='border-right-color: #f9f9f9'></td>
							<td style='border-right-color: #f9f9f9'></td>
							</tr>";	} ?>