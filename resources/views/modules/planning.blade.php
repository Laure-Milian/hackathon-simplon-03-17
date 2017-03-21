<div class="container-fluid">

	<div class="panel panel-default table-cours">
		<table class="table">
			<tr>
				<th>Jour</th>
				<th>Début</th>
				<th>Fin</th>
				<th>Formateur</th>
				<th>Salle</th>
			</tr>
		@foreach ($events as $event)
			<tr>
				<td>{{$event->laDate}}</td>
				<td>
					<?php
					$hour = $event->debut / 60;
					if (substr($hour, -2) == "25") {
					 	echo substr($hour, 0, 2) . "h15";
					}
					elseif (substr($hour, -1) == "5") {
						if (substr($hour, 1, 1) == ".") {
							echo substr($hour, 0, 1) . "h30";
						} else {
					 		echo substr($hour, 0, 2) . "h30";
						}
					}
					elseif (substr($hour, -2) == "75") {
					 	echo substr($hour, 0, 2) . "h45";
					}
					else {
						echo $hour . "h00";
					}
					?>
				</td>
				<td>
				<?php
					$end_hour = ($event->debut + $event->duree) / 60;
					if (substr($end_hour, -2) == "25") {
					 	echo substr($end_hour, 0, 2) . "h15";
					}
					elseif (substr($end_hour, -1) == "5") {
						if (substr($end_hour, 1, 1) == ".") {
							echo substr($end_hour, 0, 1) . "h30";
						} else {
					 		echo substr($end_hour, 0, 2) . "h30";
						}
					}
					elseif (substr($end_hour, -2) == "75") {
					 	echo substr($end_hour, 0, 2) . "h45";
					}
					else {
						echo $end_hour . "h00";
					}
				?>
				</td>
				<td>{{$event->Num_Prof[0]->nom}}</td>
				<td>{{$event->Num_Salle[0]->Nom}}</td>
			</tr>
		@endforeach
		</table>
</div>
</div>
