<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"type="text/css"href="styleshe.css">

<?php require 'array.php' ?>
<?php $_GET['p']="total";require 'header.php';?>
<?php foreach ($_POST as $name => $val){
    for ($i=0;$i<sizeof($phone);$i++){
      if ($phone[$i]['id']==$name){?>
           <div class="total">
               <table>
                   <tr>
                       <th>Image</th>
                       <th>Name</th>
                       <th id="pedi">No.</th>
                       <th>Price</th>
                   </tr>
                   <tr>
                       <td>
                           <img src="<?php echo $phone[$i] ['src'];?>"alt="<?php echo $phone[$i] ['name'];?>">
                       </td>
                       <td>
                           <h5><?php echo $phone[$i] ['name'];?>   </h5>
                       </td>
                       <td>
                           <h5 ><?php echo $val ;?>   </h5>
                       </td>
                       <td>
                           <p >$<span class="price"><?php echo $phone[$i] ['price'];?>.00</span></p>
                       </td>
                   </tr>

               </table>

           </div>
    <?php }
    }
}?>
<div class="total"> total price: $<span ><?php echo $_POST['total'];?></span></div></th>


<?php $_GET['p']="total"; require 'footer.php'?>
