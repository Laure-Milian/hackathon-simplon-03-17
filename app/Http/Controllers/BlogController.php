<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function getItem() {

		$html = new \DOMDocument();
		@$html->loadHtmlFile('http://www.groupe-adonis.fr/blog');
		$xpath = new \DOMXPath($html);

		//Get title
		$titles = $xpath->query("//div[contains(@class, 'article_title')]");
		$i = 0;
		foreach ($titles as $title) {
			$resultTitle[$i++] = $title->nodeValue;
		}
		
		//Get description
		$descriptions = $html->getElementsByTagName('p');
		$i = 0;
		foreach ($descriptions as $description) {
			$resultDes[$i++] = $description->nodeValue;
		}

		//Get publication date
		$url = "http://www.groupe-adonis.fr/blog/feed";
		$rss = simplexml_load_file($url);
		$i = 0;
		foreach ($rss->channel->item as $item){
			$resultPub[$i++] = $item->pubDate;
		}

		$datetime1 = date_create($resultPub[0]);
		$date1 = date_format($datetime1, 'd M Y, H\hi');

		$datetime2 = date_create($resultPub[1]);
		$date2 = date_format($datetime2, 'd M Y, H\hi');

		$datetime3 = date_create($resultPub[2]);
		$date3 = date_format($datetime3, 'd M Y, H\hi');

		//Get creator
		$creators = $xpath->query("//span[contains(@class, 'username')]");
		$i = 0;
		foreach ($creators as $creator) {
			$resultCrea[$i++] = $creator->nodeValue;
		}

		//Get Image 
		$images =  $html->getElementsByTagName('img');
		$i = 0;
		foreach ($images as $image) {
			$tab[] = $image->getAttribute('src');
		}

		//Display
		echo 'Article 3:';
		echo '<ul>';
		echo '<li>'.$resultTitle[0].'</li>';
		echo '<li>'.$date1.'</li>';
		echo '<li>'.$resultCrea[0].'</li>';
		echo '<li><img src="'.$tab[2].'"></li>';
		echo '<li>'.$resultDes[0].'</li>';
		echo '</ul>';

		echo 'Article 2:';
		echo '<ul>';
		echo '<li>'.$resultTitle[1].'</li>';
		echo '<li>'.$date2.'</li>';
		echo '<li>'.$resultCrea[1].'</li>';
		echo '<li><img src="'.$tab[3].'"></li>';
		echo '<li>'.$resultDes[1].'</li>';
		echo '</ul>';

		echo 'Article 1:';
		echo '<ul>';
		echo '<li>'.$resultTitle[2].'</li>';
		echo '<li>'.$date3.'</li>';
		echo '<li>'.$resultCrea[2].'</li>';
		echo '<li><img src="'.$tab[4].'"></li>';
		echo '<li>'.$resultDes[2].'</li>';
		echo '</ul>';

		return view('modules.blog');
	}
}