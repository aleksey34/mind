<?php if(function_exists('carbon_get_the_post_meta')): ?>
	<section class="page-section statistics page-section__books">
		<div class="page-container">
			<div class="stat">

				<?php       $books_count = carbon_get_the_post_meta('crb_front_page_books_section_books_count');
				if(isset($books_count) && !empty($books_count)) :
					?>
					<div class="stat__item">
						<div class="stat__books"><?php echo $books_count;  ?></div>
						<div class="stat__text">выпущенных книг</div>
					</div>
				<?php  endif; ?>

				<?php $books_circulation = carbon_get_the_post_meta('crb_front_page_books_section_books_circulation');
				if(isset($books_circulation ) && !empty($books_circulation)) :
					?>
					<div class="stat__item">
						<div class="stat__books"><?php  echo $books_circulation; ?></div>
						<div class="stat__text">общим  тиражом</div>
					</div>
				<?php endif; ?>
				<?php $books_cities = carbon_get_the_post_meta('crb_front_page_books_section_books_cities');
				if(isset($books_cities) && !empty($books_cities)) :
					?>
					<div class="stat__item">
						<div class="stat__books"><?php echo $books_cities;  ?></div>
						<div class="stat__text">городов СНГ и зарубежья</div>
					</div>
				<?php  endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>