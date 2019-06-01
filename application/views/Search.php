<?php 

?>

<html>
    <body>
        <center>
    <form action="search"  method="POST">
      <input style="border:2px solid #ff0000;border-radius:10px; padding: 5px;" value="<?php if(isset($_POST['ssearch'])){echo   $_POST['sword'];} ?>" type="text" name="sword"  placeholder="What are you looking for?">
     <!-- <button name="ssubmit" value="ssubmit" style="border-radius:10px;padding: 5px; color:#fff;background-color:#ff0000" type="submit" >
        <i class="fa fa-search"></i>
     </button>-->
     <input type="submit" name="ssearch" style="border-radius:10px;padding: 5px; color:#fff;background-color:#ff0000" value="Search"/>
</form>
</center>
<?php 
if(isset($_POST['ssearch'])){ 
    
    $sword=$_POST['sword'];

    $this->db->select('*');
    $this->db->from("products");
    $this->db->where(array('name'=>$sword));
  $query=  $this->db->get();
  $usr =$query->row();
    if($usr)
    echo $usr->name;
    else
    echo "no such product"; }
      ?>

</body>
</html>