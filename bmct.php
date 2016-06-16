<?php
class Bmct{
  private $root_url = 'http://bmtcmob.hostg.in/api';

  public function __construct(){

  }

	public function route_wise($direction, $route_no){
    $url = $this->root_url.'/itsroutewise/details';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"direction=$direction&routeNO=$route_no");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);
    echo $server_output;
    if ($server_output && $httpcode = '200') {
      return json_decode($server_output);
    }
    else {
      return;
    }
  }

	public function route_map($direction, $route_no){
    $url = $this->root_url.'/routemap/details';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"direction=$direction&routeNO=$route_no");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);
    if ($server_output && $httpcode = '200') {
      return json_decode($server_output);
    }
    else {
      return;
    }
  }

  public function nearest_stop($lat, $long){
    $url = $this->root_url."/busstops/stopnearby/lat/$lat/lon/$long/rad/2";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);
    if ($server_output && $httpcode = '200') {
      return json_decode($server_output);
    }
    else {
      return;
    }
  }

  public function search_stop($query){
    $url = $this->root_url."/busstops/stopsearch/name/$query";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);
    if ($server_output && $httpcode = '200') {
      return json_decode($server_output);
    }
    else {
      return;
    }
  }

  public function stop_details($stop_id){
    $url = $this->root_url.'/itsstopwise/details';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"stopID=$stop_id");;
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);
    if ($server_output && $httpcode = '200') {
      return json_decode($server_output);
    }
    else {
      return;
    }
  }

}
?>
