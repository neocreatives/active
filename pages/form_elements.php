<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('forms'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('form_elements'); ?></li>
</ul>
<div class="separator bottom"></div>

<div class="widget widget-4">
	<div class="widget-head">
		<h3 class="heading"><?php echo $translate->_('form_elements'); ?></h3>
	</div>
	<div class="widget-body" style="padding: 10px 0;">
		<p>There are various form elements contained in <?php echo APP_NAME; ?>, custom select controls, custom checkbox &amp; radio controls, custom input controls with &amp; without appended / prepended elements (icons, dropdowns, dropups, groups), toggle (on/off) buttons, icons &amp; many more.</p>
	</div>
</div>
<div class="separator line"></div>

<h3>Input controls</h3>

<div class="row-fluid">
	<div class="span8">
	
		<div class="widget widget-4">
			<div class="widget-head"><h4 class="heading">Default</h4></div>
			<div class="separator bottom"></div>
			<div class="row-fluid">
				<input type="text" placeholder="Text input" class="span12" />
			</div>
		</div>
		
		<div class="widget widget-4 row-fluid">
			<div class="widget-head"><h4 class="heading">Extended</h4></div>
			<div class="separator bottom"></div>
			<div class="input-prepend">
			  	<span class="add-on">@</span>
			  	<input id="prependedInput" class="span12" type="text" placeholder="Username" />
			</div>
		</div>
			
		<div class="widget widget-4 row-fluid">
			<div class="widget-head"><h4 class="heading">Combined</h4></div>
			<div class="separator bottom"></div>
			<div class="input-prepend input-append">
				<span class="add-on">$</span>
				<input class="span12" id="appendedPrependedInput" type="text" placeholder="100,000,000" /> 
				<span class="add-on">.00</span>
			</div>
		</div>
		
		<div class="widget widget-4 uniformjs">
			<div class="widget-head">
				<h4 class="heading">Checkbox</h4>
			</div>
			<div class="separator bottom"></div>
			<label class="checkbox">
				<input type="checkbox" class="checkbox" value="1" />
				Option 1 - Sexy checkbox
			</label>
			<label class="checkbox">
				<input type="checkbox" class="checkbox" value="1" checked="checked" />
				Option 2 - Checked
			</label>
			<label class="checkbox">
				<input type="checkbox" class="checkbox" value="1" disabled="disabled" />
				Option 3 - Disabled checkbox
			</label>
		</div>
	
	</div>
	<div class="span4">
	
		<div class="widget widget-4 row-fluid">
			<div class="widget-head"><h4 class="heading">Buttons</h4></div>
			<div class="separator bottom"></div>
			<div class="input-append">
			  	<input class="span6" id="appendedInputButtons" type="text" placeholder="Placeholder .." />
			  	<button class="btn" type="button"><i class="icon-search"></i></button>
			  	<button class="btn" type="button">Options</button>
			</div>
		</div>
			
		<div class="widget widget-4 row-fluid">
			<div class="widget-head"><h4 class="heading">Dropdown / Dropup</h4></div>
			<div class="separator bottom"></div>
			<div class="input-append">
				<input class="span8" id="appendedDropdownButton" type="text" />
				<div class="btn-group dropup">
					<button class="btn dropdown-toggle" data-toggle="dropdown">
						Action <span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
			</div>
		</div>	
			
		<div class="widget widget-4 row-fluid">
			<div class="widget-head"><h4 class="heading">Segmented Groups</h4></div>
			<div class="separator bottom"></div>
			<div class="input-append">
				<input type="text" class="span7" />
				<div class="btn-group dropup">
					<button class="btn" tabindex="-1">Action</button>
					<button class="btn dropdown-toggle" data-toggle="dropdown" tabindex="-1">
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="widget widget-4 uniformjs">
			<div class="widget-head"><h4 class="heading">Radio</h4></div>
			<div class="separator bottom"></div>
			<label class="radio">
				<input type="radio" class="radio" name="radio" value="1" />
				Option 1 - Sexy radio
			</label><br/>
			<label class="radio">
				<input type="radio" class="radio" name="radio" value="1" checked="checked" />
				Option 2 - Checked
			</label><br/>
			<label class="radio">
				<input type="radio" class="radio disabled" name="radio" value="1" disabled="disabled" />
				Option 3 - Disabled radio
			</label>
		</div>
	
	</div>
</div>
<div class="separator line"></div>

<h3>File controls</h3>
<div class="row-fluid">
	<div class="span6">
		<div class="widget widget-4">
			<div class="widget-head"><h4 class="heading">File upload widget</h4></div>
			<div class="separator bottom"></div>
			<div class="fileupload fileupload-new" data-provides="fileupload">
			  	<div class="input-append">
			    	<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
			  	</div>
			</div>
		</div>
	</div>
	<div class="span6">
		<div class="widget widget-4">
			<div class="widget-head"><h4 class="heading">File upload button</h4></div>
			<div class="separator bottom"></div>
			<div class="fileupload fileupload-new" data-provides="fileupload">
			  	<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span>
			  	<span class="fileupload-preview"></span>
			  	<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">&times;</a>
			</div>
		</div>
	</div>
</div>
<div class="separator line"></div>

<h3>WYSIHTML5 Editor</h3>
<div class="row-fluid">
	<textarea id="mustHaveId" class="wysihtml5 span12" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>
</div>
<div class="separator line"></div>

<h3>Toggle buttons</h3>
<div class="center">
	<div class="toggle-button">
		<input type="checkbox" checked="checked" />
	</div>
	<div class="toggle-button" data-toggleButton-style-enabled="info">
		<input type="checkbox" checked="checked" />
	</div>
	<div class="toggle-button" data-toggleButton-style-enabled="warning">
		<input type="checkbox" checked="checked" />
	</div>
	<div class="toggle-button" data-toggleButton-style-enabled="danger">
		<input type="checkbox" checked="checked" />
	</div>
	<div class="toggle-button" data-toggleButton-style-enabled="success">
		<input type="checkbox" checked="checked" />
	</div>
	<div class="toggle-button"
		data-toggleButton-style-custom-enabled-background="#3F4246"
		data-toggleButton-style-custom-enabled-gradient="#000000">
		<input type="checkbox" checked="checked" />
	</div>
</div>
<div class="separator line"></div>

<h3>Select controls</h3>
<div class="row-fluid">
	<div class="span3">
		<h5>Default</h5>
		<div class="row-fluid">
			<select class="span12">
				<optgroup label="Picnic">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</optgroup>
				<optgroup label="Camping">
					<option>Tent</option>
					<option>Flashlight</option>
					<option>Toilet Paper</option>
				</optgroup>
			</select>
		</div>
		<hr/>
		<h5>Extended</h5>
		<div class="row-fluid">
			<select class="selectpicker span12">
				<optgroup label="Picnic">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</optgroup>
				<optgroup label="Camping">
					<option>Tent</option>
					<option>Flashlight</option>
					<option>Toilet Paper</option>
				</optgroup>
			</select>
		</div>
	</div>
	<div class="span5">
		<h5>Styles</h5>
		<div class="row-fluid">
			<select class="selectpicker span6" data-style="btn-primary">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select> 
			<select class="selectpicker span6" data-style="btn-default">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>
		</div>
		<div class="row-fluid">
			<select class="selectpicker span6" data-style="btn-info">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>
			<select class="selectpicker span6" data-style="btn-success">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>
		</div>
		<div class="row-fluid">
			<select class="selectpicker span6" data-style="btn-warning">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select> 
			<select class="selectpicker span6" data-style="btn-inverse">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>
		</div>
	</div>
	<div class="span4">
		<h5>Grid</h5>
		<div class="row-fluid">
			<select class="selectpicker span3">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select> 
			<select class="selectpicker span9">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>
		</div>
		<div class="row-fluid">
			<select class="selectpicker span4">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select> 
			<select class="selectpicker span8">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>
		</div>
		<div class="row-fluid">
			<select class="selectpicker span6">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select> 
			<select class="selectpicker span6">
				<option>Mustard</option>
				<option>Ketchup</option>
				<option>Relish</option>
			</select>
		</div>
	</div>
</div>
<div class="separator line"></div>

<h3>Advanced Select Controls</h3>
<div class="row-fluid">
	<div class="span6">
		<h5>Basics</h5>
		<div class="row-fluid">
			<select style="width: 100%;" id="select2_1">
               <optgroup label="Alaskan/Hawaiian Time Zone">
                   <option value="AK">Alaska</option>
                   <option value="HI">Hawaii</option>
               </optgroup>
               <optgroup label="Pacific Time Zone">
                   <option value="CA">California</option>
                   <option value="NV">Nevada</option>
                   <option value="OR">Oregon</option>
                   <option value="WA">Washington</option>
               </optgroup>
               <optgroup label="Mountain Time Zone">
                   <option value="AZ">Arizona</option>
                   <option value="CO">Colorado</option>
                   <option value="ID">Idaho</option>
                   <option value="MT">Montana</option><option value="NE">Nebraska</option>
                   <option value="NM">New Mexico</option>
                   <option value="ND">North Dakota</option>
                   <option value="UT">Utah</option>
                   <option value="WY">Wyoming</option>
               </optgroup>
               <optgroup label="Central Time Zone">
                   <option value="AL">Alabama</option>
                   <option value="AR">Arkansas</option>
                   <option value="IL">Illinois</option>
                   <option value="IA">Iowa</option>
                   <option value="KS">Kansas</option>
                   <option value="KY">Kentucky</option>
                   <option value="LA">Louisiana</option>
                   <option value="MN">Minnesota</option>
                   <option value="MS">Mississippi</option>
                   <option value="MO">Missouri</option>
                   <option value="OK">Oklahoma</option>
                   <option value="SD">South Dakota</option>
                   <option value="TX">Texas</option>
                   <option value="TN">Tennessee</option>
                   <option value="WI">Wisconsin</option>
               </optgroup>
               <optgroup label="Eastern Time Zone">
                   <option value="CT">Connecticut</option>
                   <option value="DE">Delaware</option>
                   <option value="FL">Florida</option>
                   <option value="GA">Georgia</option>
                   <option value="IN">Indiana</option>
                   <option value="ME">Maine</option>
                   <option value="MD">Maryland</option>
                   <option value="MA">Massachusetts</option>
                   <option value="MI">Michigan</option>
                   <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                   <option value="NY">New York</option>
                   <option value="NC">North Carolina</option>
                   <option value="OH">Ohio</option>
                   <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                   <option value="VT">Vermont</option><option value="VA">Virginia</option>
                   <option value="WV">West Virginia</option>
               </optgroup>
        	</select>
		</div>
		<div class="separator bottom"></div>
		<h5>Multi-Value Select Boxes</h5>
		<div class="row-fluid">
			<select multiple="multiple" style="width: 100%;" id="select2_2">
               <optgroup label="Alaskan/Hawaiian Time Zone">
                   <option value="AK">Alaska</option>
                   <option value="HI">Hawaii</option>
               </optgroup>
               <optgroup label="Pacific Time Zone">
                   <option value="CA">California</option>
                   <option value="NV">Nevada</option>
                   <option value="OR">Oregon</option>
                   <option value="WA">Washington</option>
               </optgroup>
               <optgroup label="Mountain Time Zone">
                   <option value="AZ">Arizona</option>
                   <option value="CO">Colorado</option>
                   <option value="ID">Idaho</option>
                   <option value="MT">Montana</option><option value="NE">Nebraska</option>
                   <option value="NM">New Mexico</option>
                   <option value="ND">North Dakota</option>
                   <option value="UT">Utah</option>
                   <option value="WY">Wyoming</option>
               </optgroup>
               <optgroup label="Central Time Zone">
                   <option value="AL">Alabama</option>
                   <option value="AR">Arkansas</option>
                   <option value="IL">Illinois</option>
                   <option value="IA">Iowa</option>
                   <option value="KS">Kansas</option>
                   <option value="KY">Kentucky</option>
                   <option value="LA">Louisiana</option>
                   <option value="MN">Minnesota</option>
                   <option value="MS">Mississippi</option>
                   <option value="MO">Missouri</option>
                   <option value="OK">Oklahoma</option>
                   <option value="SD">South Dakota</option>
                   <option value="TX">Texas</option>
                   <option value="TN">Tennessee</option>
                   <option value="WI">Wisconsin</option>
               </optgroup>
               <optgroup label="Eastern Time Zone">
                   <option value="CT">Connecticut</option>
                   <option value="DE">Delaware</option>
                   <option value="FL">Florida</option>
                   <option value="GA">Georgia</option>
                   <option value="IN">Indiana</option>
                   <option value="ME">Maine</option>
                   <option value="MD">Maryland</option>
                   <option value="MA">Massachusetts</option>
                   <option value="MI">Michigan</option>
                   <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                   <option value="NY">New York</option>
                   <option value="NC">North Carolina</option>
                   <option value="OH">Ohio</option>
                   <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                   <option value="VT">Vermont</option><option value="VA">Virginia</option>
                   <option value="WV">West Virginia</option>
               </optgroup>
        	</select>
		</div>
		<div class="separator bottom"></div>
		<h5>Placeholders</h5>
		<div class="row-fluid">
			<select style="width: 100%;" id="select2_3">
				<option></option>
				<optgroup label="Alaskan/Hawaiian Time Zone">
                   <option value="AK">Alaska</option>
                   <option value="HI">Hawaii</option>
               </optgroup>
               <optgroup label="Pacific Time Zone">
                   <option value="CA">California</option>
                   <option value="NV">Nevada</option>
                   <option value="OR">Oregon</option>
                   <option value="WA">Washington</option>
               </optgroup>
               <optgroup label="Mountain Time Zone">
                   <option value="AZ">Arizona</option>
                   <option value="CO">Colorado</option>
                   <option value="ID">Idaho</option>
                   <option value="MT">Montana</option><option value="NE">Nebraska</option>
                   <option value="NM">New Mexico</option>
                   <option value="ND">North Dakota</option>
                   <option value="UT">Utah</option>
                   <option value="WY">Wyoming</option>
               </optgroup>
               <optgroup label="Central Time Zone">
                   <option value="AL">Alabama</option>
                   <option value="AR">Arkansas</option>
                   <option value="IL">Illinois</option>
                   <option value="IA">Iowa</option>
                   <option value="KS">Kansas</option>
                   <option value="KY">Kentucky</option>
                   <option value="LA">Louisiana</option>
                   <option value="MN">Minnesota</option>
                   <option value="MS">Mississippi</option>
                   <option value="MO">Missouri</option>
                   <option value="OK">Oklahoma</option>
                   <option value="SD">South Dakota</option>
                   <option value="TX">Texas</option>
                   <option value="TN">Tennessee</option>
                   <option value="WI">Wisconsin</option>
               </optgroup>
               <optgroup label="Eastern Time Zone">
                   <option value="CT">Connecticut</option>
                   <option value="DE">Delaware</option>
                   <option value="FL">Florida</option>
                   <option value="GA">Georgia</option>
                   <option value="IN">Indiana</option>
                   <option value="ME">Maine</option>
                   <option value="MD">Maryland</option>
                   <option value="MA">Massachusetts</option>
                   <option value="MI">Michigan</option>
                   <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                   <option value="NY">New York</option>
                   <option value="NC">North Carolina</option>
                   <option value="OH">Ohio</option>
                   <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                   <option value="VT">Vermont</option><option value="VA">Virginia</option>
                   <option value="WV">West Virginia</option>
               </optgroup>
        	</select>
        	<div class="separator bottom"></div>
			<select multiple="multiple" style="width: 100%;" id="select2_4">
               <optgroup label="Alaskan/Hawaiian Time Zone">
                   <option value="AK">Alaska</option>
                   <option value="HI">Hawaii</option>
               </optgroup>
               <optgroup label="Pacific Time Zone">
                   <option value="CA">California</option>
                   <option value="NV">Nevada</option>
                   <option value="OR">Oregon</option>
                   <option value="WA">Washington</option>
               </optgroup>
               <optgroup label="Mountain Time Zone">
                   <option value="AZ">Arizona</option>
                   <option value="CO">Colorado</option>
                   <option value="ID">Idaho</option>
                   <option value="MT">Montana</option><option value="NE">Nebraska</option>
                   <option value="NM">New Mexico</option>
                   <option value="ND">North Dakota</option>
                   <option value="UT">Utah</option>
                   <option value="WY">Wyoming</option>
               </optgroup>
               <optgroup label="Central Time Zone">
                   <option value="AL">Alabama</option>
                   <option value="AR">Arkansas</option>
                   <option value="IL">Illinois</option>
                   <option value="IA">Iowa</option>
                   <option value="KS">Kansas</option>
                   <option value="KY">Kentucky</option>
                   <option value="LA">Louisiana</option>
                   <option value="MN">Minnesota</option>
                   <option value="MS">Mississippi</option>
                   <option value="MO">Missouri</option>
                   <option value="OK">Oklahoma</option>
                   <option value="SD">South Dakota</option>
                   <option value="TX">Texas</option>
                   <option value="TN">Tennessee</option>
                   <option value="WI">Wisconsin</option>
               </optgroup>
               <optgroup label="Eastern Time Zone">
                   <option value="CT">Connecticut</option>
                   <option value="DE">Delaware</option>
                   <option value="FL">Florida</option>
                   <option value="GA">Georgia</option>
                   <option value="IN">Indiana</option>
                   <option value="ME">Maine</option>
                   <option value="MD">Maryland</option>
                   <option value="MA">Massachusetts</option>
                   <option value="MI">Michigan</option>
                   <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                   <option value="NY">New York</option>
                   <option value="NC">North Carolina</option>
                   <option value="OH">Ohio</option>
                   <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                   <option value="VT">Vermont</option><option value="VA">Virginia</option>
                   <option value="WV">West Virginia</option>
               </optgroup>
        	</select>
		</div>
	</div>
	<div class="span6">
		<h5>Tagging Support</h5>
		<input type="hidden" id="select2_5" style="width: 100%;" value="brown,red,green" />
		<div class="separator bottom"></div>
		<h5>Disabled Mode</h5>
        <select disabled="disabled" id="select2_6_1" style="width:100%">
        	<optgroup label="Alaskan/Hawaiian Time Zone">
                   <option value="AK">Alaska</option>
                   <option value="HI">Hawaii</option>
               </optgroup>
               <optgroup label="Pacific Time Zone">
                   <option value="CA">California</option>
                   <option value="NV">Nevada</option>
                   <option value="OR">Oregon</option>
                   <option value="WA">Washington</option>
               </optgroup>
               <optgroup label="Mountain Time Zone">
                   <option value="AZ">Arizona</option>
                   <option value="CO">Colorado</option>
                   <option value="ID">Idaho</option>
                   <option value="MT">Montana</option><option value="NE">Nebraska</option>
                   <option value="NM">New Mexico</option>
                   <option value="ND">North Dakota</option>
                   <option value="UT">Utah</option>
                   <option value="WY">Wyoming</option>
               </optgroup>
               <optgroup label="Central Time Zone">
                   <option value="AL">Alabama</option>
                   <option value="AR">Arkansas</option>
                   <option value="IL">Illinois</option>
                   <option value="IA">Iowa</option>
                   <option value="KS">Kansas</option>
                   <option value="KY">Kentucky</option>
                   <option value="LA">Louisiana</option>
                   <option value="MN">Minnesota</option>
                   <option value="MS">Mississippi</option>
                   <option value="MO">Missouri</option>
                   <option value="OK">Oklahoma</option>
                   <option value="SD">South Dakota</option>
                   <option value="TX">Texas</option>
                   <option value="TN">Tennessee</option>
                   <option value="WI">Wisconsin</option>
               </optgroup>
               <optgroup label="Eastern Time Zone">
                   <option value="CT">Connecticut</option>
                   <option value="DE">Delaware</option>
                   <option value="FL">Florida</option>
                   <option value="GA">Georgia</option>
                   <option value="IN">Indiana</option>
                   <option value="ME">Maine</option>
                   <option value="MD">Maryland</option>
                   <option value="MA">Massachusetts</option>
                   <option value="MI">Michigan</option>
                   <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                   <option value="NY">New York</option>
                   <option value="NC">North Carolina</option>
                   <option value="OH">Ohio</option>
                   <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                   <option value="VT">Vermont</option><option value="VA">Virginia</option>
                   <option value="WV">West Virginia</option>
               </optgroup>
        </select>
        <div class="separator bottom"></div>
		<select disabled="disabled" id="select2_6_2" multiple style="width:100%">
			<optgroup label="Alaskan/Hawaiian Time Zone">
                   <option value="AK">Alaska</option>
                   <option value="HI">Hawaii</option>
               </optgroup>
               <optgroup label="Pacific Time Zone">
                   <option value="CA">California</option>
                   <option value="NV">Nevada</option>
                   <option value="OR">Oregon</option>
                   <option value="WA">Washington</option>
               </optgroup>
               <optgroup label="Mountain Time Zone">
                   <option value="AZ">Arizona</option>
                   <option value="CO">Colorado</option>
                   <option value="ID">Idaho</option>
                   <option value="MT">Montana</option><option value="NE">Nebraska</option>
                   <option value="NM">New Mexico</option>
                   <option value="ND">North Dakota</option>
                   <option value="UT">Utah</option>
                   <option value="WY">Wyoming</option>
               </optgroup>
               <optgroup label="Central Time Zone">
                   <option value="AL">Alabama</option>
                   <option value="AR">Arkansas</option>
                   <option value="IL">Illinois</option>
                   <option value="IA">Iowa</option>
                   <option value="KS">Kansas</option>
                   <option value="KY">Kentucky</option>
                   <option value="LA">Louisiana</option>
                   <option value="MN">Minnesota</option>
                   <option value="MS">Mississippi</option>
                   <option value="MO">Missouri</option>
                   <option value="OK">Oklahoma</option>
                   <option value="SD">South Dakota</option>
                   <option value="TX">Texas</option>
                   <option value="TN">Tennessee</option>
                   <option value="WI">Wisconsin</option>
               </optgroup>
               <optgroup label="Eastern Time Zone">
                   <option value="CT">Connecticut</option>
                   <option value="DE">Delaware</option>
                   <option value="FL">Florida</option>
                   <option value="GA">Georgia</option>
                   <option value="IN">Indiana</option>
                   <option value="ME">Maine</option>
                   <option value="MD">Maryland</option>
                   <option value="MA">Massachusetts</option>
                   <option value="MI">Michigan</option>
                   <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                   <option value="NY">New York</option>
                   <option value="NC">North Carolina</option>
                   <option value="OH">Ohio</option>
                   <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                   <option value="VT">Vermont</option><option value="VA">Virginia</option>
                   <option value="WV">West Virginia</option>
               </optgroup>
		</select>
		<div class="separator bottom"></div>
		<input type="button" id="select2_6_enable" class="btn btn-primary" value="Enable"/> 
		<input type="button" id="select2_6_disable" class="btn btn-warning" value="Disable"/>
		<div class="separator bottom"></div>
		<h5>Templating</h5>
		<select style="width: 100%;" id="select2_7">
			<optgroup label="Alaskan/Hawaiian Time Zone">
				<option value="AK">Alaska</option>
				<option value="HI">Hawaii</option>
			</optgroup>
			<optgroup label="Pacific Time Zone">
				<option value="CA">California</option>
				<option value="NV">Nevada</option>
				<option value="OR">Oregon</option>
				<option value="WA">Washington</option>
			</optgroup>
			<optgroup label="Mountain Time Zone">
				<option value="AZ">Arizona</option>
				<option value="CO">Colorado</option>
				<option value="ID">Idaho</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NM">New Mexico</option>
				<option value="ND">North Dakota</option>
				<option value="UT">Utah</option>
				<option value="WY">Wyoming</option>
			</optgroup>
			<optgroup label="Central Time Zone">
				<option value="AL">Alabama</option>
				<option value="AR">Arkansas</option>
				<option value="IL">Illinois</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="OK">Oklahoma</option>
				<option value="SD">South Dakota</option>
				<option value="TX">Texas</option>
				<option value="TN">Tennessee</option>
				<option value="WI">Wisconsin</option>
			</optgroup>
			<optgroup label="Eastern Time Zone">
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="IN">Indiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="OH">Ohio</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WV">West Virginia</option>
			</optgroup>
		</select>
		<div class="separator bottom"></div>
	</div>
</div>
<div class="separator line"></div>

<h3>Color picker &amp; Date pickers</h3>
<div class="form-horizontal">
	<div class="control-group">
		<label class="control-label">Color picker</label>
		<div class="controls">
			<input type="text" id="colorpickerColor" value="#D15353" /><br/><br/>
			<div id="colorpicker"></div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Date picker</label>
		<div class="controls">
			<input type="text" id="datepicker" value="" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Inline Date picker</label>
		<div class="controls">
			<div id="datepicker-inline"></div>
		</div>
	</div>
</div>
<br/>
