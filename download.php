<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <div class="row">
  <table>
  <thread>
  <th>FileName</th>
<th>Downloads</th>
  <th>Action</th>
  </thread>
  <tbody>
<?php foreach($files as $file): ?>

<tr>
<td><?php echo $file['name'];?></td>
<td><?php echo $file['downloads'];?></td>
<td>
	<a href="download.php?file_id=?php echo $file['id']?">Download </a>

</td>
</tr>
</tbody>

</table>
</div>
</body>
</html>