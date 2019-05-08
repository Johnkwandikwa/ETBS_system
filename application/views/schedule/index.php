
<div class="container">
<form method="post" action="<?php echo base_url()?>Schedule/form_validation">
<?php  
if($this->uri->segment(2)=="inserted"){
  echo'<p class="text-success"> Schdeule added</p>';
}

if($this->uri->segment(2)=="updated"){
  echo '<p class="text-success">Schedule updated</p>';
}
?>

<?php
if(isset($user_data)){
  foreach($user_data->result()as $row)
  {
    ?>


<div class="form-group">
    <label> Id </label>
    <input type="text" class="form-control" placeholder="Id" name="Id" value=" <?php echo $row->Id; ?>"/>
    <span class="text-danger"><?php echo form_error("Id"); ?> </span>
    </div>

    <div class="form-group">
    <label> From </label>
    <input type="text" class="form-control" placeholder="From" name="from_dest" value="<?php echo $row->from_dest; ?>">
    <span class="text-danger"><?php echo form_error("from_dest"); ?> </span>
    </div>

    <div class="form-group">
    <label> To  </label>
    <input type="text" class="form-control" placeholder="To" name="to_dest" value="<?php echo $row->to_dest; ?>">
    <span class="text-danger"><?php echo form_error("to_dest"); ?> </span>
    </div>


    <div class="form-group">
    <label> Time </label>
    <input type="text" class="form-control" placeholder="Time" name="time" value="<?php echo $row->time; ?>">
    <span class="text-danger"><?php echo form_error("time"); ?> </span>
    </div>


    <div class="form-group">
    <label> Date </label>
    <input type="text" class="form-control" placeholder="Date" name="date" value="<?php echo $row->date; ?>">
    <span class="text-danger"><?php echo form_error("date"); ?> </span>
    </div>

    <div class="form-group">
    <label> Bus ID</label>
    <input type="text" class="form-control" placeholder="Bus ID" name="busID" value="<?php echo $row->busID; ?>">
    <span class="text-danger"><?php echo form_error("busID"); ?> </span>
    </div>


    <div class="form-group">
    <label> Number of seats</label>
    <input type="text" class="form-control" placeholder="Number of seats" name="numberofseats" value="<?php echo $row->numberofseats; ?>">
    <span class="text-danger"><?php echo form_error("numberofseats"); ?> </span>
    </div>

    <div class ="form-goup">
      <input type="hidden" name="hidden_Id" value ="<?php echo $row->Id; ?>" />
    <input type="submit" name="update" value="update"  class="btn btn-info"/>
    </div>
  </form>
    <?php 
  }

  } 
  else
   {
     ?>

<div class="form-group">
    <label> Id </label>
    <input type="text" class="form-control" placeholder="Id" name="Id" />
    <span class="text-danger"><?php echo form_error("Id"); ?> </span>
    </div>

    <div class="form-group">
    <label> From </label>
    <input type="text" class="form-control" placeholder="From" name="from_dest" />
    <span class="text-danger"><?php echo form_error("from_dest"); ?> </span>
    </div>

    <div class="form-group">
    <label> To  </label>
    <input type="text" class="form-control" placeholder="To" name="to_dest"/>
    <span class="text-danger"><?php echo form_error("to_dest"); ?> </span>
    </div>


    <div class="form-group">
    <label> Time </label>
    <input type="text" class="form-control" placeholder="Time" name="time" />
    <span class="text-danger"><?php echo form_error("time"); ?> </span>
    </div>


    <div class="form-group">
    <label> Date </label>
    <input type="date" class="form-control" placeholder="Date" name="date" />
    <span class="text-danger"><?php echo form_error("date"); ?> </span>
    </div>

    <div class="form-group">
    <label> Bus ID</label>
    <input type="text" class="form-control" placeholder="Bus ID" name="busID" />
    <span class="text-danger"><?php echo form_error("busID"); ?> </span>
    </div>


    <div class="form-group">
    <label> Number if seats</label>
    <input type="text" class="form-control" placeholder="Number of seats" name="numberofseats"/>
    <span class="text-danger"><?php echo form_error("numberofseats"); ?> </span>
    </div>

    <div class ="form-goup">
    <input type="submit" name="insert" value="insert"  class="btn btn-info"/>
    </div>
    <?php 

  }

  
     ?>
  </form>


 <div class ="table-responsive">
<table class="table table-bordered  table-responsive">
<thead>

<tr>
<td>ID </td>
<td>From</td>
<td>To</td>
<td>Time</td>
<td>Date</td>
<td>Bus ID</td>
<td>Number of Seats</td>



 </tr>



<?php 
if($fetch_data->num_rows()>0)
{
  foreach($fetch_data ->result() as $row)
  {
?>

<tr>
<td><?php echo $row->Id;?> </td>
<td><?php echo $row->from_dest; ?></td>
<td><?php echo $row ->to_dest;?></td>
<td><?php echo $row ->time;?></td>
<td><?php echo $row ->date;?></td>
<td><?php echo $row ->busID;?></td>
<td><?php echo $row ->numberofseats;?></td>
<td><a href ="<?php echo base_url(); ?>Schedule/delete_data" class="delete_data" Id="<?php echo $row->Id; ?>"> Delete</a></td>
<td><a href ="<?php echo base_url(); ?> Schedule/update_data/<?php echo $row->Id; ?>"> Edit </a></td>
</tr>
<?php
  }

 }


else
 {

  ?>

   <tr>

  <td colspan="4"> No schedule found </td>
  </tr>

  <?php
 }

  ?>
  </tbody>
  </table>
  </div>

  <script>
  $(document).ready(function(){
    $('.delete_data').click(function(){
      var id =$(this).attr("Id");
      if(confirm("Do you want to remove this?")){
        window.location="<?php echo base_url(); ?>Schedule/delete_data/" +Id;
      }
      else{
        return false;
      }
    });
  });
</script>
