<?php
ob_start();
$baglanti	=	@mysql_connect("localhost","root","") or die("Mysql Bağlantısı Kurulamadı");
$db			=	@mysql_select_db("uygunagetir",$baglanti) or die("Veritabanı Bağlantısı Kurulamadı");

@mysql_query("SET NAMES 'utf8'");

$siteayar	=	mysql_fetch_array(@mysql_query("select * from ayar",$baglanti));
$site_title	=	$siteayar[1];
$site_description	=	$siteayar[2];
$site_keywords	=	$siteayar[3];	

function seo($deger){

	$eski=array(' ','ı','ç','ö','ü','ğ','ş','İ','Ş','Ç','Ö','Ü','Ğ');
	$yeni=array('-','i','c','o','u','g','s','I','S','C','O','U','G');

	return str_replace($eski, $yeni, $deger);



}	

	
?>