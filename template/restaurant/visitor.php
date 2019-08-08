<?php
include("includes/connection.php");
//get user ip
function get_ip() {
    if(isset($_SERVER['HTTP_CLIENT_IP'])){
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}
$ip=get_ip();
//api
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($_SERVER['HTTP_HOST'] != "localhost"){
    if($query && $query['status'] == 'success'){
        $ISP=$query['isp'];
        $COUNTRY=$query['country'];
        $COUNTRY_CODE=$query['countryCode'];
        $REGION=$query['regionName'];
        $CITY=$query['city'];
        $ZIP=$query['zip'];
        $LATITUDE=$query['lat'];
        $LONGITTUDE=$query['lon'];
        $TIME_ZONE=$query['timezone'];
        $ORG=$query['org'];
        $AS=$query['as'];
    $ip = get_ip();
    $insert = "INSERT INTO ip (IP,ISP,COUNTRY,COUNTRYCODE,REGION,CITY,ZIP,LATITUDE,LONGITTUDE,TIMEZONE,ORG,ASIP,pagename,date_visit,cur) VALUES('$ip','$ISP','$COUNTRY','$COUNTRY_CODE','$REGION','$CITY','$ZIP','$LATITUDE','$LONGITTUDE','$TIME_ZONE','$ORG','$AS','le zoo',NOW()),'no'";
    mysqli_query($con, $insert);
    }else {
      echo "ERROR";
    }
}else{
    $ip = "localhost";
    $insert = "INSERT INTO ip (IP,ISP,COUNTRY,COUNTRYCODE,REGION,CITY,ZIP,LATITUDE,LONGITTUDE,TIMEZONE,ORG,ASIP,pagename,date_visit,cur) VALUES('$ip','test','test','test','test','test','test','test','test','test','test','test','le zoo',NOW(),'no')";
    mysqli_query($con, $insert);
}
$check_ip = "select * from ip where IP='$ip' and cur!='stored'";
$run_ip = mysqli_query($con, $check_ip);

$check = mysqli_num_rows($run_ip);

if($check >= 1){
$current = "UPDATE ip SET cur='yes'";
mysqli_query($con, $current);
}
