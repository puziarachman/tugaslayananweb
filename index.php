<?php
require_once 'xpath.php';
set_time_limit(0);
$startUrl = "http://www.detik.com/";

// anchor title "//div[@class='yt-lockup-content']//h3[@class='yt-lockup-title']/a/text()"
// anchor title link "//div[@class='yt-lockup-content']//h3[@class='yt-lockup-title']/a/@href"


function scrapeYoutube($url){
	$baseUrl = "http://www.detik.com";
	$array = array();
	$xpath = new XPATH($url);	

	//$imageSrcQuery = $xpath->query("//td[@class = 'pl-video-thumbnail'] //span[@class = 'yt-thumb-clip']//img/@src");
	$linkTitleQuery = $xpath->query("//div[@class='yt-lockup-content']//h3[@class='yt-lockup-title']/a/text()");
	$linkHrefQuery = $xpath->query("//div[@class='yt-lockup-content']//h3[@class='yt-lockup-title']/a/@href");
	//$linkOwnerQuery = $xpath->query("//td[@class='pl-video-owner']/a/text()");
	//$linkOwnerHrefQuery = $xpath->query("//td[@class='pl-video-owner']/a/@href");
	//$linkTimestampQuery = $xpath->query("//div[@class='timestamp']");
