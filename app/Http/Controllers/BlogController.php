<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function getArticles() {

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

		$tabLastArticle = array();
		array_push($tabLastArticle, $resultTitle[0], $date1, $resultCrea[0], $tab[2], $resultDes[0]);

		$tabArticle2 = array();
		array_push($tabArticle2, $resultTitle[1], $date2, $resultCrea[1], $tab[3], $resultDes[1]);

		$tabFirstArticle = array();
		array_push($tabFirstArticle, $resultTitle[2], $date3, $resultCrea[2], $tab[4], $resultDes[2]);

		return view('modules.blog');
	}
}