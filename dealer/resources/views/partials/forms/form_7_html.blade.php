<form id="services_form_adgrant">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<label>Mission Statement
					<textarea></textarea>
				</label>
			</div>
			<div class="large-12 cell">
				<label>EIN Number
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-12 cell">
				<label>Expected Launch Date
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-12 cell">
				<label>Current AdWords CID (If Available)
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-12 cell">
				<label>Ad Run Schedule (time and days)
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-11 cell">	
				<div class="grid-container" style="padding-left:0rem; padding-right:0rem;">
					<div class="grid-x grid-padding-x repeater_6_container">
						<div class="large-12 cell repeater_6_1">
							<label>Preliminary Negative Keywords
								<input type="text" value="" name=""/>
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="large-1 cell icon-repeat">
				<img class="repeater_6_remove" src="{{ asset('svgs/ic_remove_small.svg') }}">
				<img class="repeater_6_add" src="{{ asset('svgs/ic_add_small.svg') }}">
			</div>
			<div class="large-12 cell">
				<label>Are Call Ads Approved?</label>
      			<input type="radio" name="call_ads_approved" value="yes" id="call_ads_approved_yes"><label for="call_ads_approved_yes">Yes</label>
      			<input type="radio" name="call_ads_approved" value="no" id="call_ads_approved_no"><label for="call_ads_approved_no">No</label>
			</div>
			<div class="large-12 cell">
				<label>Notes To Relay To Staff
					<textarea></textarea>
				</label>
			</div>
		</div>
	</div>
</form>