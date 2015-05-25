<h2>Locations Table</h2>    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>LOCATION ID</th>
        <th>ADDRESS</th>
		<th>CITY</th>
		<th>COUNTRY</th>
		<th>LATITUDE</th>
		<th>LONGITUDE</th>
		
      </tr>
    </thead>
	
	<tbody>
	<?php foreach ($locations as $locs):?>
	<tr>
		<td><?php echo $locs['LOCATION_ID'];?></td>
        <td><?php echo $locs['ADDRESS'];?></td>
        <td><?php echo $locs['CITY'];?></td>
        <td><?php echo $locs['COUNTRY'];?></td>
        <td><?php echo $locs['LATITUDE'];?></td>
        <td><?php echo $locs['LONGITUDE'];?></td>
      
	</tr>
      
	
	<?php endforeach ?>
    
    </tbody>
  </table>
