<tr>
	<th scope="row"><?= $hotel['name'] ?></th>
	<td><?= $hotel['description'] ?></td>
	<td><i class="bi <?= $hotel['parking'] ? 'bi-check-circle-fill text-success' : 'bi-x-circle-fill text-danger' ?>"></i></td>
	<td><?= $hotel['vote'] ?></td>
	<td><?= $hotel['distance_to_center'] ?></td>
</tr>