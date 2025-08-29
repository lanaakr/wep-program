<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$students=[
    [
    'stdNo'=>'20003',
'stdName' => 'Ahmed Ali', 'stdEmail'=>'ahmed@gmail.com', 'stdGAP' => 88.7
], [
'stdNo'=>'30304',
'stdName' => 'Mona Khalid', 'stdEmail'=>'mona@gmail.com', 'stdGAP' => 78.5
], [
'stdNo'=>'10002',
'stdName' => 'Bilal Hmaza', 'stdEmail'=>'bilal@gmail.com', 'stdGAP' => 98.7
], [
'stdNo'=>'10005',
'stdName' => 'Said Ali', 'stdEmail'=>'said@gmail.com', 'stdGAP' => 98.7
], [
'stdNo'=>'10007',
'stdName' => 'Mohammed ahmed', 'stdEmail'=>'mohamed@gmail.com', 'stdGAP' => 98.7
]
];

?>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Studentno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">GAP</th>
    </tr>
  </thead>
  <?php
  $index=1;
  foreach($students as $student){
?>
    <tr>
      <th scope="row"><?php echo $index++; ?></th>
      
      <td>
          <?php echo $student['stdNo']?>
      </td>
      <td>
          <?php echo $student['stdName']?>
      </td>
      <td>
      <?php echo $student['stdEmail']?>
      </td>
      <td>
      <?php echo $student['stdGAP']?>  
      </td>
      
    </tr>
  <?php } ?>
  
  </table>
  <?php echo "Total Student: " , count($students);?>

</body>

</html>