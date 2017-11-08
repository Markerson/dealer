<script>
	var repeater_5_count = 1;
	$(".repeater_5_add").click(function(){
		var firstItem = $('.repeater_5_' + repeater_5_count).clone();
		var firstInput = $('.repeater_5_' + repeater_5_count + ' input').clone();
		var firstProcessed = firstItem.empty().append(firstInput);
		var firstProcessed = firstProcessed.removeClass("repeater_5_" + repeater_5_count);
		var firstProcessed = firstProcessed.addClass("repeater_5_" + (repeater_5_count + 1));
		$( ".repeater_5_container" ).append(firstProcessed);
		repeater_5_count = repeater_5_count + 1;
	});
	$(".repeater_5_remove").click(function(){
		if(repeater_5_count > 1)
		{
			$('.repeater_5_' + repeater_5_count).remove();
			repeater_5_count = repeater_5_count - 1;
		}
	});
</script>