<?php
/*
  * Template name: Product Item
  * */
get_header();

?>

<main class="main">
	<div class="grid-x row product-content">
		<div class="cell large-5 medium-5 small-12">
			<div class="product-image">
				<img src="main-image.jpg" class="product-full-image">
			</div>
			<div class="sub-images-zone row grid-x" id="subImageContainer">
				<div class="cell medium-1 large-1 small-1 slide-block" id="slideBack">&#8249;</div>

				<div class="cell medium-10 large-10 small-10">
					<div class="row grid-x images-list" id="subImageContent">
						<img src="main-image.jpg" class="cell large-4 medium-4 small-6 product-sub-image">
						<img src="sub-image1.jpg" class="cell large-4 medium-4 small-6 product-sub-image">
						<img src="sub-image2.jpg" class="cell large-4 medium-4 small-6 product-sub-image">
						<img src="sub-image3.jpg" class="cell large-4 medium-4 small-6 product-sub-image">
						<img src="sub-image4.jpg" class="cell large-4 medium-4 small-6 product-sub-image">
					</div>
				</div>

				<div class="cell medium-1 large-1 small-1 slide-block" id="slide">&#8250;</div>
			</div>
		</div>
		<div class="cell large-7 medium-7 small-12 product-essential-block">
			<div class="secondary-text">Men / Shoes / DC Shoes</div>
			<div class="product-caption">Sneakers DC Manteca M Shoe 2018</div>
			<div class="secondary-text" style="font-size: 14px;">#L_MZ91872</div>
			<div class="price-block">
				<div class="current-price">$35.50</div>
				<div class="old-price">$95.50</div>
			</div>
			<div class="options-block">

				<div class="option-section" id="color-section">
					<div class="option-label">Color:</div>
					<ul class="no-bullet color-list option-list">
						<li class="color-red size-option-element" id="colorRed">
							<a href="#red"></a>
						</li>
						<li class="color-blue size-option-element" id="colorBlue">
							<a href="#blue"></a>
						</li>
						<li class="color-white active-option-order active-option size-option-element" id="colorWhite">
							<a href="#white"></a>
						</li>
					</ul>
				</div>

				<div class="option-section" id="size-section">
					<div class="option-label">Size:</div>
					<ul class="no-bullet size-list option-list">
						<li id="size39" class="size-option-element">
							<a href="#39">39</a>
						</li>
						<li id="size40" class="size-option-element">
							<a href="#40">40</a>
						</li>
						<li id="size43" class="size-option-element">
							<a href="#43">43</a>
						</li>
						<li id="size44" class="size-option-element">
							<a href="#44">44</a>
						</li>
						<li class="active-option-order active-option size-option-element" id="size45">
							<a href="#45">45</a>
						</li>
					</ul>
				</div>

				<div class="option-section">
					<div class="option-label">Accessibility: <span class="value-text">In stock in 2 days</span></div>
				</div>

			</div>
			<div class="action-block row grid-x">
				<div class="cell medium-8 large-8 small-12 action-element">
					<input class="button black-button buy-button" type="submit" name="" value="Add to chariot">
				</div>
				<div class="cell medium-2 large-2 small-6 action-element">
					<a href="#fav">
						<img class="func-fav-image" src="/../css/images/icons/pack2/favorite-2.png">
					</a>
				</div>
				<div class="cell medium-2 large-2 small-6 action-element"></div>
			</div>

			<div class="information-block">
				<div class="option-section">
					<div class="option-label">Description</div>
					<div class="text-inside">
						The nuts and bolts
						Leather, nubuck, suede or canvas upper
						Foam padded tongue and collar for added comfort and support
						Cupsole construction with Impact-G™ technology for maximum heel impact absorption
						Absorption abrasion resistant sticky rubber outsole
						DC's trademarked Pill Pattern tread
					</div>
				</div>
				<div class="option-section">
					<div class="option-label">Return & Garanties</div>
					<div class="text-inside">
						<p>
							This item is able to be returned untill 14 days after you've bought it if all conditions of returning are kept. <a href="#return">Click here</a> for our entire return policy
						</p>
						<p>
							We provide differnt ways of payment included payment when you've recieved the item. Confidence and only original things to make sure you will have what you want. <a href="#return">Click here</a> for find out more about garanties
						</p>
					</div>
				</div>
				<div class="option-section">
					<div class="option-label">Delivery</div>
					<div class="text-inside">
						We provide delivery to New Post offices whereever in Ukraine or you can try it in our store in Forum Lviv. <a href="#return">Click here</a> for find out more about delivery
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="other-products">
		<div class="option-label">Other products you may like</div>
		<div class="other-products-line">
			<div class="grid-x row other-products-grid">

				<div class="columns large-4 medium-4 small-4 product-item-zone">
					<a href="DC_MANTECA_M_SHOE_2018/">
						<div class="product-item grid-y" id="product-item">
							<div class="cell small-8 medium-8 large-8 prod-item-image">
								<img class="product-image" src="/../css/images/example1.jpg">
							</div>
							<div class="cell small-3 medium-3 large-3 prod-item-spec grid-x row">
								<div class="large-12 small-12 medium-12 product-text">Nike trainers Black/Red men</div>
								<div class="large-12 small-12 medium-12 functions-block">
									<a href="#b">
										<input class="button black-button" type="submit" name="" value="11500$">
									</a>
									<a href="#a">
										<img class="func-fav-image" src="/../css/images/icons/pack2/favorite-2.png">
									</a>
								</div>
							</div>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
</main>

<?php get_footer();