<?php
$sql = "SELECT * FROM product
        WHERE prd_status = 1
        ORDER BY cat_id DESC
        LIMIT 6";
$query = mysqli_query($conn, $sql);
?>
<!--	Latest Product	-->
<div class="products">
    <h3>Sản phẩm mới</h3>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query)){
        if($i == 0) {
            echo'<div class="product-list card-deck">';
        }
    ?>
        <div class="product-item card text-center">
            <a href="#"><img src="admin/img/products/<?php echo $row['prd_image']; ?>"></a>
            <h4><a href="#"><?php echo $row['prd_name']; ?></a></h4>
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
<!--	End Latest Product	-->