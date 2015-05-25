<h2>Flight Schedule Table</h2>    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>FLIGHTS SCHEDULE ID</th>
        <th>FLIGHT ID</th>
		<th>FLIGHT TIME</th>
		<th>AIRPLANE CODE</th>
		
      </tr>
    </thead>
	
	<tbody>
	<?php foreach ($flightsschedule as $flightschedule):?>
	<tr>
		<td><?php echo $flightschedule['FLIGHTS_SCHEDULE_ID'];?></td>
        <td><?php echo $flightschedule['FLIGHT'];?></td>
        <td><?php echo $flightschedule['FLIGHT_TIME'];?></td>
        <td><?php echo $flightschedule['FLIGHT_PLANE'];?></td>
        
	</tr>
      
	
	<?php endforeach ?>
    
    </tbody>
  </table>
