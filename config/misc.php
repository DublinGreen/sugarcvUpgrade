<?php

return [
	'withdrawAdminFee'	=>	5, // in percent
	'bonus'	=>	[
		'group'		=>	1, // in percent
		'override'	=>	12, // in percent
		'pairing'	=>	500, // in USD
		'calculation' => [ // in percent
			'cash'	=>	70,
			'promotion'	=>	30
		],
	],
	'shares' => [
		'sellRange'	=>	0.003,
		'sellValue' => [ // all values in percent
	        'cash'  =>  48,
	        'buyBack'   =>  30,
	        'point' =>  12,
	        'fee'   =>  10,
	    ]
	],
	'countries' => [
		'India'	=>	[
			'currency'	=>	'IND',
			'buy'	=>	'35.00',
			'sell'	=>	'30.00',
			'banks'	=>	[
				'SBI Bank',
				'HDFC Bank',
				'ICICI Bank',
				'Axis Bank',
				'Union Bank',
			]
		],
	],
	'states' => [
		'India'	=> [
			'AR' => 'Arunachal Pradesh',
			'AR' => 'Arunachal Pradesh',
			'AS' => 'Assam',
			'BR' => 'Bihar',
			'CT' => 'Chhattisgarh',
			'GA' => 'Goa',
			'GJ' => 'Gujarat',
			'HR' => 'Haryana',
			'HP' => 'Himachal Pradesh',
			'JK' => 'Jammu and Kashmir',
			'JH' => 'Jharkhand',
			'KA' => 'Karnataka',
			'KL' => 'Kerala',
			'MP' => 'Madhya Pradesh',
			'MH' => 'Maharashtra',
			'MN' => 'Manipur',
			'ML' => 'Meghalaya',
			'MZ' => 'Mizoram',
			'NL' => 'Nagaland',
			'OR' => 'Odisha',
			'PB' => 'Punjab',
			'RJ' => 'Rajasthan',
			'SK' => 'Sikkim',
			'TN' => 'Tamil Nadu',
			'TG' => 'Telangana',
			'TR' => 'Tripura',
			'UP' => 'Uttar Pradesh',
			'UT' => 'Uttarakhand',
			'WB' => 'West Bengal',
			'AN' => 'Andaman and Nicobar Islands',
			'CH' => 'Chandigarh',
			'DN' => 'Dadra and Nagar Haveli',
			'DD' => 'Daman and Diu',
			'LD' => 'Lakshadweep',
			'DL' => 'National Capital Territory of Delhi',
			'PY' => 'Puducherry'
		],
	],
	'coin' => [
		'fee' => 2,
		'btc' => '38azbfm9iydhsjfkzzfawx4p7aljsaiwdt',
		'lite' => 'LbkQLTugNQaV8QMQynCMPVbH5h7CzjbUEH',
		'doge' => 'dso6du3bwtmun13k4ew6srjaxsfazc6bbh',
		'eth' => '0x7634eb364d6a0ff9fedbb17e8308d36872b8059d',
		'bcy' => 'CCqqcruarqEH9w8dAcdYxTCSvZ7hD73DgF'
	]
];