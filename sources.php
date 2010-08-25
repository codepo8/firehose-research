<?php 
/*
  Yahoo Firehose research interface
  Social sources dataset
  Homepage: http://github.com/codepo8/firehose-research
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/

// uncomment to generate the dataset below by scraping the YQL documentation.
/*
$url='http://query.yahooapis.com/v1/public/yql?q=select%20p%2Ccode%20from%20html%20where%20url%3D%22http%3A%2F%2Fdeveloper.yahoo.com%2Fsocial%2Frest_api_guide%2Fupdates-update_sources.html%22%20and%20xpath%3D%22%2F%2Ftable%5B%40border%3D\'1\'%5D%2F%2Ftd%22&format=json';
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); 
curl_close($ch);
$data = json_decode($output);
$sets = $data->query->results->td;
echo '[';
$all = array();
for($i=0;$i<sizeof($sets);$i+=3){
  $out = '{';
  $out.= '"s":"'.($sets[$i]->code->content).'",';
  $out.= '"n":"'.($sets[$i+1]->p).'"';
  $out.= '}';
  $all[] = $out;
}
echo join($all,',').']';
*/
$sources = '[{"s":"360","n":"Yahoo! 360"},{"s":"agg.aol","n":"AOL"},{"s":"agg.bebo","n":"Bebo"},{"s":"agg.blogger","n":"Blogger"},{"s":"agg.bloglines","n":"Bloglines"},{"s":"agg.digg","n":"Digg"},{"s":"agg.furl","n":"Diigo"},{"s":"agg.goodreads","n":"Goodreads"},{"s":"agg.google","n":"Google"},{"s":"agg.googlereader","n":"Google Reader"},{"s":"agg.lastfm","n":"Last.fm"},{"s":"agg.magnolia","n":"Ma.gnolia"},{"s":"agg.movabletype","n":"Movable Type"},{"s":"agg.netflix","n":"Netflix"},{"s":"agg.pandora","n":"Pandora"},{"s":"agg.picasa","n":"Picasa"},{"s":"agg.pownce","n":"Pownce"},{"s":"agg.seesmic","n":"Seesmic"},{"s":"agg.slideshare","n":"Slideshare"},{"s":"agg.smugmug","n":"SmugMug"},{"s":"agg.stumbleupon","n":"StumbleUpon"},{"s":"agg.thisnext","n":"ThisNext"},{"s":"agg.travelpod","n":"TravelPod"},{"s":"agg.tumblr","n":"Tumblr"},{"s":"agg.twitter","n":"Twitter"},{"s":"agg.typepad","n":"TypePad"},{"s":"agg.vimeo","n":"Vimeo"},{"s":"agg.vox","n":"Vox"},{"s":"agg.webshots","n":"Webshots"},{"s":"agg.xanga","n":"Xanga"},{"s":"agg.yelp","n":"Yelp"},{"s":"agg.youtube","n":"YouTube"},{"s":"agg.zoomr","n":"Zooomr"},{"s":"avatars","n":"Yahoo! Avatars"},{"s":"buzz","n":"Yahoo! Buzz"},{"s":"socdir","n":"Yahoo! Profiles"},{"s":"wisteria","n":"Wisteria"},{"s":"y.answers","n":"Yahoo! Answers"},{"s":"y.auctions","n":"Yahoo! Shopping"},{"s":"y.autos","n":"Yahoo! Autos"},{"s":"y.bix","n":"Bix for Yahoo!"},{"s":"y.bookmarks","n":"Yahoo! Bookmarks"},{"s":"y.briefcase","n":"Yahoo! Briefcase"},{"s":"y.calendar","n":"Yahoo! Calendar"},{"s":"y.classifieds","n":"Yahoo! Classifieds"},{"s":"y.delicious","n":"Delicious"},{"s":"y.family","n":"Yahoo! Family"},{"s":"y.fantasysports","n":"Yahoo! Sports"},{"s":"y.finance","n":"Yahoo! Finance"},{"s":"y.flickr","n":"Flickr"},{"s":"y.food","n":"Yahoo! Food"},{"s":"y.games","n":"Yahoo! Games"},{"s":"y.geocities","n":"Yahoo! Geocities"},{"s":"y.green","n":"Yahoo! Green"},{"s":"y.greetings","n":"Yahoo! Greetings"},{"s":"y.groups","n":"Yahoo! Groups"},{"s":"y.health","n":"Yahoo! Health"},{"s":"y.hotjobs","n":"Yahoo! Hotjobs"},{"s":"y.kids","n":"Yahoo! Kids"},{"s":"y.local","n":"Yahoo! Local"},{"s":"y.movies","n":"Yahoo! Movies"},{"s":"y.music","n":"Yahoo! Music"},{"s":"y.mybloglog","n":"MyBlogLog"},{"s":"y.news","n":"Yahoo! News"},{"s":"y.omg","n":"OMG! from Yahoo!"},{"s":"y.personals","n":"Yahoo! Personals"},{"s":"y.pets","n":"Yahoo! Pets"},{"s":"y.presence","n":"Yahoo! Status Updates"},{"s":"y.profiles","n":"Yahoo! Guestbook Comments"},{"s":"y.searchmonkey","n":"SearchMonkey from Yahoo!"},{"s":"y.shopping","n":"Yahoo! Shopping"},{"s":"y.sports","n":"Yahoo! Sports"},{"s":"y.tech","n":"Yahoo! Tech"},{"s":"y.travel","n":"Yahoo! Travel"},{"s":"y.tv","n":"Yahoo! TV"},{"s":"y.video","n":"Yahoo! Video"}]';?>