<?php get_header(); ?>
<main>
	<section id="404" class="section-404">
		<div class="container">
			<div class="about-content">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-12">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/404/404-one.svg' ?>" alt="404">
						<div class="text-uppercase text-center mt-4">
							<a class="btn-404" href="<?= site_url(); ?>">Back to Home</i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>
<?php get_footer(); ?>