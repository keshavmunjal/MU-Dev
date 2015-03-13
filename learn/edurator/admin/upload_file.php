<?php
// +------------------------------------------------------------------------+
// | PHP Melody ( www.phpsugar.com )
// +------------------------------------------------------------------------+
// | PHP Melody IS NOT FREE SOFTWARE
// | If you have downloaded this software from a website other
// | than www.phpsugar.com or if you have received
// | this software from someone who is not a representative of
// | PHPSUGAR, you are involved in an illegal activity.
// | ---
// | In such case, please contact: support@phpsugar.com.
// +------------------------------------------------------------------------+
// | Developed by: PHPSUGAR (www.phpsugar.com) / support@phpsugar.com
// | Copyright: (c) 2004-2013 PHPSUGAR. All rights reserved.
// +------------------------------------------------------------------------+

// Session Cookie workaround
if (isset($_POST["PHPSESSID"])) {
	session_id($_POST["PHPSESSID"]);
} else if (isset($_GET["PHPSESSID"])) {
	session_id($_GET["PHPSESSID"]);
}

session_start();

require_once('../config.php');
include_once('functions.php');
include_once( ABSPATH . 'include/user_functions.php');
include_once( ABSPATH . 'include/islogged.php');

$error_msg = '';
$allow = 1;

if ( ! $conn_id)
{
	if ( ! ($conn_id = db_connect()))
	{
		$allow = 0;
	}
}

$allowed_ext 	= array('.flv', '.mp4', '.mov', '.wmv', '.divx', '.avi', '.mkv', 
						'.asf', '.wma', '.mp3', '.m4v', '.m4a', '.3gp', '.3g2');
$allowed_type 	= array('application/octet-stream');

$uploadDir 	= _VIDEOS_DIR_PATH;
$uploadFile = $uploadDir . basename($_FILES['Filedata']['name']);

$ext1 = explode('.', $_FILES['Filedata']['name']);
$ext2 = strtolower($ext1[ count($ext1)-1 ]);
$ext2 = '.'. $ext2;

if ( ! in_array($ext2, $allowed_ext) || ! in_array($_FILES['Filedata']['type'], $allowed_type))
{
	$uploadFile = str_replace($ext2, '.flv', $uploadFile);
	$allow = 0;
	
	if ( ! in_array($ext2, $allowed_ext))
	{
		$error_msg = 'Bad file type. You can upload only <code>'. implode(', ', $allowed_ext) .'</code> files.';
	}
	else
	{
		$error_msg = 'Bad file type. Please use the Flash Uploader.';
	}
}

if ( ! $logged_in || ( ! is_admin() && ! is_moderator() && ! is_editor()))
{
	$allow = 0;
	$error_msg = 'You do not have permission to upload videos.';
}

if (is_moderator() && mod_cannot('manage_videos'))
{
	$allow = 0;
	$error_msg = 'You do not have permission to manage and upload videos.';
}

if ( ! is_array($_FILES['Filedata']) || $_FILES['Filedata']['size'] == 0)
{
	$allow = 0;
	$error_msg = 'No file provided. File size: 0 bytes.';
}

$new_name  = md5($_FILES['Filedata']['name'].rand(1,888));
$new_name  = substr($new_name, 0, 8);
$new_name .= $ext2;
$uploadFile = $uploadDir . $new_name;

if ($allow == 1)
{
	$move = @move_uploaded_file($_FILES['Filedata']['tmp_name'], $uploadFile);
	
	if ($move !== false)
	{
		$uploadFile = str_replace("\\", "\\\\", $uploadFile);	// IIS path fix

		$result = update_config('last_video', $uploadFile);
		if (is_array($result))
		{
			$fp = @fopen('tmp.pm', "a");
			@fwrite($fp, $uploadFile);
			@fclose($fp);
		}
	}
	else if ($move === FALSE)
	{
		$error_msg = 'Could not move uploaded file to <strong>'. _VIDEOS_DIR_PATH .'</strong>.';
	}
}

if ($_FILES['Filedata']['error'] != 0)
{
	switch($_FILES['Filedata']['error'])
	{
		case UPLOAD_ERR_INI_SIZE:
			$error_msg = 'The uploaded file exceeds the upload_max_filesize directive in php.ini which is currently set at <strong>'. ini_get('upload_max_filesize') .'</strong>';
		break;
		
		case UPLOAD_ERR_FORM_SIZE:
			$error_msg = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML/Flash upload form.';
		break;
		
		case UPLOAD_ERR_PARTIAL:
			$error_msg = 'The uploaded file was only partially uploaded. Possible cause: user cancelled the upload.';
		break;
	
		case UPLOAD_ERR_NO_FILE:
			$error_msg = 'No file was uploaded. Please select a file first.';
		break;
		
		case UPLOAD_ERR_NO_TMP_DIR:
			$error_msg = 'Missing a temporary folder. Please contact your hosting provider for this issue.';
		break;
		
		case UPLOAD_ERR_CANT_WRITE:
			$error_msg = 'Failed to write file to disk. Please contact your hosting provider for this issue.';
		break;
		
		case UPLOAD_ERR_EXTENSION:
			$error_msg = 'File upload stopped by extension. A PHP extension stopped the file upload. Can\'t tell which extension caused the file upload to stop.';
		break;
		
		default:
			$error_msg = 'Unknown upload error.';
		break;
	}
}

if ($error_msg != '')
{
	$log_msg = 'Failed to upload file <code>'. $_FILES['Filedata']['name'] .'</code>. Error issued:<br /> ';
	$log_msg .= '<i>'. $error_msg .'</i>';
	
	if (strpos($error_msg, "0 bytes") !== false)
	{
		$log_msg .= '<br />To upload files larger than <strong>'. readable_filesize(get_true_max_filesize()) .'</strong>, 
						you need to increase your server\'s <strong>upload_max_filesize</strong> and <strong>upload_max_filesize</strong> limits.';
		$log_msg .=  '<br />You can do it yourself by reading <a href="http://help.phpmelody.com/how-to-fix-the-video-uploading-process/" target="_blank">this how-to</a>, or by contacting your hosting provider.';
		$log_msg .=  '<br />Meanwhile you can upload the video(s) with an FTP client into the <strong>/uploads/videos/</strong> folder and add them to your site using the "<a href="addvideo.php">Add Video from URL</a>" page.';
	}

	$log_msg = secure_sql($log_msg);
	log_error($log_msg, 'Upload video', 1);
}
exit();
?>