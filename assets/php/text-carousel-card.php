<div class="card cell large-6 medium-6 small-12 text-carousel-card">

	<h2>What we believe</h2>

	<div class="text-carousel">
		<button class="control prev" aria-hidden="true"></button>
		<button class="control next" aria-hidden="true"></button>
		<ol class="beliefs">
			<li class="active">Everyone should be able to live a full and dignified life.</li>
			<li>The economy must be run democratically; none shall be poor so another can be rich.</li>
			<li>The abolition of poverty.</li>
			<li>Affordable, humane housing for all.</li>
			<li>Universal Medicare-for-all.</li>
			<li>Free education: from pre-K to trades, college and beyond.</li>
			<li>Democracy in the workplace; all workers have the right to organize.</li>
			<li>Complete reproductive freedom in all forms.</li>
			<li>An end to racial, gender and all other forms of oppression.</li>
			<li>An end to punitive justice and mass incarceration.</li>
			<li>An end to military and police aggression.</li>
			<li>Democratic control over the environment to preserve the planet.</li>
			<li>Total freedom to migrate; humanity has no borders.</li>
		</ol>
	</div>

	<div class="action">
		<a href="<?php echo home_url(); ?>/platform/" class="dark button">Read full platform</a>
	</div>


</div>



<script async>
	jQuery(document).ready(function($) {
		if ($(".text-carousel").length) {


			var curActive = $(".text-carousel .active");
			var totalBeliefs = $(".text-carousel li").length;
			var curIndex = 1;


			//console.log("curIndex is: " + curIndex);

			function beliefAdvance() {
				curActive = curActive.next();
				if (curIndex == totalBeliefs) {
					curActive = $(".text-carousel li:eq(0)")
					$(curActive).addClass("active");
					curIndex = 1;
				} else {
					curIndex = curActive.index() + 1;
					$(curActive).addClass("active");
				}
			}

			function beliefRewind() {
				curActive = curActive.prev();
				if (curIndex == 1) {
					curActive = $(".text-carousel li:eq(11)")
					$(curActive).addClass("active");
					curIndex = totalBeliefs;
				} else {
					curIndex = curIndex - 1;
					$(curActive).addClass("active");
				}
			}


			$(".control").click(function() {

				$(".text-carousel li").removeClass("active");
				if ($(this).hasClass("next")) {
					beliefAdvance();
					//console.log("curIndex is: " + curIndex);
				} else {
					beliefRewind();
					//console.log("curIndex is: " + curIndex);
				}

			});

		}





	}); // end doc ready
</script>