<script>
	var repeater_6_count = 1;
	$(".repeater_6_add").click(function(){
		var firstItem = $('.repeater_6_' + repeater_6_count).clone();
		var firstInput = $('.repeater_6_' + repeater_6_count + ' input').clone();
		var firstProcessed = firstItem.empty().append(firstInput);
		var firstProcessed = firstProcessed.removeClass("repeater_6_" + repeater_6_count);
		var firstProcessed = firstProcessed.addClass("repeater_6_" + (repeater_6_count + 1));
		$( ".repeater_6_container" ).append(firstProcessed);
		repeater_6_count = repeater_6_count + 1;
	});
	$(".repeater_6_remove").click(function(){
		if(repeater_6_count > 1)
		{
			$('.repeater_6_' + repeater_6_count).remove();
			repeater_6_count = repeater_6_count - 1;
		}
	});
</script>