<?php include("includes/header.php") ?>
<?php

    echo"<table class='table table-bordered table-dark'>
    <thead>
    <tr>
        <th scope='col'>#</th>
        <th scope='col'>L'HEURE:</th>
        <th scope='col'>IP:</th>
        <th scope='col'>ISP:</th>
        <th scope='col'>PAYS:</th>
        <th scope='col'>CODE DE PAYS:</th>
        <th scope='col'>REGION:</th>
        <th scope='col'>VILLE:</th>
        <th scope='col'>CODE POSTALE:</th>
        <th scope='col'>LATTITUDE:</th>
        <th scope='col'>LONGUITUDE:</th>
        <th scope='col'>TIMEZONE:</th>
        <th scope='col'>ORG:</th>
        <th scope='col'>AS:</th>
    </tr>
    </thead>
    <tbody>";
    $get_ip ="SELECT * FROM ip ORDER BY 1";
    $run_ip = mysqli_query($con, $get_ip);
    $visitor=0;
    while($row = mysqli_fetch_array($run_ip)){
        $visitor = $visitor +1;
        $ip = $row['IP'];
        $date = $row['date_visit'];
        $isp = $row['ISP'];
        $country = $row['COUNTRY'];
        $code = $row['COUNTRYCODE'];
        $region = $row['REGION'];
        $city = $row['CITY'];
        $zip = $row['ZIP'];
        $lat = $row['LATITUDE'];
        $lon = $row['LONGITTUDE'];
        $tz = $row['TIMEZONE'];
        $org = $row['ORG'];
        $as = $row['ASIP'];
        echo "
        <tr>
        <th scope='row'>$visitor</th>
        <td>$date</td>
        <td>$ip</td>
        <td>$isp</td>
        <th>$country</th>
        <td>$code</td>
        <td>$region</td>
        <td>$city</td>
        <th>$zip</th>
        <td>$lat</td>
        <td>$lon</td>
        <td>$tz</td>
        <td>$org</td>
        <td>$as</td>
        </tr>
        ";}








    echo "
    </tbody>
    </table>";


?>