<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "auth";
$route['404_override'] = 'error/page_missing';
/************ Auth routing *****************/
$route['(register|login|home|profile|profile_match|profile_externalInfo)']='auth/$1';
$route['auth/login']= 'main/some';
$route['pshycometricRegistration']='auth/pshycometricRegistration';
/************ College routing *****************/
$route['list-of-colleges'] = "college";
$route['college-study-in-abroad'] = "college";
$route['study-in-uk-universities'] = "college/studyInUk";
$route['college/study-in-uk-universities'] = "college/studyInUk";
$route['study-in-usa-universities'] = "college/studyInUsa";
$route['college/study-in-usa-universities'] = "college/studyInUsa";
$route['study-in-australia-universities'] = "college/studyInAustralia";
$route['study-in-canada-universities'] = "college/studyInCanada";
$route['study-in-singapore-universities'] = "college/studyInSingapore";
$route['other-universities'] = "college/studyInOtherColleges";
$route['popular-college'] = "college/popularCollege";
$route['engineering-colleges'] = "course/engineeringCollege";

$route['mba-colleges'] = "course/mbaCollege";
$route['top-ranked-colleges'] = "course/topRankedColleges";

$route['college/collegePagination/(:num)'] = "college/collegePagination/$1";
$route['college/UkCollegePagination/(:num)'] = "college/UkCollegePagination/$1";
$route['college/UsaCollegePagination/(:num)'] = "college/UsaCollegePagination/$1";
$route['college/australiaCollegePagination/(:num)'] = "college/australiaCollegePagination/$1";
$route['college/canadaCollegePagination/(:num)'] = "college/canadaCollegePagination/$1";
$route['college/singaporeCollegePagination/(:num)'] = "college/singaporeCollegePagination/$1";
$route['college/otherCollegePagination/(:num)'] = "college/otherCollegePagination/$1";
$route['college/popularCollegePagination/(:num)'] = "college/popularCollegePagination/$1";
$route['college/searchCollegeByCourse/(:any)'] = "college/searchCollegeByCourse/$1";
$route['college/searchCollegePagination/(:any)'] = "college/searchCollegePagination/$1";
$route['college/filterLocationByCountry/(:num)'] = "college/filterLocationByCountry/$1";
$route['college/filterLocationByUniversity/(:num)'] = "college/filterLocationByUniversity/$1";
$route['college/filterByLocation/(:num)'] = "college/filterByLocation/$1";
$route['college/add-college/(:any)'] = "college/add_college/$1";
//$route['college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['uk-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['us-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['australia-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['canada-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['singapore-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['russia-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['ukraine-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['germany-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['uae-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";

$route['newzealand-college/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['other-colleges/(:any)/(:any)'] = "college/individualCollege/$1/$2";
$route['featured-college'] = "college/featuredCollege";
/************ Course routing *****************/
$route['course/(:any)/(:any)/(:any)/(:any)'] = "course/individualCourse/$1/$2/$3/$4";
/************ Gifted routing *****************/
$route['gifted'] = "quiz";
$route['gifted/report']='quiz/report';
$route['gifted/reportapi']='quiz/reportapi';
$route['gifted/api']='quiz/api';
$route['gifted/reportpdf']='quiz/reportpdf';
$route['gifted/high-roi']='quiz/high_roi';
$route['gifted/thankyou']='quiz/thankyou';
/************ Othere Page routing *****************/
$route['about-us'] = "about_us";
$route['privacy-policy'] = "static_controller/privacy_policy";
$route['disclaimer'] = "static_controller/disclaimer";
$route['about-us'] = "static_controller/about_us";
$route['contact-us'] = "static_controller/contact_us";
$route['terms'] = "static_controller/terms";
$route['gifted-intro'] = "static_controller/pshycometric";
$route['ielts-preparation'] = "static_controller/ielts_preparation";
$route['course-search'] = "course/searchUniversityByCourse";
/************ Othere Page routing *****************/
$route['admin']='admin/event';
$route['admin']='admin/data_upload';

/* End of file routes.php */
/* Location: ./application/config/routes.php */