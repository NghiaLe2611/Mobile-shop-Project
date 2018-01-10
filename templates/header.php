<div id="side-nav">
	<div class="side-nav-header">
		<a href="index.php" class="spr-icon logo nav-logo"></a>
		<a href="javascript:void(0)" class="close-nav"></a>
	</div>
	<ul class="nav-menu">
		<?php
			$itemMenu = array(
				"index" => array("name" => "Trang chủ", "link" => "index.php"),
				"mobile" => array("name" => "Điện thoại", "link" => "dien-thoai.php"),
				"laptop" => array("name" => "Máy tính xách tay", "link" => "may-tinh.php"),
				"tablet" => array("name" => "Máy tính bảng", "link" => "may-tinh-bang.php"),
				"accessories" => array("name" => "Phụ kiện", "link" => "phu-kien.php"),
				"sale" => array("name" => "Khuyến mãi", "link" => "khuyen-mai.php"),
				"exchange" => array("name" => "Máy đổi trả", "link" => "may-doi-tra.php")
				);

			if(!empty($itemMenu)){
				foreach($itemMenu as $key => $value){
					$name = $value["name"];
					$link = $value["link"];

					echo "<li><a href=". $link . ">". $name . "</a></li>" ;
				}
			}
		?> 
	</ul>
	<div class="contact">
		<p><i class="spr-icon phone"></i>GỌI MUA HÀNG:&nbsp;<strong>1800 6001</strong></p>
		<p><i class="spr-icon phone"></i>GỌI KHIẾU NẠI:&nbsp;<strong>1800 6616</strong></p>
	</div>
</div>
<div id="header">
	<div class="top-header">
		<button class="spr-icon toggle-btn"></button>
		<a href="index.php" class="spr-icon logo"></a>
		<span class="call">
			Gọi miễn phí</br><strong>1800 6601</strong>
		</span>
		<button class="spr-icon cart-btn"></button>
	</div>
	<div class="top-search">
		<form action="" method="get" autocomplete="off" id="search-form">
			<input class="search-input" type="text" name="" placeholder="Bạn muốn mua gì ?" autocomplete="off">
			<button type="submit" class="spr-icon search-btn"></button>
		</form>
	</div>
</div>







