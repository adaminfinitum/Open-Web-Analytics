<div class="owa_reportSectionContent">

</div>

<div class="owa_reportSectionHeader">
	There were <?php echo $summary_stats['sessions'];?> visits from Referring Web Sites.
</div>

<div class="owa_reportSectionContent">
<?php include('report_traffic_summary_metrics.tpl');?>	
</div>

<div class="owa_reportSectionHeader">
	Top Referring Web Sites
</div>

<div class="owa_reportSectionContent">
	<?php include('report_referers.tpl');?>
</div>