
<?php

$query=mysql_query("select * from users")or die(mysql_error('error')); 
//print_r($query);exit;
$xml="<libraray>\n\t\t";
while($data=mysql_fetch_array($query))
{

    $xml .="<mail_address>\n\t\t";
    $xml .= "<id>".$data['id']."</id>\n\t\t";
    $xml .= "<name>".$data['fullname']."</name>\n\t\t";
    $xml .= "<email>".$data['email']."</email>\n\t\t";
    $xml .= "<phone>".$data['mobile']."</phone>\n\t\t";
    $xml.="</mail_address>\n\t";
}
$xml.="</libraray>\n\r";
$xmlobj=new SimpleXMLElement($xml);
$xmlobj->asXML("http://meetuniv.com/assets/text.xml");

?>
