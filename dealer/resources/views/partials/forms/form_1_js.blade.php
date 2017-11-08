<script>
	$(document).ready(function(){
		//UPDATE NEW CLIENT
		$("#client-creation").submit(function(e) {

		    var url = "/client/update";

		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $("#client-creation").serialize(),
		           success: function(data)
		           {
		               alert(data);
		           }
		    });

		    e.preventDefault();
		});

		var repeater_1_count = 1;

		$(".repeater_1_add").click(function(){
			var firstItem = $('.repeater_1_' + repeater_1_count).clone();
			var firstInput = $('.repeater_1_' + repeater_1_count + ' input').clone();
			var firstProcessed = firstItem.empty().append(firstInput);

			var firstProcessed = firstProcessed.removeClass("repeater_1_" + repeater_1_count);
			var firstProcessed = firstProcessed.addClass("repeater_1_" + (repeater_1_count + 2));



			var secondItem = $('.repeater_1_' + (repeater_1_count + 1)).clone();
			var secondInput = $('.repeater_1_' + (repeater_1_count + 1) + ' input').clone();
			var secondProcessed = secondItem.empty().append(secondInput);

			var secondProcessed = secondProcessed.removeClass("repeater_1_" + (repeater_1_count + 1));
			var secondProcessed = secondProcessed.addClass("repeater_1_" + (repeater_1_count + 3));

			$( ".repeater_1_container" ).append(firstProcessed);
			$( ".repeater_1_container" ).append(secondProcessed);

			repeater_1_count = repeater_1_count + 2;
		});

		$(".repeater_1_remove").click(function(){
			if(repeater_1_count > 2)
			{
				$('.repeater_1_' + repeater_1_count).remove();
				$('.repeater_1_' + (repeater_1_count + 1)).remove();
				repeater_1_count = repeater_1_count - 2;
			}
		});


		var repeater_2_count = 1;

		$(".repeater_2_add").click(function(){
			var firstItem = $('.repeater_2_' + repeater_2_count).clone();
			var firstInput = $('.repeater_2_' + repeater_2_count + ' input').clone();
			var firstProcessed = firstItem.empty().append(firstInput);

			var firstProcessed = firstProcessed.removeClass("repeater_2_" + repeater_2_count);
			var firstProcessed = firstProcessed.addClass("repeater_2_" + (repeater_2_count + 1));

			$( ".repeater_2_container" ).append(firstProcessed);

			repeater_2_count = repeater_2_count + 1;
		});

		$(".repeater_2_remove").click(function(){
			if(repeater_2_count > 1)
			{
				$('.repeater_2_' + repeater_2_count).remove();
				repeater_2_count = repeater_2_count - 1;
			}
		});

	});
</script>