<?php
$sql = "SELECT * FROM category";
$query = mysqli_query($conn, $sql);
?>
<div id="menu" class="collapse navbar-collapse">
    <ul>
<?php
while($row = mysqli_fetch_array($query)){
?>
        <li class="menu-item"><a href="?page_layout=category"><?php echo $row['cat_name']; ?></a></li>
<?php } ?>
    </ul>
</div>