<script>
	var repeater_4_count = 1;
	$(".repeater_4_add").click(function(){
		var firstItem = $('.repeater_4_' + repeater_4_count).clone();
		var firstInput = $('.repeater_4_' + repeater_4_count + ' input').clone();
		var firstProcessed = firstItem.empty().append(firstInput);
		var firstProcessed = firstProcessed.removeClass("repeater_4_" + repeater_4_count);
		var firstProcessed = firstProcessed.addClass("repeater_4_" + (repeater_4_count + 1));
		$( ".repeater_4_container" ).append(firstProcessed);
		repeater_4_count = repeater_4_count + 1;
	});
	$(".repeater_4_remove").click(function(){
		if(repeater_4_count > 1)
		{
			$('.repeater_4_' + repeater_4_count).remove();
			repeater_4_count = repeater_4_count - 1;
		}
	});
</script>