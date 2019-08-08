<?php
$sql = "SELECT * FROM product
        WHERE prd_featured = 1
        LIMIT 6";
$query = mysqli_query($conn, $sql);
?>
<!--	Feature Product	-->
<div class="products">
    <h3>Sản phẩm nổi bật</h3>
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
            echo '</div>';
            $i=0;
        }
    }
    ?>
</div>
<!--	End Feature Product	-->