<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>View book records</title>
    <link rel="stylesheet" href="./css/viewStyle.css">
   </head>
   <body>
     <h1>update Record Managament</h1>
     <form class="" action="updation.php" method="post">
       <table id="view_table" >
       <tr>
       <th class="c1" >Book id</th>
       <th class="c1" >Title</th>
       <th class="c1" >Price</th>
       <th class="c1" >Author</th>
       </tr>
       <?php for ($i=1; $i<=$num  ; $i++) {
         $row=mysqli_fetch_array($result);
        ?>
        <tr>
          <td class="d1"><?php echo $row['bookid']; ?> <input type="hidden" name="bookid<?php echo $i ?>" value="<?php echo $row['bookid']; ?>"> </td>
          <td class="d1"><input type="text" name="title<?php echo $i ?>" value="<?php echo $row['title']; ?>"> </td>
          <td class="d1"><input type="text" name="price<?php echo $i ?>" value="<?php echo $row['price']; ?>"> </td>
          <td class="d1"><input type="text" name="author<?php echo $i ?>" value="<?php echo $row['author']; ?>"> </td>
        </tr>
      <?php } ?>
     </table>
     <input type="submit"  value="Update">
     </form>
   </body>
   </html>
