<?php

// echo side_nav_header();
//
// echo side_nav_item('/monitoring/operations.php', 'Operations');
// echo side_nav_item('/monitoring/instrumentation.php', 'Instrumentation');

//OBSERVATORIES
$observatories = '/monitoring/observatories';

echo navGroup(navItem('/monitoring/observatories', 'Observatories'),
	navItem($observatories . '/barrow/', '<code>BRW</code> Barrow') .
	navItem($observatories . '/boulder/', '<code>BOU</code>  Boulder') .
	navItem($observatories . '/college/', '<code>CMO</code>  College') .
	navItem($observatories . '/deadhorse/', '<code>DED</code>  Deadhorse') .
	navItem($observatories . '/fredericksburg/', '<code>FRD</code>  Fredericksburg') .
	navItem($observatories . '/fresno/', '<code>FRN</code>  Fresno') .
	navItem($observatories . '/guam/', '<code>GUA</code>  Guam') .
	navItem($observatories . '/honolulu/', '<code>HON</code>  Honolulu') .
	navItem($observatories . '/newport/', '<code>NEW</code>  Newport') .
	navItem($observatories . '/sanjuan/', '<code>SJG</code>  San Juan') .
	navItem($observatories . '/shumagin/', '<code>SHU</code>  Shumagin') .
	navItem($observatories . '/sitka/', '<code>SIT</code>  Sitka') .
	navItem($observatories . '/stennis/', '<code>BSL</code>  Stennis') .
	navItem($observatories . '/tucson/', '<code>TUC</code>  Tucson')
);


// $observatories = '/monitoring/observatories';
//
// echo side_nav_toggle_group($observatories . '/', 'Observatories',
// 		side_nav_item($observatories . '/barrow/', '<code>BRW</code> Barrow') .
// 		side_nav_item($observatories . '/boulder/', '<code>BOU</code>  Boulder') .
// 		side_nav_item($observatories . '/college/', '<code>CMO</code>  College') .
// 		side_nav_item($observatories . '/deadhorse/', '<code>DED</code>  Deadhorse') .
// 		side_nav_item($observatories . '/fredericksburg/', '<code>FRD</code>  Fredericksburg') .
// 		side_nav_item($observatories . '/fresno/', '<code>FRN</code>  Fresno') .
// 		side_nav_item($observatories . '/guam/', '<code>GUA</code>  Guam') .
// 		side_nav_item($observatories . '/honolulu/', '<code>HON</code>  Honolulu') .
// 		side_nav_item($observatories . '/newport/', '<code>NEW</code>  Newport') .
// 		side_nav_item($observatories . '/sanjuan/', '<code>SJG</code>  San Juan') .
// 		side_nav_item($observatories . '/shumagin/', '<code>SHU</code>  Shumagin') .
// 		side_nav_item($observatories . '/sitka/', '<code>SIT</code>  Sitka') .
// 		side_nav_item($observatories . '/stennis/', '<code>BSL</code>  Stennis') .
// 		side_nav_item($observatories . '/tucson/', '<code>TUC</code>  Tucson')
// 	);
//
// echo side_nav_item('/monitoring/links.php', 'International Observatory Programs');

//echo side_nav_footer();