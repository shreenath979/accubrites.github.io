<?php
	include("inc/header.php");
	include("inc/slider.php");
?>

<section style="background: #4c4d4f; color: #fff;">
	<div class="block12">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6 no-gape">
					<div class="service-box">
						<img src="https://www.hotelandtravelsolutions.co.uk/media/images/uploaded/banners/2/business-accommodation.6.png"> <br>
						<h5>CoronaVirus Cleaning </h5>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6 no-gape">
					<div class="service-box">
						<img src="https://www.hotelandtravelsolutions.co.uk/media/images/uploaded/banners/2/business-accommodation.6.png"> <br>
						<h5>Commercial Cleaning</h5>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6 no-gape">
					<div class="service-box">
						<img src="https://www.hotelandtravelsolutions.co.uk/media/images/uploaded/banners/2/business-accommodation.6.png"> <br>
						<h5>Office Cleaning</h5>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6 no-gape">
					<div class="service-box">
						<img src="https://www.hotelandtravelsolutions.co.uk/media/images/uploaded/banners/2/business-accommodation.6.png"> <br>
						<h5>Retail Cleaning</h5>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6 no-gape">
					<div class="service-box">
						<img src="https://www.hotelandtravelsolutions.co.uk/media/images/uploaded/banners/2/business-accommodation.6.png"> <br>
						<h5>Overnight Cleaning</h5>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6 no-gape">
					<div class="service-box">
						<img src="https://www.hotelandtravelsolutions.co.uk/media/images/uploaded/banners/2/business-accommodation.6.png"> <br>
						<h5>Post Renovation Cleaning</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

		<section >
			<div class="block12">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading">
								<h2>How it works</h2>
							</div>
							<!-- Heading -->
							<div class="cat-sec">
								<div class="row no-gape">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="#" title="">
												<img src="<?=THEME_PATH?>images/img02.png" alt="" />
												<h4><strong>Book</strong></h4>
												<p>Book online or by phone, our reservation system is quick and simple.</p>
											</a>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="#" title="">
												<img src="<?=THEME_PATH?>images/img03.png" alt="" />
												<h4>Relax</h4>
												<p>Life can get busy. Go to work, go on vacation, see a movie, leave the cleaning to us!</p>
											</a>
										</div>
									</div>									
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="#" title="">
												<img src="<?=THEME_PATH?>images/img04.png" alt="" />
												<h4>Come home to a clean house</h4>
												<p>Walk in to a fresh smelling, sparkling clean house. it's agreat feeling.</p>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</section>

		<!--Mobile app Section -->
		<section class="pagebg">
			<div class="container app-teaser">
				<div class="row">
					<div class="heading">
						<h2>About The Window Cleaning Specialists, LLC</h2>
					</div>					
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="whybg">
						    <img src="<?=THEME_PATH?>images/file.png" alt="" />
							<h3>Professional and Trusted Cleaners</h3>
							<ul>
								<li><i class="fa fa-check" aria-hidden="true"></i> Interviewed in person</li>
	                            <li><i class="fa fa-check" aria-hidden="true"></i> Professional & well trained,</li> 
	                            <li><i class="fa fa-check" aria-hidden="true"></i> English speaking,</li>
	                            <li><i class="fa fa-check" aria-hidden="true"></i> Insured</li>
	                            <li><i class="fa fa-check" aria-hidden="true"></i> Background & reference checked</li>
	                        </ul> 
					    </div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="whybg">
						    <img src="<?=THEME_PATH?>images/gold-medal.png" alt="" />
							<h3>Affordable Maid Service</h3>
							<p>The Window Cleaning Specialists, LLC is an affordable Carpet Cleaning, Home Cleaning , Office Cleaning , Apartment Cleaning , Post Construction Cleanup , Tile & Grout Cleaning, Upholstery Cleaning & More</p>
					    </div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="whybg">
						    <img src="<?=THEME_PATH?>images/customer-service.png" alt="" />
							<h3>Reliable Customer Service</h3>
							<p>Our customer service team is ready to help you with any inquiries you have during office hours, Monday-Friday  Open 24 hours.</p>
					    </div>
					</div>
				</div>
			</div>
		</section>
		<section class="pagebg1">
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading light" style="margin-bottom: 30px;">
								<h2 style="color: #323232;">What our customers say</h2>
								<span style="color: #323232;">Captured from the best ones.</span>
							</div>
							<!-- Heading -->
							<div class="reviews-sec" id="reviews-carousel">
								<?php
									foreach($testimonials as $testimonial_list)
									{
								?>
								<div class="col-lg-6">
									<div class="reviews">
										<img src="<?=base_url('uploads/'.$testimonial_list->authorpic)?>" onerror="this.src='<?=base_url('assets/img/noimage.png')?>'" alt=""/>
										<h3><?=$testimonial_list->author_name?> </h3>
										<p><?=$testimonial_list->details?>. </p>
									</div>
									<!-- Reviews -->
								</div>
								<?php		
									}
								?>
								
								

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

<section >
<div class="block12">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="cat-sec">
					<div class="row no-gape">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="why_choose_us">
								<h4>Frequently Asked Questions</h4>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="why_choose_us">
								<h4>Why Choose Us?</h4>
								<ul class="why_choose_us_list">
									<li>Always have a personal point of contact</li>
									<li>Full on-site service management.</li>
									<li>Bespoke service suited to your requirements.</li>
									<li>Ethical employers.</li>
									<li>Over 10 years of satisfied customers.</li>
									<li>Nationally accredited Quality Management (ISO 9001) &amp; Environmental Quality Systems (ISO 14001).</li>
									<li>National coverage.</li>
								</ul>
							</div>
						</div>									
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php 

include("inc/footer.php");

?>
<script language="javascript">
	function submit_this()
	{
		$("#plan_book").click()
	}
	function submit_this1()
	{
		$("#plan_book1").click()
	}
</script>