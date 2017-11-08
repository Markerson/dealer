<form id="services_form_display">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<label>Impression Count
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-12 cell">
				<label>Destination URL
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-11 cell">	
				<div class="grid-container" style="padding-left:0rem; padding-right:0rem;">
					<div class="grid-x grid-padding-x repeater_4_container">
						<div class="large-12 cell repeater_4_1">
							<label>Website Preferences
								<input type="text" value="" name=""/>
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="large-1 cell icon-repeat">
				<img class="repeater_4_remove" src="{{ asset('svgs/ic_remove_small.svg') }}">
				<img class="repeater_4_add" src="{{ asset('svgs/ic_add_small.svg') }}">
			</div>
			<div class="large-12 cell">
				<label>Age Targetting</label>
				<input id="age_18_24" type="checkbox"><label for="age_18_24">18-24</label>
				<input id="age_25_34" type="checkbox"><label for="age_25_34">25-34</label>
				<input id="age_35_44"" type="checkbox"><label for="age_35_44">35-44</label>
				<input id="age_45_54" type="checkbox"><label for="age_45_54">45-54</label>
				<input id="age_55_64" type="checkbox"><label for="age_55_64">55-64</label>
				<input id="age_65" type="checkbox"><label for="age_65">65+</label>
				<input id="age_all" type="checkbox"><label for="age_all">All</label>
			</div>
			<div class="large-12 cell">
				<label>Gender Targetting</label>
				<input type="radio" name="gender_targetting" value="male" id="gender_targetting_male"><label for="gender_targetting_male">Male</label>
				<input type="radio" name="gender_targetting" value="female" id="gender_targetting_female"><label for="gender_targetting_female">Female</label>
				<input type="radio" name="gender_targetting" value="both" id="gender_targetting_both"><label for="gender_targetting_both">Both</label>
			</div>
			<div class="large-12 cell">
				<label>Notes To Relay To Staff
					<textarea></textarea>
				</label>
			</div>
		</div>
	</div>
</form>

