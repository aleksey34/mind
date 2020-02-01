<?php  if(!defined("ABSPATH")) exit; ?>
<?php if(function_exists('carbon_get_the_post_meta')):
	$quote_blocks = carbon_get_the_post_meta('crb_front_page_quotes_section_quotes_block');
	if(isset($quote_blocks) && !empty($quote_blocks)) :
		?>
		<section id="frontPageQuotes" class="page-section page-section__quotes">
			<div id="carouselExampleCaptionsQuote" class="carousel slide" data-ride="carousel">
				<ol  class="carousel-indicators">
					<?php for($i=0; $i< count($quote_blocks) ; $i++) : ?>
						<li style="" data-target="#carouselExampleCaptionsQuote" data-slide-to="<?php echo $i;  ?>" class="<?php echo $i === 0 ? 'active' : '' ; ?>"></li>
					<?php endfor; ?>
				</ol>
				<div class="carousel-inner">
					<?php $carousel_item_is_first = true;
					foreach ($quote_blocks as $quote_block):
						?>
						<div class="carousel-item  <?php  echo  $carousel_item_is_first === true ? 'active' : '' ; ?>" style="">
							<img class="reviews__photo" src="<?php  echo $quote_block['picture'] ; ?>" alt="img">
							<div class="reviews__text">"<?php echo $quote_block['content'] ; ?>"</div>
							<div class="reviews__author"><?php  echo $quote_block['author']; ?></div>
						</div>
						<?php $carousel_item_is_first = false; endforeach;  ?>
				</div>
			</div>
		</section>
        <div class="divider"></div>
<?php endif; endif; ?>