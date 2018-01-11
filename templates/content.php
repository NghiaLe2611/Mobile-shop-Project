<div class="box-section mobile-wrapper">
    <h2 class="title">Điện thoại được quan tâm</h2>
    <ul class="mobile-pd-list">
            <?php
                require ("modules/connect.php");

                $sql = "SELECT * FROM dienthoaiquantam";

                $result = $mysqli->query($sql);
                $num = mysqli_num_rows($result); //Tổng item trong bảng

                if($num > 0){
                    while($row = $result->fetch_assoc()){         
                    $row['price'] = number_format($row['price'],0,",",".");
                ?>
                    <li class="mobile-pd">
                        <a href="dienthoai.php?id=<?php echo $row['id'] ?>">
                            <p class="pd-img"><img src="assets/images/dienthoai/<?php echo $row['image'] ?>" alt=""></p>
                            <h3 class="pd-name"><?php echo $row['name'] ?></h3>
                            <p class="pd-price"><?php echo $row['price'] ?>đ</p>
                        </a>  
                    </li>
                <?php
                        }
                    }
            ?>
    </ul>
</div>

<div class="box-section laptop-wrapper">
    <h2 class="title">Laptop được quan tâm</h2>
    <ul class="laptop-pd-list">
            <?php
                require ("modules/connect.php");

                $sql = "SELECT * FROM laptopquantam";

                $result = $mysqli->query($sql);
                $num = mysqli_num_rows($result); 

                if($num > 0){
                    while($row = $result->fetch_assoc()){         
                    $row['price'] = number_format($row['price'],0,",",".");
                ?>
                    <li class="laptop-pd">
                        <div class="pd-img">
                            <a href="laptop.php?id=<?php echo $row['id'] ?>">
                                <img src="assets/images/laptop/<?php echo $row['image'] ?>" alt="">
                            </a>  
                        </div>
                        <div class="pd-description">
                            <h3 class="pd-name"><?php echo $row['name'] ?></h3>
                            <p class="pd-price"><?php echo $row['price'] ?>đ</p>
                            <p><label>Màn hình:&nbsp;</label><?php echo $row['display'] ?></p>
                            <p><label>CPU:&nbsp;</label><?php echo $row['cpu'] ?></p>
                            <p><label>RAM:&nbsp;</label><?php echo $row['ram'] ?></p>
                            <p><label>VGA:&nbsp;</label><?php echo $row['vga'] ?></p>
                            <p><label>HĐH:&nbsp;</label><?php echo $row['os'] ?></p>
                            <p><label>Nặng:&nbsp;</label><?php echo $row['weight'] ?></p>
                        </div>
                    </li>
                <?php
                        }
                    }
            ?>
    </ul>
</div>