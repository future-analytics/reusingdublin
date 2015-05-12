<?php

foreach($data1 as $marker1)
{
	$lats  = $marker1['latitude'];
    $lons  = $marker1['longitude'];
    $lat  = $marker1['latitude'];
    $lon  = $marker1['longitude'];
    $email  = $marker1['adress'];
	$owners  = $marker1['owner'];
	$zon =  $marker1['zoning'];
	$plan =  $marker1['planningistory'];
	$size =  $marker1['size'];
	$heritage =  $marker1['heritage'];
	$derelict =  $marker1['derelict'];
	$desription =  $marker1['desription'];
	$suggesteduses =  $marker1['Suggesteduses'];
	?>

	var lats  = "<?php echo $lats;?>";
	drr.push(lats);
	var lons  = "<?php echo $lons;?>";
	err.push(lons);
	var lati  = "<?php echo $lat;?>";
	arrr.push(lati);
	var longi  = "<?php echo $lon;?>";
	brrr.push(longi);
	var emails  = "<?php echo $email;?>";
	crrr.push(emails);
	var zone = "<?php echo $zon;?>";
	drrr.push(zone);
	var planning = "<?php echo $plan;?>";
	errr.push(planning);
	var size = "<?php echo $size;?>";
	frr.push(size);
	var heritages = "<?php echo $heritage;?>";
	grr.push(heritages);
	var derelicts = "<?php echo $derelict;?>";
	hrrr.push(derelicts);
	var desriptions = "<?php echo $desription;?>";
	irrr.push(desriptions);
	var owners = "<?php echo $owners;?>";
	jrrr.push(owners);
	var suggesteduses = "<?php echo $suggesteduses;?>";
	trrr.push(suggesteduses);
	<?php
}
