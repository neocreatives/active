<div class="heading-buttons">
	<h4>OCCAMS VISUALISER </h4><span class="hidden-phone">&nbsp;|&nbsp; The OCCAMS data can be conceived in 3 main dimensional groups the patients' group, the timeline group, and the ICU events' group. The ICU events' are either are records of lab results or bedside actions or monitoring.</span>
	<div class="buttons pull-right">
		
		<a href="#" class="btn-action border-only circle glyphicons cardio btn-primary hidden-phone" title=""><i></i></a>
	</div>
	<div class="clearfix"></div>
</div>
<div class="separator bottom"></div>

<h5>Heart Rate</h5>
<div id="placeholder"></div>
<div id="overview" style="height: 40px;"></div>
<div class="btn-group separator top">
	<button id="websiteTraffic24Hours" class="btn btn-large btn-primary">24 <?php echo $translate->_('hours'); ?></button>
	<button id="websiteTraffic7Days" class="btn btn-large btn-primary">7 <?php echo $translate->_('days'); ?></button>
	<button id="websiteTraffic14Days" class="btn btn-large btn-primary">14 <?php echo $translate->_('days'); ?></button>
	<button id="websiteTrafficClear" class="btn btn-large btn-primary" disabled="disabled"><?php echo $translate->_('clear'); ?></button>
</div>
<div class="separator line"></div>

<div class="row-fluid">
	<div class="span6">
		<div class="widget widget-4">
			<div class="widget-head">
				<h4 class="heading">Show Me:</h4>
			</div>
			<div class="widget-body list">
				<ul>
					<li><span class="count">140/90 <span class="sparkline"></span></span> <?php echo $translate->_('Blood Pressure'); ?></li>
					<li><span class="count">5.25 <span class="sparkline"></span></span> <?php echo $translate->_(' Cardiac Output'); ?></li>
					<li><span class="count">27 (mEq/L) <span class="sparkline"></span></span> <?php echo $translate->_('Carbon Dioxide'); ?></li>
					<li><span class="count">75 <span class="sparkline"></span></span><?php echo $translate->_('Heart Rate'); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="span6">
		<div class="widget widget-4">
			<div class="widget-head">
			</div>
			<div class="widget-body list">
				<ul>
					<li><span class="count">98 <span class="sparkline"></span></span> <?php echo $translate->_('Oxygen Saturation'); ?></li>
					<li><span class="count">80 <span class="sparkline"></span></span> <?php echo $translate->_('Segment Level'); ?></li>
					<li><span class="count">37 <span class="sparkline"></span></span> <?php echo $translate->_('Temperature'); ?></li>
					<li><span class="count">42 <span class="sparkline"></span></span> <?php echo $translate->_('Respiration Rate'); ?></li>
				</ul>
			</div>
		</div>
       </div></div> 
        <div class="separator bottom line"></div>

<div class="widget widget-2 widget-tabs widget-tabs-2">
	<div class="widget-head">
		<ul>
			<li class="active"><a class="glyphicons coffe_cup" href="#dataTableSourcesTab" data-toggle="tab"><i></i><?php echo $translate->_('Comparative Data Sets'); ?></a></li>
			<li><a class="glyphicons share_alt" href="#dataTableRefferingTab" data-toggle="tab"><i></i><?php echo $translate->_('Statistical Summaries'); ?></a></li>
		</ul>
	</div>
	<div class="widget-body">
		<div class="tab-content">
			<div class="tab-pane active" id="dataTableSourcesTab">
				<div id="dataTableSources"></div>
			</div>
			<div class="tab-pane" id="dataTableRefferingTab">
				<div id="dataTableReffering"></div>
			</div>
		</div>
	</div>
</div>
<div class="separator line"></div>

	</div>
	<div class="span4">
		<div class="widget widget-4">
				<div id="pie" style="height: 200px;"></div>
			</div>
		</div>
	</div>
    
</div>
