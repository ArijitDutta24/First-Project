<?php

if (!defined('INSTALL_DIR')) {
  exit;
}

//==========================
// COUNTRIES
//==========================

@mysqli_query($GLOBALS["___msw_sqli"], "drop table if exists `" . DB_PREFIX . "countries`");
@mysqli_query($GLOBALS["___msw_sqli"], "create table `" . DB_PREFIX . "countries` (
`id` int(4) unsigned not null auto_increment,
`cName` varchar(250) not null default '',
`cISO` varchar(3) not null,
`cISO_2` char(2) not null default '',
`iso4217` varchar(50) not null default '0',
`enCountry` enum('yes','no') not null default 'yes',
`localPickup` enum('yes','no') not null default 'no',
primary key (`id`)
) " . $tableType);

mc_upgradeLog('New countries table created');

@mysqli_query($GLOBALS["___msw_sqli"], "insert into `" . DB_PREFIX . "countries` (`id`, `cName`, `cISO`, `cISO_2`, `iso4217`, `enCountry`, `localPickup`) values
(1, 'Afghanistan', 'AFG', 'AF', '004', 'no', 'no'),
(2, 'Albania', 'ALB', 'AL', '008', 'no', 'no'),
(3, 'Algeria', 'DZA', 'DZ', '012', 'no', 'no'),
(4, 'Andorra', 'AND', 'AD', '020', 'no', 'no'),
(5, 'Angola', 'AGO', 'AO', '024', 'no', 'no'),
(6, 'Antigua and Barbuda', 'ATG', 'AG', '028', 'no', 'no'),
(7, 'Argentina', 'ARG', 'AR', '032', 'no', 'no'),
(8, 'Armenia', 'ARM', 'AM', '051', 'no', 'no'),
(9, 'Australia', 'AUS', 'AU', '036', 'no', 'no'),
(10, 'Austria', 'AUT', 'AT', '040', 'no', 'no'),
(11, 'Azerbaijan', 'AZE', 'AZ', '031', 'no', 'no'),
(12, 'Bahamas', 'BHS', 'BS', '044', 'no', 'no'),
(13, 'Bahrain', 'BHR', 'BH', '048', 'no', 'no'),
(14, 'Bangladesh', 'BGD', 'BD', '050', 'no', 'no'),
(15, 'Barbados', 'BRB', 'BB', '052', 'no', 'no'),
(16, 'Belarus', 'BLR', 'BY', '112', 'no', 'no'),
(17, 'Belgium', 'BEL', 'BE', '056', 'no', 'no'),
(18, 'Belize', 'BLZ', 'BZ', '084', 'no', 'no'),
(19, 'Benin', 'BEN', 'BJ', '204', 'no', 'no'),
(20, 'Bhutan', 'BTN', 'BT', '064', 'no', 'no'),
(21, 'Bolivia', 'BOL', 'BO', '068', 'no', 'no'),
(22, 'Bosnia and Herzegovina', 'BIH', 'BA', '070', 'no', 'no'),
(23, 'Botswana', 'BWA', 'BW', '072', 'no', 'no'),
(24, 'Brazil', 'BRA', 'BR', '076', 'no', 'no'),
(25, 'Brunei', 'BRN', 'BN', '096', 'no', 'no'),
(26, 'Bulgaria', 'BGR', 'BG', '100', 'no', 'no'),
(27, 'Burkina Faso', 'BFA', 'BF', '854', 'no', 'no'),
(28, 'Burundi', 'BDI', 'BI', '108', 'no', 'no'),
(29, 'Cambodia', 'KHM', 'KH', '116', 'no', 'no'),
(30, 'Cameroon', 'CMR', 'CM', '120', 'no', 'no'),
(31, 'Canada', 'CAN', 'CA', '124', 'no', 'no'),
(32, 'Cape Verde', 'CPV', 'CV', '132', 'no', 'no'),
(33, 'Central African Republic', 'CAF', 'CF', '140', 'no', 'no'),
(34, 'Chad', 'TCD', 'TD', '148', 'no', 'no'),
(35, 'Chile', 'CHL', 'CL', '152', 'no', 'no'),
(36, 'China', 'CHN', 'CN', '156', 'no', 'no'),
(37, 'Colombia', 'COL', 'CO', '170', 'no', 'no'),
(38, 'Comoros', 'COM', 'KM', '174', 'no', 'no'),
(39, 'Congo', 'COG', 'CG', '178', 'no', 'no'),
(41, 'Costa Rica', 'CRI', 'CK', '184', 'no', 'no'),
(42, 'Cote d\'Ivoire', 'CIV', 'CR', '188', 'no', 'no'),
(43, 'Croatia', 'HRV', 'CI', '384', 'no', 'no'),
(44, 'Cuba', 'CUB', 'HR', '191', 'no', 'no'),
(45, 'Cyprus', 'CYP', 'CU', '192', 'no', 'no'),
(46, 'Czech Republic', 'CZE', 'CY', '196', 'no', 'no'),
(47, 'Denmark', 'DNK', 'DK', '208', 'no', 'no'),
(48, 'Djibouti', 'DJI', 'DJ', '262', 'no', 'no'),
(49, 'Dominica', 'DMA', 'DM', '212', 'no', 'no'),
(50, 'Dominican Republic', 'DOM', 'DO', '214', 'no', 'no'),
(51, 'Ecuador', 'ECU', 'EC', '218', 'no', 'no'),
(52, 'Egypt', 'EGY', 'EG', '818', 'no', 'no'),
(53, 'El Salvador', 'SLV', 'SV', '222', 'no', 'no'),
(54, 'Equatorial Guinea', 'GNQ', 'GQ', '226', 'no', 'no'),
(55, 'Eritrea', 'ERI', 'ER', '232', 'no', 'no'),
(56, 'Estonia', 'EST', 'EE', '233', 'no', 'no'),
(57, 'Ethiopia', 'ETH', 'ET', '231', 'no', 'no'),
(58, 'Fiji', 'FJI', 'FJ', '242', 'no', 'no'),
(59, 'Finland', 'FIN', 'FI', '246', 'no', 'no'),
(60, 'France', 'FRA', 'FR', '250', 'no', 'no'),
(61, 'Gabon', 'GAB', 'GA', '266', 'no', 'no'),
(62, 'Gambia', 'GMB', 'GM', '270', 'no', 'no'),
(63, 'Georgia', 'GEO', 'GE', '268', 'no', 'no'),
(64, 'Germany', 'DEU', 'DE', '276', 'no', 'no'),
(65, 'Ghana', 'GHA', 'GH', '288', 'no', 'no'),
(66, 'Greece', 'GRC', 'GR', '300', 'no', 'no'),
(67, 'Grenada', 'GRD', 'GD', '308', 'no', 'no'),
(68, 'Guatemala', 'GTM', 'GT', '320', 'no', 'no'),
(69, 'Guinea', 'GIN', 'GN', '324', 'no', 'no'),
(70, 'Guinea-Bissau', 'GNB', 'GW', '624', 'no', 'no'),
(71, 'Guyana', 'GUY', 'GY', '328', 'no', 'no'),
(72, 'Haiti', 'HTI', 'HT', '332', 'no', 'no'),
(73, 'Honduras', 'HND', 'HN', '340', 'no', 'no'),
(74, 'Hungary', 'HUN', 'HU', '348', 'no', 'no'),
(75, 'Iceland', 'ISL', 'IS', '352', 'no', 'no'),
(76, 'India', 'IND', 'IN', '356', 'no', 'no'),
(77, 'Indonesia', 'IDN', 'ID', '360', 'no', 'no'),
(78, 'Iran', 'IRN', 'IR', '364', 'no', 'no'),
(79, 'Iraq', 'IRQ', 'IQ', '368', 'no', 'no'),
(80, 'Ireland', 'IRL', 'IE', '372', 'no', 'no'),
(81, 'Israel', 'ISR', 'IL', '376', 'no', 'no'),
(82, 'Italy', 'ITA', 'IT', '380', 'no', 'no'),
(83, 'Jamaica', 'JAM', 'JM', '388', 'no', 'no'),
(84, 'Japan', 'JPN', 'JP', '392', 'no', 'no'),
(85, 'Jordan', 'JOR', 'JO', '400', 'no', 'no'),
(86, 'Kazakhstan', 'KAZ', 'KZ', '398', 'no', 'no'),
(87, 'Kenya', 'KEN', 'KE', '404', 'no', 'no'),
(88, 'Kiribati', 'KIR', 'KI', '296', 'no', 'no'),
(89, 'South Korea', 'KOR', 'KR', '410', 'no', 'no'),
(90, 'North Korea', 'PRK', 'KP', '408', 'no', 'no'),
(91, 'Kuwait', 'KWT', 'KW', '414', 'no', 'no'),
(92, 'Kyrgyzstan', 'KGZ', 'KG', '417', 'no', 'no'),
(93, 'Laos', 'LAO', 'LA', '418', 'no', 'no'),
(94, 'Latvia', 'LVA', 'LV', '428', 'no', 'no'),
(95, 'Lebanon', 'LBN', 'LB', '422', 'no', 'no'),
(96, 'Lesotho', 'LSO', 'LS', '426', 'no', 'no'),
(97, 'Liberia', 'LBR', 'LR', '430', 'no', 'no'),
(98, 'Libya', 'LBY', 'LY', '434', 'no', 'no'),
(99, 'Liechtenstein', 'LIE', 'LI', '438', 'no', 'no'),
(100, 'Lithuania', 'LTU', 'LT', '440', 'no', 'no'),
(101, 'Luxembourg', 'LUX', 'LU', '442', 'no', 'no'),
(102, 'Macedonia', 'MKD', 'MK', '807', 'no', 'no'),
(103, 'Madagascar', 'MDG', 'MG', '450', 'no', 'no'),
(104, 'Malawi', 'MWI', 'MW', '454', 'no', 'no'),
(105, 'Malaysia', 'MYS', 'MY', '458', 'no', 'no'),
(106, 'Maldives', 'MDV', 'MV', '462', 'no', 'no'),
(107, 'Mali', 'MLI', 'ML', '466', 'no', 'no'),
(108, 'Malta', 'MLT', 'MT', '470', 'no', 'no'),
(109, 'Marshall Islands', 'MHL', 'MH', '584', 'no', 'no'),
(110, 'Mauritania', 'MRT', 'MR', '478', 'no', 'no'),
(111, 'Mauritius', 'MUS', 'MU', '480', 'no', 'no'),
(112, 'Mexico', 'MEX', 'MX', '484', 'no', 'no'),
(113, 'Micronesia', 'FSM', 'FM', '583', 'no', 'no'),
(114, 'Moldova', 'MDA', 'MD', '498', 'no', 'no'),
(115, 'Monaco', 'MCO', 'MC', '492', 'no', 'no'),
(116, 'Mongolia', 'MNG', 'MN', '496', 'no', 'no'),
(117, 'Montenegro', 'MNE', 'ME', '499', 'no', 'no'),
(118, 'Morocco', 'MAR', 'MA', '504', 'no', 'no'),
(119, 'Mozambique', 'MOZ', 'MZ', '508', 'no', 'no'),
(120, 'Myanmar (Burma)', 'MMR', 'MM', '104', 'no', 'no'),
(121, 'Namibia', 'NAM', 'NA', '516', 'no', 'no'),
(122, 'Nauru', 'NRU', 'NR', '520', 'no', 'no'),
(123, 'Nepal', 'NPL', 'NP', '524', 'no', 'no'),
(124, 'Netherlands', 'NLD', 'NL', '528', 'no', 'no'),
(125, 'New Zealand', 'NZL', 'NZ', '554', 'no', 'no'),
(126, 'Nicaragua', 'NIC', 'NI', '558', 'no', 'no'),
(127, 'Niger', 'NER', 'NE', '562', 'no', 'no'),
(128, 'Nigeria', 'NGA', 'NG', '566', 'no', 'no'),
(129, 'Norway', 'NOR', 'NO', '578', 'no', 'no'),
(130, 'Oman', 'OMN', 'OM', '512', 'no', 'no'),
(131, 'Pakistan', 'PAK', 'PK', '586', 'no', 'no'),
(132, 'Palau', 'PLW', 'PW', '585', 'no', 'no'),
(133, 'Panama', 'PAN', 'PA', '591', 'no', 'no'),
(134, 'Papua New Guinea', 'PNG', 'PG', '598', 'no', 'no'),
(135, 'Paraguay', 'PRY', 'PY', '600', 'no', 'no'),
(136, 'Peru', 'PER', 'PE', '604', 'no', 'no'),
(137, 'Philippines', 'PHL', 'PH', '608', 'no', 'no'),
(138, 'Poland', 'POL', 'PL', '616', 'no', 'no'),
(139, 'Portugal', 'PRT', 'PT', '620', 'no', 'no'),
(140, 'Qatar', 'QAT', 'QA', '634', 'no', 'no'),
(141, 'Romania', 'ROU', 'RO', '642', 'no', 'no'),
(142, 'Russian Federation', 'RUS', 'RU', '643', 'no', 'no'),
(143, 'Rwanda', 'RWA', 'RW', '646', 'no', 'no'),
(144, 'Saint Kitts and Nevis', 'KNA', 'KN', '659', 'no', 'no'),
(145, 'Saint Lucia', 'LCA', 'LC', '662', 'no', 'no'),
(146, 'Saint Vincent and the Grenadines', 'VCT', 'VC', '670', 'no', 'no'),
(147, 'Samoa', 'WSM', 'WS', '882', 'no', 'no'),
(148, 'San Marino', 'SMR', 'SM', '674', 'no', 'no'),
(149, 'Sao Tome and Principe', 'STP', 'ST', '678', 'no', 'no'),
(150, 'Saudi Arabia', 'SAU', 'SA', '682', 'no', 'no'),
(151, 'Senegal', 'SEN', 'SN', '686', 'no', 'no'),
(152, 'Serbia', 'SRB', 'RS', '688', 'no', 'no'),
(153, 'Seychelles', 'SYC', 'SC', '690', 'no', 'no'),
(154, 'Sierra Leone', 'SLE', 'SL', '694', 'no', 'no'),
(155, 'Singapore', 'SGP', 'SG', '702', 'no', 'no'),
(156, 'Slovakia', 'SVK', 'SK', '703', 'no', 'no'),
(157, 'Slovenia', 'SVN', 'SI', '705', 'no', 'no'),
(159, 'Somalia', 'SOM', 'SO', '706', 'no', 'no'),
(160, 'South Africa', '+27', 'ZA', '710', 'no', 'no'),
(161, 'Spain', 'ESP', 'ES', '724', 'no', 'no'),
(162, 'Sri Lanka', 'LKA', 'LK', '144', 'no', 'no'),
(163, 'Sudan', 'SDN', 'SD', '736', 'no', 'no'),
(164, 'Suriname', 'SUR', 'SR', '740', 'no', 'no'),
(165, 'Swaziland', 'SWZ', 'SZ', '748', 'no', 'no'),
(166, 'Sweden', 'SWE', 'SE', '752', 'no', 'no'),
(167, 'Switzerland', 'CHE', 'CH', '756', 'no', 'no'),
(168, 'Syrian Arab Republic', 'SYR', 'SY', '760', 'no', 'no'),
(169, 'Tajikistan', 'TJK', 'TJ', '762', 'no', 'no'),
(170, 'Tanzania', 'TZA', 'TZ', '834', 'no', 'no'),
(171, 'Thailand', 'THA', 'TH', '764', 'no', 'no'),
(172, 'Timor-Leste (East Timor)', 'TLS', 'TL', '626', 'no', 'no'),
(173, 'Togo', 'TGO', 'TG', '768', 'no', 'no'),
(174, 'Tonga', 'TON', 'TO', '776', 'no', 'no'),
(175, 'Trinidad and Tobago', 'TTO', 'TT', '780', 'no', 'no'),
(176, 'Tunisia', 'TUN', 'TN', '788', 'no', 'no'),
(177, 'Turkey', 'TUR', 'TR', '792', 'no', 'no'),
(178, 'Turkmenistan', 'TKM', 'TM', '795', 'no', 'no'),
(179, 'Tuvalu', 'TUV', 'TV', '798', 'no', 'no'),
(180, 'Uganda', 'UGA', 'UG', '800', 'no', 'no'),
(181, 'Ukraine', 'UKR', 'UA', '804', 'no', 'no'),
(182, 'United Arab Emirates', 'ARE', 'AE', '784', 'no', 'no'),
(183, 'United Kingdom', 'GBR', 'GB', '826', 'no', 'no'),
(184, 'United States', 'USA', 'US', '840', 'no', 'no'),
(185, 'Uruguay', 'URY', 'UY', '858', 'no', 'no'),
(186, 'Uzbekistan', 'UZB', 'UZ', '860', 'no', 'no'),
(187, 'Vanuatu', 'VUT', 'VU', '548', 'no', 'no'),
(188, 'Vatican City', 'VAT', 'VA', '336', 'no', 'no'),
(189, 'Venezuela', 'VEN', 'VE', '862', 'no', 'no'),
(190, 'Vietnam', 'VNM', 'VN', '704', 'no', 'no'),
(191, 'Yemen', 'YEM', 'YE', '887', 'no', 'no'),
(192, 'Zambia', 'ZMB', 'ZM', '894', 'no', 'no'),
(193, 'Zimbabwe', 'ZWE', 'ZW', '716', 'no', 'no'),
(202, 'Christmas Island', 'CXR', 'CX', '162', 'no', 'no'),
(203, 'Cocos (Keeling) Islands', 'CCK', 'CC', '166', 'no', 'no'),
(205, 'Heard Island and McDonald Islands', 'HMD', 'HM', '334', 'no', 'no'),
(206, 'Norfolk Island', 'NFK', 'NF', '574', 'no', 'no'),
(207, 'New Caledonia', 'NCL', 'NC', '540', 'no', 'no'),
(208, 'French Polynesia', 'PYF', 'PF', '258', 'no', 'no'),
(209, 'Mayotte', 'MYT', 'YT', '175', 'no', 'no'),
(210, 'Saint Barthelemy', 'GLP', 'BL', '652', 'no', 'no'),
(211, 'Saint Martin', 'GLP', 'MF', '663', 'no', 'no'),
(212, 'Saint Pierre and Miquelon', 'SPM', 'PM', '666', 'no', 'no'),
(213, 'Wallis and Futuna', 'WLF', 'WF', '876', 'no', 'no'),
(214, 'French Southern and Antarctic Lands', 'ATF', 'TF', '260', 'no', 'no'),
(216, 'Bouvet Island', 'BVT', 'BV', '074', 'no', 'no'),
(217, 'Cook Islands', 'COK', 'CD', '180', 'no', 'no'),
(218, 'Niue', 'NIU', 'NU', '570', 'no', 'no'),
(219, 'Tokelau', 'TKL', 'TK', '772', 'no', 'no'),
(220, 'Guernsey', 'GGY', 'GG', '831', 'no', 'no'),
(221, 'Isle of Man', 'IMN', 'IM', '833', 'no', 'no'),
(222, 'Jersey', 'JEY', 'JE', '832', 'no', 'no'),
(223, 'Anguilla', 'AIA', 'AI', '660', 'no', 'no'),
(224, 'Bermuda', 'BMU', 'BM', '060', 'no', 'no'),
(225, 'British Indian Ocean Territory', 'IOT', 'IO', '086', 'no', 'no'),
(227, 'British Virgin Islands', 'VGB', 'VG', '092', 'no', 'no'),
(228, 'Cayman Islands', 'CYM', 'KY', '136', 'no', 'no'),
(229, 'Falkland Islands (Islas Malvinas)', 'FLK', 'FK', '238', 'no', 'no'),
(230, 'Gibraltar', 'GIB', 'GI', '292', 'no', 'no'),
(231, 'Montserrat', 'MSR', 'MS', '500', 'no', 'no'),
(232, 'Pitcairn Islands', 'PCN', 'PN', '612', 'no', 'no'),
(233, 'Saint Helena', 'SHN', 'SH', '654', 'no', 'no'),
(234, 'South Georgia & South Sandwich Islands', 'SGS', 'GS', '239', 'no', 'no'),
(235, 'Turks and Caicos Islands', 'TCA', 'TC', '796', 'no', 'no'),
(236, 'Northern Mariana Islands', 'MNP', 'MP', '580', 'no', 'no'),
(237, 'Puerto Rico', 'PRI', 'PR', '630', 'no', 'no'),
(238, 'American Samoa', 'ASM', 'AS', '016', 'no', 'no'),
(240, 'Guam', 'GUM', 'GU', '316', 'no', 'no'),
(248, 'US Virgin Islands', 'VIR', 'VI', '850', 'no', 'no'),
(250, 'Hong Kong', 'HKG', 'HK', '344', 'no', 'no'),
(251, 'Macau', 'MAC', 'MO', '446', 'no', 'no'),
(252, 'Faroe Islands', 'FRO', 'FO', '234', 'no', 'no'),
(253, 'Greenland', 'GRL', 'GL', '304', 'no', 'no'),
(254, 'French Guiana', 'GUF', 'GF', '254', 'no', 'no'),
(255, 'Guadeloupe', 'GLP', 'GP', '312', 'no', 'no'),
(256, 'Martinique', 'MTQ', 'MQ', '474', 'no', 'no'),
(257, 'Reunion', 'REU', 'RE', '638', 'no', 'no'),
(259, 'Aruba', 'ABW', 'AW', '533', 'no', 'no'),
(260, 'Netherlands Antilles', 'ANT', 'AN', '530', 'no', 'no'),
(261, 'Svalbard and Jan Mayen', 'SJM', 'SJ', '744', 'no', 'no'),
(264, 'Australian Antarctic Territory', 'ATA', 'AQ', '010', 'no', 'no')");

mc_upgradeLog('New countries data inserted');

?>
