@extends('layouts.main')

@section('content')

	<div class="top-right-icon-link" id="form-toggle">
		<img src="{{ asset('svgs/ic_add.svg') }}" alt="My SVG Icon">
	</div>

	<!-- FORM START -->
	<form id="client-creation" style="display:none;">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<label>CLIENT NAME
						<input type="text" name="client-name"/>
					</label>
				</div>
				<div class="large-12 cell">
					<label>WEBSITE URL
						<input type="text" name="website-url"/>
					</label>
				</div>
				<div class="large-12 cell">
					<h3>PRIMARY POINT OF CONTACT</h3>
				</div>

				<div class="large-4 medium-4 cell">
					<label>NAME
						<input type="text" />
					</label>
				</div>
				<div class="large-4 medium-4 cell">
					<label>EMAIL
						<input type="text" />
					</label>
				</div>
				<div class="large-4 medium-4 cell">
					<label>PHONE NUMBER
						<input type="text" />
					</label>
				</div>
				<div class="large-4 medium-4 cell">
					<input type="submit" value="Submit" class="button">
				</div>				
			</div>
		</div>
	</form>
	<!-- FORM END -->


	@if (count($clients) > 0)
				@foreach ($clients as $client)
					<div class="card client-card">
						<a href="/clients/{{ $client->id }}">
							<h4>{{ $client->name }}</h4>
						</a>
						<p>{{ $client->website_url }}</p>
					</div>
				@endforeach	

	@else
	    I don't have any records!
	@endif


@endsection

@section('footer-scripts')
<script>
	$(document).ready(function(){
		//TOGGLE FORM
		$("#form-toggle").click(function(){
		    $("#client-creation").toggle();
		});

		//CREATE NEW CLIENT
		$("#client-creation").submit(function(e) {

		    var url = "/client/create";

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
	});
</script>
@endsection
