<script>
		var repeater_7_count = 1;

		$(".repeater_7_add").click(function(){
			var firstItem = $('.repeater_7_' + repeater_7_count).clone();
			var firstInput = $('.repeater_7_' + repeater_7_count + ' input').clone();
			var firstProcessed = firstItem.empty().append(firstInput);

			var firstProcessed = firstProcessed.removeClass("repeater_7_" + repeater_7_count);
			var firstProcessed = firstProcessed.addClass("repeater_7_" + (repeater_7_count + 2));



			var secondItem = $('.repeater_7_' + (repeater_7_count + 1)).clone();
			var secondInput = $('.repeater_7_' + (repeater_7_count + 1) + ' input').clone();
			var secondProcessed = secondItem.empty().append(secondInput);

			var secondProcessed = secondProcessed.removeClass("repeater_7_" + (repeater_7_count + 1));
			var secondProcessed = secondProcessed.addClass("repeater_7_" + (repeater_7_count + 3));

			$( ".repeater_7_container" ).append(firstProcessed);
			$( ".repeater_7_container" ).append(secondProcessed);

			repeater_7_count = repeater_7_count + 2;
		});

		$(".repeater_7_remove").click(function(){
			if(repeater_7_count > 2)
			{
				$('.repeater_7_' + repeater_7_count).remove();
				$('.repeater_7_' + (repeater_7_count + 1)).remove();
				repeater_7_count = repeater_7_count - 2;
			}
		});
</script>