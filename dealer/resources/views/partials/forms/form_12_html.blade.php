<form id="services_form_display">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<label>Current Website URL
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-11 cell">	
				<div class="grid-container" style="padding-left:0rem; padding-right:0rem;">
					<div class="grid-x grid-padding-x repeater_7_container">
						<div class="large-6 cell repeater_7_1">
							<label>URL
								<input type="text" value="" name=""/>
							</label>
						</div>
						<div class="large-6 cell repeater_7_2">
							<label>What does the client like about this reference?
								<input type="text" value="" name=""/>
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="large-1 cell icon-repeat">
				<img class="repeater_7_remove" src="{{ asset('svgs/ic_remove_small.svg') }}">
				<img class="repeater_7_add" src="{{ asset('svgs/ic_add_small.svg') }}">
			</div>
			<div class="large-12 cell">
				<label>Additional Design Direction
					<textarea></textarea>
				</label>
			</div>
			<div class="large-12 cell">
				<h4>E-commerce Sites</h4>
			</div>
			<div class="large-12 cell">
				<label>Payment Processor (name and login)
					<textarea></textarea>
				</label>
			</div>			
			<div class="large-12 cell">
				<label>What shipping rate is charged (flat rate, carrier calculated, state by state, etc...)
					<textarea></textarea>
				</label>
			</div>
			<div class="large-12 cell">
				<label>Shipped From Zip Code
					<input type="text" value="" name=""/>
				</label>
			</div>
			<div class="large-12 cell">
				<label>Tax (In what states do you charge sales tax, and how much?)
					<textarea></textarea>
				</label>
			</div>
		</div>
	</div>
</form>