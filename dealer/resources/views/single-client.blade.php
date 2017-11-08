@extends('layouts.main')

@section('content')
<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<div class="large-4 cell">
			<ul class="vertical tabs" data-tabs id="client-tabs">
				<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Home</a></li>
				<li class="tabs-title"><a href="#panel2">SEM</a></li>
				<li class="tabs-title"><a href="#panel3">Display</a></li>
				<li class="tabs-title"><a href="#panel4">YouTube</a></li>
				<li class="tabs-title"><a href="#panel5">Social Media Management</a></li>
				<li class="tabs-title"><a href="#panel6">Facebook Direct Response</a></li>
				<li class="tabs-title"><a href="#panel7">AdGrant</a></li>
				<li class="tabs-title"><a href="#panel8">PLA</a></li>
				<li class="tabs-title"><a href="#panel9">SEO</a></li>
				<li class="tabs-title"><a href="#panel10">Graphic Design</a></li>
				<li class="tabs-title"><a href="#panel11">Video</a></li>
				<li class="tabs-title"><a href="#panel12">Website Development</a></li>
			</ul>
		</div>
		<div class="large-8 cell">
			<div class="tabs-content" data-tabs-content="client-tabs">
				<div class="tabs-panel is-active" id="panel1">
					@include('partials.forms.form_1_html')
  				</div>

				<div class="tabs-panel" id="panel2">
					@include('partials.forms.form_2_html')
				</div>

				<div class="tabs-panel" id="panel3">
					@include('partials.forms.form_3_html')
				</div>

				<div class="tabs-panel" id="panel4">
					@include('partials.forms.form_4_html')
				</div>

				<div class="tabs-panel" id="panel5">
					@include('partials.forms.form_5_html')
				</div>

				<div class="tabs-panel" id="panel6">
					@include('partials.forms.form_6_html')
				</div>

				<div class="tabs-panel" id="panel7">
					@include('partials.forms.form_7_html')
				</div>

				<div class="tabs-panel" id="panel8">
					@include('partials.forms.form_8_html')
				</div>

				<div class="tabs-panel" id="panel9">
					@include('partials.forms.form_9_html')
				</div>

				<div class="tabs-panel" id="panel10">
					@include('partials.forms.form_10_html')
				</div>

				<div class="tabs-panel" id="panel11">
					@include('partials.forms.form_11_html')
				</div>

				<div class="tabs-panel" id="panel12">
					@include('partials.forms.form_12_html')
				</div>

  			</div>
		</div>
	</div>
</div>
@endsection

@section('footer-scripts')
	@include('partials.forms.form_1_js')
	@include('partials.forms.form_2_js')
	@include('partials.forms.form_3_js')
	@include('partials.forms.form_4_js')
	@include('partials.forms.form_7_js')
	@include('partials.forms.form_12_js')
@endsection