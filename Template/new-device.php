
<!--new laptop section-->

<?php
shuffle($product_load);
?>
<section id="new-device">
    <div class="container">
        <h4 class="font-rubik font-size-20"><i class="fas fa-star" style="color: yellow;"></i> New Devices</h4>
        <hr>
        <!--owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_load as $item) { ?>
                <div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?Pro_id=%s','product.php', $item['Pro_id']) ?>"><img src="<?php echo $item['Pro_img'] ?? "./assets/products/lenovo1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>
                                <?php echo $item['Pro_name'] ?? "Unknown";?>
                            </h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['Pro_price'] ?? '0'; ?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12"> Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php } //closing each function?>
        </div>
        <!-- end owl carousel-->
    </div>
</section>
<!--end new laptop section-->
