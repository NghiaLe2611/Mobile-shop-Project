<div id="footer">
	<div class="contact">
		<p>Gọi miễn phí:&nbsp;<strong><i class="spr-icon phone"></i>1800 6001</strong></p>
		<p>Góp ý, phản ánh:&nbsp;<strong><i class="spr-icon phone"></i>1800 6616</strong></p>
	</div>
	<ul class="footer-menu">
		<li>
			<a href="javascript:void(0)" class="dropdown">Thông tin khác<i class="glyphicon glyphicon-menu-down"></i></a>
		</li>
		<li><a href="#">Cửa hàng FPT Shop<i class="glyphicon glyphicon-menu-right"></i></a>
		</li>
	</ul>
	<ul class="footer-dropdown">
		<?php
		$itemMenu = array(
			"tuyendung" => array("name" => "Tuyển dụng", "link" => "viec-lam"),
			"giaohang" => array("name" => "Chính sách giao hàng", "link" => "ho-tro/chinh-sach-giao-hang"),
			"doisanpham" => array("name" => "Chính sách đổi sản phẩm", "link" => "ho-tro/chinh-sach-giao-hang"),
			"baohanh" => array("name" => "Chính sách bảo hành", "link" => "ho-tro/chinh-sach-bao-hanh"),
			"tragop" => array("name" => "Chính sách trả góp", "link" => "ho-tro/chinh-sach-tra-gop"),
			"baohanhvang" => array("name" => "Chính sách bảo hành vàng", "link" => "ho-tro/chinh-sach-tra-gop")
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
</div>