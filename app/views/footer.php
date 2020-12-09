</div>
<div class="footer">
	<div class="wrapper">
		<div class="section group row">
			<div class="col-6">
				<h4>Thông tin</h4>
				<ul>
					<li><a href="#">Về chúng tôi</a></li>
					<li><a href="#">Dịch vụ</a></li>
					<li><a href="#"><span>Tìm dịch vụ</span></a></li>

					<li><a href="#"><span>Liên hệ</span></a></li>
				</ul>
			</div>
			<div class="col-6">
				<h4>Tại sao bạn chọn chúng tôi</h4>
				<ul>
					<li><a href="about.html">Về chúng tôi</a></li>
					<li><a href="faq.html">Dịch vụ</a></li>
					<li><a href="#">Tìm dịch vụ</a></li>
					<li><a href="contact.html"><span>Chính sách</span></a></li>

				</ul>
			</div>
			<div class="col-6">
				<h4>Giỏ hàng của tôi</h4>
				<ul>
					<li><a href="contact.html">Đăng nhập</a></li>
					<li><a href="index.html">Xem giỏ hàng</a></li>
					<li><a href="#">Sản phẩm yêu thích</a></li>
					<!-- <li><a href="#">Track My Order</a></li> -->
					<li><a href="faq.html">Giúp đỡ</a></li>
				</ul>
			</div>
			<div class="col-6">
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
			<p>coppy right @2019</p>
		</div>
	</div>
</div>

<div class="toTop"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAj0lEQVRIie2TQQqAIBBF/3QxjxNtoqNkm+qy/TYTWWipuIn8IMig7zkwAr8KSSEpKXeaFDiAEcCcKomCk7Q8sxSTeODlJDf45sCPvc2WeOC9I2gdSXonPrjWSZK6z5OE4HdBrCQ0ptQ1iMgUeoyIrAA6PRsf7cJ46pcOnLopMrYhwVOif3JuqqAKPiCoec0OShkJTpttr90AAAAASUVORK5CYII="></span></div>
<link href="<?php echo BASE_URL ?>/public/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="<?php echo BASE_URL ?>/public/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	let toTop = document.querySelector('.toTop');
	window.addEventListener('scroll', () => {
		if (window.pageYOffset > 200) {
			toTop.classList.add('active');
		} else {
			toTop.classList.remove('active');
		}
	});

	toTop.addEventListener('click', () => {
		window.scrollTo({
			top: 0,
			behavior: "smooth"
		})
	})

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