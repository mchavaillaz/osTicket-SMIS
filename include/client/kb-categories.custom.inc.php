<?php
// Tool
$smisUtilities = new SMISUtilities();
?>
<!-- Top bar section -->
<?php
$title = __('Frequently Asked Questions');
$text = __('The FAQ has two categories: For everybody and specifically for professionals.');
require(CLIENTINC_DIR . 'page-header.inc.php');
?>
<div class="wrapper">
</div>
<!-- Switch FAQ context For Everybody/For Professional -->
<div class="wrapper">
	<div class="container">
        <?php
        $categories = Category::objects()
            ->exclude(Q::any(array(
                'ispublic' => Category::VISIBILITY_PRIVATE,
                'faqs__ispublished' => FAQ::VISIBILITY_PRIVATE,
            )))
            ->annotate(array('faq_count' => SqlAggregate::COUNT('faqs')))
            ->filter(array('faq_count__gt' => 0));
        if ($categories->exists(true)) {
            ?>

            <?php
        } else {
            echo __('NO FAQs found');
        }
        ?>
	</div>
</div>
<!-- Search in FAQ form -->
<?php
include CLIENTINC_DIR . 'search-in-faq.inc.php';
?>
<!-- FAQ categories -->
<table class="table-center">
	<tr>
		<td>
			<img src="<?php echo ASSETS_PATH; ?>images/icons/faq_green.png">
		</td>
	</tr>
</table>
<div class="separator"></div>
<div class="wrapper">
	<div class="container">
		<div class="column center">
			<table id="Categories" cellpadding="15" width="100%"
				<?php
				$cpt = 0;
				// Get the categories as array
				$currentCategory = $smisUtilities->getCategoriesArray($categories);

				// Loop over all categories
				foreach ($currentCategory as $category) {
					// Get the category data we need
					$categoryId = $category['id'];
					$categoryIcon = $category['icon'];
					$categoryTitle = $category['title'];
					$categoryTopicAmount = $category['amountTopic'];

					// Begin of <tr>
					if ($cpt % 2 == 0) {
						echo '<tr>';
					}
					?>
					<td class="faq-table-td">
						<img src="<?php echo ASSETS_PATH; ?>images/icons/<?php echo $categoryIcon . '.png' ?>">
					</td>
					<td>
						<span class="faq-category-title">
							<?php
							echo $categoryTitle . ' [' . $categoryTopicAmount . ']';
							?>
						</span>
						<br>
						<br>
						<a href="faq.php?cid=<?php echo $categoryId ?>"
						   class="button-secondary button-small">
							<?php echo __('Enter'); ?>
						</a>
					</td>
					<?php
					// End of <tr>
					if ($cpt % 2 != 0) {
						echo '</tr>';
					}
					$cpt++;
				} ?>
			</table>
		</div>
	</div>
</div>

