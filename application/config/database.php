<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'alternate';
$active_record = TRUE;

$db['alternate']['hostname'] = 'mu-development.ccbae3jhwwnq.us-west-2.rds.amazonaws.com';
$db['alternate']['username'] = 'mu_development';
$db['alternate']['password'] = 'mudev2015!';
$db['alternate']['database'] = 'meetuniv_video';
$db['alternate']['dbdriver'] = 'mysql';
$db['alternate']['dbprefix'] = '';
$db['alternate']['pconnect'] = TRUE;
$db['alternate']['db_debug'] = TRUE;
$db['alternate']['cache_on'] = FALSE;
$db['alternate']['cachedir'] = '';
$db['alternate']['char_set'] = 'utf8';
$db['alternate']['dbcollat'] = 'utf8_general_ci';
$db['alternate']['swap_pre'] = '';
$db['alternate']['autoinit'] = TRUE;
$db['alternate']['stricton'] = FALSE;

$active_group = 'db_campaign';
$active_record = TRUE;

$db['db_campaign']['hostname'] = 'mu-development.ccbae3jhwwnq.us-west-2.rds.amazonaws.com';
$db['db_campaign']['username'] = 'mu_development';
$db['db_campaign']['password'] = 'mudev2015!';
$db['db_campaign']['database'] = 'meetuniv_campaign';
$db['db_campaign']['dbdriver'] = 'mysql';
$db['db_campaign']['dbprefix'] = '';
$db['db_campaign']['pconnect'] = TRUE;
$db['db_campaign']['db_debug'] = TRUE;
$db['db_campaign']['cache_on'] = FALSE;
$db['db_campaign']['cachedir'] = '';
$db['db_campaign']['char_set'] = 'utf8';
$db['db_campaign']['dbcollat'] = 'utf8_general_ci';
$db['db_campaign']['swap_pre'] = '';
$db['db_campaign']['autoinit'] = TRUE;
$db['db_campaign']['stricton'] = FALSE;


$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'mu-development.ccbae3jhwwnq.us-west-2.rds.amazonaws.com';
$db['default']['username'] = 'mu_development';
$db['default']['password'] = 'mudev2015!';
$db['default']['database'] = 'mu_development';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */