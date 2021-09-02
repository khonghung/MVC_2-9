<table class="table">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
     
    </tr>
  </thead>
  <tbody>
      <?php foreach ($students as $student): ?>
    <tr>
      <th><?php echo $student['id'] ?></th>
      <td><?php echo $student['name'] ?></td>
      <td><?php echo $student['email'] ?></td>
      <td><?php echo $student['address'] ?></td>
     
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>