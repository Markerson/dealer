<script>
	var repeater_3_count = 1;
	$(".repeater_3_add").click(function(){
		var firstItem = $('.repeater_3_' + repeater_3_count).clone();
		var firstInput = $('.repeater_3_' + repeater_3_count + ' input').clone();
		var firstProcessed = firstItem.empty().append(firstInput);
		var firstProcessed = firstProcessed.removeClass("repeater_3_" + repeater_3_count);
		var firstProcessed = firstProcessed.addClass("repeater_3_" + (repeater_3_count + 1));
		$( ".repeater_3_container" ).append(firstProcessed);
		repeater_3_count = repeater_3_count + 1;
	});
	$(".repeater_3_remove").click(function(){
		if(repeater_3_count > 1)
		{
			$('.repeater_3_' + repeater_3_count).remove();
			repeater_3_count = repeater_3_count - 1;
		}
	});
</script>