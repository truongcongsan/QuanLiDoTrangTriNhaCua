</div>
<div class="footer">
	<div class="wrapper">
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<h4>Thông tin</h4>
				<ul>
					<li><a href="#">Về chúng tôi</a></li>
					<li><a href="#">Dịch vụ</a></li>
					<li><a href="#">Tìm dịch vụ</a></li>

					<li><a href="#">Liên hệ</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>Tại sao bạn chọn chúng tôi</h4>
				<ul>
					<li><a href="#">Về chúng tôi</a></li>
					<li><a href="#">Dịch vụ</a></li>
					<li><a href="#">Tìm dịch vụ</a></li>
					<li><a href="#">Chính sách</a></li>

				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>Giỏ hàng của tôi</h4>
				<ul>
					<li><a href="contact.html">Đăng nhập</a></li>
					<li><a href="index.html">Xem giỏ hàng</a></li>
					<li><a href="#">Sản phẩm yêu thích</a></li>
					<li><a href="faq.html">Giúp đỡ</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>Liên hệ</h4>
				<ul>
					<li><span>0968323331</span></li>
					<li><span>0968323331</span></li>
				</ul>
				<div class="social-icons">
					<h4>Thêm dõi chúng tôi</h4>
					<ul>
						<li class="facebook"><a href="#" target="_blank"> </a></li>
						<li class="twitter"><a href="#" target="_blank"> </a></li>
						<li class="googleplus"><a href="#" target="_blank"> </a></li>
						<li class="contact"><a href="#" target="_blank"> </a></li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>
		<div class="copy_right">
			<p>Trịnh Nam Trường - Tin12a1 - 18103100003</p>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		
		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(function() {
		SyntaxHighlighter.all();
	});
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider) {
				$('body').removeClass('loading');
			}
		});
	});
</script>
</body>

</html>