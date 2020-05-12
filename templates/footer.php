
		<footer class="footer">
			<div class="copyright"><p>Copyright &copy 2020</p></div>
			<div class="footermenu">
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="terms.html">Termes et conditions</a></li>
				</ul>
			</div>
			<div class="tags">
				<ul>
					<li>Bande annonce</li>
					<li>Nouvelles bandes annonces</li>
				</ul>
			</div>

		</footer>

	</div>
</body>
	<!-- Swiper JS -->
		<script src="js/swiper.min.js"></script>

		<!-- Initialize Swiper -->
		<script>
			$(document).ready(function(){


				var swiper = new Swiper('.homeslider > .swiper-container', {
					pagination: '.swiper-pagination',
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					effect:'fade',
					breakpoints: {
						320: {
							height:200
						},

						480: {
							height:300
						},

						768: {
							height:400
						},
						1024: {
							height:500
						}
					}
				});

				var recentswiper = new Swiper('.recentslider > .swiper-container', {
					nextButton: '.recent-next',
					prevButton: '.recent-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});

				var mostswiper = new Swiper('.mostslider > .swiper-container', {
					nextButton: '.most-next',
					prevButton: '.most-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});

				var topswiper = new Swiper('.topslider > .swiper-container', {
					nextButton: '.top-next',
					prevButton: '.top-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});

			});

			
		</script>
</html>