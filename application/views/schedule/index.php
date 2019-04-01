
<?php echo validation_errors(); ?>
<?php echo form_open('schedule/index');?>
<h5>Add schdeule</h2>



<form class="addschedule" method="post" action="Schedule_model.php">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="From" name="from_dest">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="To" name="to_dest">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder=" Time" name="time">
    </div>
    <div class="col">
      <input type="date" class="form-control" placeholder="date" name="date">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Bus ID" name='busID'>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Number of seats" name="numberofseats">
    </div>
    <div class="col">
    <button type="submit" class="btn btn-primary btn-block">Add Schedule</button>
    </div>
    
  

  
<?php echo form_close();?>



<!-- New form table with view  and other functions -->

<div class ="table">
<table class="table table-bordered  table-responsive">
<a href="<?php echo base_url('view/add'); ?> class ="btn btn-primary"> Add </a> 

<thead>

<tr>
<td>From</td>
<td>To</td>
<td>Time</td>
<td>Date</td>
<td>Bus ID</td>
<td>Number of Seats</td>


 </tr>


</thead>
<tbody>

<? php 
if($schedules){
  foreach($schedules as $schedule){

  

?>

<tr>
<td><?php echo $schedule->from_dest; ?></td>
<td><?php echo $schedule ->to_dest;?></td>
<td><?php echo $schedule ->time;?></td>
<td><?php echo $schedule ->date;?></td>
<td><?php echo $schedule ->busID;?></td>
<td><?php echo $schedule ->numberofseats;?></td>
<td><a href ="" class="btn btn-danger"> Edit</a>
<a href ="" class="btn btn-danger"> Delete</a>

</td>
</tr>
<? php
 }
}
?>

</tbody>
</table>


</div>




