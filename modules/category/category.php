<?php
$sql = "SELECT * FROM product
        INNER JOIN category
        ON product.cat_id = category.cat_id
        WHERE category.cat_id = 1
        LIMIT 9";
$query = mysqli_query($conn, $sql);
?>
<!--	List Product	-->
<div class="products">
    <h3>iPhone (hiện có 186 sản phẩm)</h3>
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
