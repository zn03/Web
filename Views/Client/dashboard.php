    <div class="body">
        <div class="row">
            <div class="col-lg-12 col-md-3">
                <div id="carouselExampleControls" class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://static.nhanam.com.vn/thumb/0x0/crop/Features/Images/2019/4/25/6HHNAJ7E.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://static.nhanam.com.vn/thumb/0x0/crop/Features/Images/2018/9/13/OJ4M48Q3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://static.nhanam.com.vn/thumb/0x0/crop/Features/Images/2018/9/13/3XSUDF44.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
                </div>
            </div>
        </div>
        <div class="title-wrapper">
            <h3>SÁCH NỔI BẬT</h3>
        </div>
        <div class=" wrapper">
            <div class="row">
                <?php
                    foreach ($arr['product_featured'] as $item) {
                ?>
                    <div class="col-3">
                        <div class="products">
                                <div class="product-item">
                                    <div class="product-top">
                                        <a class="product-thumb" href="?redirect=product_detail&id=<?= $item['product_id'] ?>">
                                            <img src="public/product_image/<?= $item['product_image'] ?>">
                                        </a>
                                        <a href="?redirect=product_detail&id=<?= $item['product_id'] ?>" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a class="product-name text-decoration-none text-dark" href="?redirect=product&id=<?= $item['product_id']?>"><?= $item['product_name']?> </a>
                                        <br>
                                        <a class="product-cat">Thể loại: <?= $item['category_id'] ?> </a>
                                        <div class="product-price"><p>Giá Bán: <span><?= number_format($item['product_price']); ?>đ</span></p></div>
                                    </div>
                                </div>                                                       
                        </div>
                    </div>
                <?php } ?>    
            </div>
        </div>

        <div class="title-wrapper">
            <h3>SÁCH MỚI - TÁI BẢN</h3>
        </div>
        <div class=" wrapper">
            <div class="row">
                <?php
                    foreach ($arr['new'] as $item) {
                ?>
                    <div class="col-3">
                        <div class="products">
                                <div class="product-item">
                                    <div class="product-top">
                                        <a class="product-thumb" href="?redirect=product_detail&id=<?= $item['product_id'] ?>">
                                            <img src="public/product_image/<?= $item['product_image'] ?>">
                                        </a>
        
                                    </div>
                                    <div class="product-info">
                                        <a class="product-name text-decoration-none text-dark" href="?redirect=product&id=<?= $item['product_id']?>"><?= $item['product_name']?> </a>
                                        <br>
                                        <a class="product-cat"  href="?redirect=product&id=<?= $item['product_id']?>"><?= $item['category_id'] ?> </a>
                                        <div class="product-price"><p>Giá Bán: <span><?= number_format($item['product_price']); ?>đ</span></p></div>
                                    </div>
                                </div>                                                       
                        </div>
                    </div>
                <?php } ?>    
            </div>
        </div>
    </div>