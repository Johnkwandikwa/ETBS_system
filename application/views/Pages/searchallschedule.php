
<?php 
   $connect =mysqli_connect("localhost","root","","authentication");

   $sql="SELECT*
   schedule.from_dest, schedule.to_dest,schedule.date, class.name,class.price, buscompany.company
FROM schedule,class,buscompany
WHERE (buscompany.ID=class.number);

ORDER BY buscompany.ID";

$result=mysqli_query($connect,$sql);
$rowcount=mysqli_num_rows($result);


?>

   
   
  




<div class="col-sm-8 text-left">
    <h2> Search results </h2>


    
 <div class ="table-responsive">
<table class="table table-bordered table-striped table-hover">
<thead>

<tr>
<td>From </td>
<td>TO</td>
<td>Date</td>
<td>Company</td>
<td>class</td>
<td>Price</td>

 </tr>


    <?php 
if(mysqli_num_rows($result) >0){
  while ($row=mysqli_fetch_array($result))
  {

    ?>

<tr>
<td><?php echo $row["from_dest"];?> </td>
<td><?php echo $row["to_dest"]; ?></td>
<td><?php echo $row["date"];?></td>
<td><?php echo $row ["name"];?></td>
<td><?php echo $row ["price"];?></td>
  </tr>
  
  <?php
  }

}
?>


  </tbody>
  </table>
  </div>