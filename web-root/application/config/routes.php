<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['senate'] = 'senate/index';

$route['senate/list'] = 'senate/list';

$route['senate/list/democratic-party'] = 'senate/democratic_party';
$route['senate/list/republican-party'] = 'senate/republican_party';
$route['senate/list/independent-party'] = 'senate/independent_party';

$route['senate/list/class-i-senators'] = 'senate/class_i_senators';
$route['senate/list/class-ii-senators'] = 'senate/class_ii_senators';
$route['senate/list/class-iii-senators'] = 'senate/class_iii_senators';

$route['senate/list/male-senators'] = 'senate/male_senators';
$route['senate/list/female-senators'] = 'senate/female_senators';

$route['senate/list/majority-leaders'] = 'senate/majority_leaders';
$route['senate/list/minority-leaders'] = 'senate/minority_leaders';

$route['senate/list/african-american-senators'] = 'senate/african_american_senators';
$route['senate/list/asian-american-senators'] = 'senate/asian_american_senators';
$route['senate/list/hispanic-american-senators'] = 'senate/hispanic_american_senators';
$route['senate/list/white-senators'] = 'senate/white_senators';

$route['senate/state/([a-z-]+)'] = 'senate/state/$1';
$route['senate/senator/([a-z-]+)'] = 'senate/senator/$1';

$route['state/([a-z-]+)'] = 'state/index/$1';

$route['privacy-policy'] = 'legal/privacy_policy';
$route['terms-of-use'] = 'legal/terms_of_use';