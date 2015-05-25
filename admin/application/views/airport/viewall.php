<h2>Airports Table</h2>    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>AIRPORT CODE</th>
        <th>AIRPORT NAME</th>
		<th>LOCATION ID</th>
		<th>STATUS</th>
		
      </tr>
    </thead>
	
	<tbody>
	<?php foreach ($airports as $airport):?>
	<tr>
		<td><?php echo $airport['AIRPORT_CODE'];?></td>
        <td><?php echo $airport['AIRPORT_NAME'];?></td>
        <td><?php echo $airport['AIRPORT_LOCATION_ID'];?></td>
        <td><?php echo $airport['STATUS'];?></td>
        
	</tr>
      
	
	<?php endforeach ?>
    
    </tbody>
  </table>
