Search by ID
<form method="POST">
    <input type="number" name="d_id">
    <input type="submit" name="submit_d_id">
    
</form>
<?php 
if(isset($_POST[d_id]))
{
    echo "dfdd";
    echo "<script>location.href='distributor_info.php?d_id=$_POST[d_id]';</script>";
}
?>


<table border="1" align="center">
    <thead>
    <tr bgcolor="#E6E6F0"><th>D ID</th><th>Name</th><th>Mobile</th><th>email</th><th>city</th></tr>
    </thead>



<?php
include "config.php";
$green_counter=0;
$red_counter=0;
$fg=mysql_query("SELECT * FROM `distributor` order by `d_id`;");
while($dd=mysql_fetch_assoc($fg))
{
    $a=" ";
    if($dd[id_status]==y)
    {
        
        $a="bgcolor='green'";
        $green_counter++;
    }
    else{ $red_counter++; 
    }
?>


    <tr><th <?php echo $a;?>><?php echo $dd[d_id];?></th><td><a href="distributor_info.php?d_id=<?php echo $dd[d_id];?>"><?php echo $dd[name];?></a></td><td><?php echo $dd[mobile];?></td><td><?php echo $dd[email];?></td><td><?php echo $dd[city];?></td></tr>

<?php
    
}
?>
</table>
<h3 align="center">Total Active ID <?php echo $green_counter;?></h3>
<h3 align="center">Total Inactive ID <?php echo $red_counter;?></h3>
<h3 align="center"> Total ID <?php echo $green_counter+$red_counter;?></h3>


