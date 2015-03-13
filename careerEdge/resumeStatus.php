<?php
//echo "<pre>";print_r($_FILES);exit;
	$url = "http://rezscore.com/a/34ad8b/grade"; // e.g. http://localhost/myuploader/upload.php // request URL
    $filename = $_FILES['resume']['name'];
    $filedata = $_FILES['resume']['tmp_name'];
	$filesize = $_FILES['resume']['size'];
    if ($filedata != '')
    {
        $headers = array("Content-Type:multipart/form-data"); // cURL headers for file uploading
        $postfields = array("filedata" => "@$filedata", "filename" => $filename);
        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => true,
            CURLOPT_POST => 1,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_INFILESIZE => $filesize,
            CURLOPT_RETURNTRANSFER => true
        ); // cURL options
		//echo "<pre>";print_r($options);exit;
        curl_setopt_array($ch, $options);
        curl_exec($ch);
        if(!curl_errno($ch))
        {
            $info = curl_getinfo($ch);
            if ($info['http_code'] == 200)
                $errmsg = "File uploaded successfully";
				
				
				
				
				
				//Get cURL resource
					$curl = curl_init();
					//Set some options - we are passing in a useragent too here
					curl_setopt_array($curl, array(
						CURLOPT_RETURNTRANSFER => 1,
						CURLOPT_URL => 'http://rezscore.com/a/34ad8b/grade',
						CURLOPT_USERAGENT => 'Codular Sample cURL Request',
						CURLOPT_POST => 1,
						
					));
					//Send the request & save response to $resp
					$resp = curl_exec($curl);

					echo "<pre>";print_r($resp);
					//Close request to clear up some resources
					curl_close($curl);
				
				
				
				
				
				
				
        }
        else
        {
            $errmsg = curl_error($ch);
        }
        curl_close($ch);
    }
    else
    {
        $errmsg = "Please select the file";
		echo $errmsg;
    }

?>