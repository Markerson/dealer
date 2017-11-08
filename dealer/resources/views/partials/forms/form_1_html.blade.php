<form id="client-creation">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<label>CLIENT NAME
					<input type="text" value="{{ $client->name }}" name="client-name"/>
				</label>
			</div>
			<div class="large-12 cell">
				<label>WEBSITE URL
					<input type="text" value="{{ $client->website_url }}" name="website-url"/>
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
				<input type="submit" value="Update" class="button">
			</div>
			<fieldset class="fieldset">
				<legend>Services</legend>
				<input id="services_sem" type="checkbox"><label for="services_sem">SEM</label>
				<input id="services_display" type="checkbox"><label for="services_display">Display</label>
				<input id="services_youtube" type="checkbox"><label for="services_youtube">YouTube</label>
				<input id="services_social_media_management" type="checkbox"><label for="services_social_media_management">Social Media Management</label>
				<input id="services_facebook_direct_response" type="checkbox"><label for="services_facebook_direct_response">Facebook Direct Response</label>
				<input id="services_adgrant" type="checkbox"><label for="services_adgrant">AdGrant</label>
				<input id="services_pla" type="checkbox"><label for="services_pla">PLA</label>
				<input id="services_seo" type="checkbox"><label for="services_seo">SEO</label>
				<input id="services_graphic_design" type="checkbox"><label for="services_graphic_design">Graphic Design</label>
				<input id="services_video" type="checkbox"><label for="services_video">Video</label>
				<input id="services_website" type="checkbox"><label for="services_website">Website Development</label>
			</fieldset>
			<div class="large-12 cell">
				<h3>ADDRESS</h3>
			</div>	
			<div class="large-6 cell">
				<label>Street
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-6 cell">
				<label>City
				<select>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>	
				</label>
			</div>
			<div class="large-6 cell">
				<label>State
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-6 cell">
				<label>Zip
					<input type="number" value="" name=""/>
				</label>
			</div>
			<div class="large-12 cell">
				<label>Geographic Targeting
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-11 cell">	
				<div class="grid-container" style="padding-left:0rem; padding-right:0rem;">
					<div class="grid-x grid-padding-x repeater_1_container">
						<div class="large-6 cell repeater_1_1">
							<label>Competitor Name
								<input type="text" value="" name=""/>
							</label>
						</div>
						<div class="large-6 cell repeater_1_2">
							<label>Competitor URL
								<input type="text" value="" name=""/>
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="large-1 cell icon-repeat">
				<img class="repeater_1_remove" src="{{ asset('svgs/ic_remove_small.svg') }}">
				<img class="repeater_1_add" src="{{ asset('svgs/ic_add_small.svg') }}">
			</div>
			<div class="large-11 cell">	
				<div class="grid-container" style="padding-left:0rem; padding-right:0rem;">
					<div class="grid-x grid-padding-x repeater_2_container">
						<div class="large-12 cell repeater_2_1">
							<label>Preliminary Keyword Suggestions
								<input type="text" value="" name=""/>
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="large-1 cell icon-repeat">
				<img class="repeater_2_remove" src="{{ asset('svgs/ic_remove_small.svg') }}">
				<img class="repeater_2_add" src="{{ asset('svgs/ic_add_small.svg') }}">
			</div>
			<div class="large-12 cell">
				<label>Client Objectives
					<textarea></textarea>
				</label>
			</div>
			<div class="large-12 cell">
				<label>What Sets The Client Apart
					<textarea></textarea>
				</label>
			</div>
		</div>
	</div>
</form>