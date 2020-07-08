<?php ?>  

<footer>
	<div class="copyRight">
		<p>Minden jog fenntartva &copy; <?php echo date('Y'); ?> | Madricon – Minden, ami víz</p>
    </div>
</footer>
</section>
</div>
<script>
        
		$(document).ready( function() {                

			/* $(selector).hover( inFunction, outFunction ) */
			$('.dropdown').hover( 
				function() {
					
					$(this).find('ul').css({
						"display": "block",
						"transform": "translateY(0px)",
						"transition": ".2s",
						"opacity": "1",
						"margin-top": 0
					});                        
					
				}, 
				function() {
					
					$(this).find('ul').css({
						"opacity": "0",
						"transform": "translateY(10px)",
						"transition": ".2s",
						"margin-top": 0
					});
					
				} 
			);
			
		});
	
	</script>
<script>
	$(window).scroll((function(){var t=$(window).scrollTop();$(".graphics img").css({transform:"translate3d(0%, -"+t/36+"%, 0)"})}));

</script>
</body>
</html>