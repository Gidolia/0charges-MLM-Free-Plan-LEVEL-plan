<?php
include "config.php";?>
                    <table id="datatable-buttons" class="table table-striped table-bordered" border="1">
                      <thead>
                        <tr>
                          <th>Request ID</th>
                          <th>IBO ID</th>
                          <th>Date/Time</th>
                          <th>Amount</th>
                          <th>Clear</th>
                          <th>Transtion ID </th>
                          
                        </tr>
                      </thead>


                      <tbody>
                          <?php 
							   
$qul="SELECT * FROM `request_payout_history`";
$queryl=mysql_query($qul);
while($fetchl=mysql_fetch_assoc($queryl))
{?>

                		      <tr>                                 
                                  <td><?php echo $fetchl[rph_id];?></td>
                                  <td><?php echo $fetchl[d_id];?></td>
								  <td><?php echo $fetchl[date]." ".$fetchl[time];?></td>
                                  <th><?php echo $fetchl[amount];?></th>
                                  <td><?php echo $fetchl[clear];?></td>
                                  <td><?php echo $fetchl[txn_id];?> </td>
                              </tr>                          
<?php }?>
               
			  </tbody>
			  
                      
                    </table>
    

?>