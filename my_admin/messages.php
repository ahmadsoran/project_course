
<?php
if(isset($_GET['p']) && isset($_GET['id'])){
$id=$_GET['id'];
$sql = "DELETE FROM `contact` WHERE id='$id'";

$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
      header('Location:?p=messages');
} else {
    echo "Error";
}

}

?>

<div class="container">
    <table class="table">
    <thead>
        <th scope="col" >#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
    </thead>
   <tbody>
    <?php
    $sql = "SELECT * FROM `contact`";
    $selectpost = $db->prepare($sql);
      if($selectpost->execute()){
    
      for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
     
    echo '
    <tr>
    <td>'.$row->id.'</td>
    <td>'.$row->name.'</td>
    <td>'.$row->email.'</td>
    <td> <details> <p>'.$row->message.'</p> </details></td>
    <td><a href="?p=messages&id='.$row->id.'" class="deleteAction">Delete</a></td>
    </tr>';
    
    
      }
    }
    
    
    ?>
   </tbody>
    </table>
</div>
