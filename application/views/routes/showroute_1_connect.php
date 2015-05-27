<h2>Flights Table</h2>    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>FLIGHT CODE</th>
        <th>SOURCE AIRPORT ID</th>
		<th>DESTINATION AIRPORT ID</th>
		
		<th>DEPARTURE TIME</th>
		<th>ARRIVAL TIME</th>
		<th>DISTANCE</th>
		
      </tr>
    </thead>
	
	<tbody>
	<?php foreach ($flights as $flight):?>
	<tr>
		<td><?php echo $flight['FLIGHT_CODE'];?></td>
        <td><?php echo $flight['SOURCE_AIRPORT_ID'];?></td>
        <td><?php echo $flight['DESTINATION_AIRPORT_ID'];?></td>
        
		<td><?php echo $flight['DEPART_TIME'];?></td>
        <td><?php echo $flight['ARRIVAL_TIME'];?></td>
        
		<td><?php echo $flight['DISTANCE'];?></td>
        
	</tr>
      
	
	<?php endforeach ?>
    
    </tbody>
  </table>
