<?php
//print all of the products
$cat_id = $_GET['cat_id'];
$cat_name = $_GET['cat_name'];
$sql = "SELECT * FROM product
        WHERE cat_id = $cat_id
        LIMIT 6";
$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);
?>
<!--	List Product	-->
<div class="products">
    <h3><?php echo $cat_name;?> (hiện có <?php echo $rows;?> sản phẩm)</h3>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query)){
        if($i == 0) {
            echo'<div class="product-list card-deck">';
        }
    ?>
        <div class="product-item card text-center">
            <a href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id'];?>"><img src="admin/img/products/<?php echo $row['prd_image']; ?>"></a>
            <h4><a href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id'];?>"><?php echo $row['prd_name']; ?></a></h4>
            <p>Giá Bán: <span><?php echo $row['prd_price']; ?></span></p>
        </div>
    <?php 
        $i++;
        if($i==3){
            $i=0;
    ?>
    </div>
    <?php
        }
    }
    if($i%3 != 0 ){
    ?>
    </div>
    <?php
    }
    ?>
</div>
<!--	End List Product	-->

<div id="pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
    </ul> 
</div>
