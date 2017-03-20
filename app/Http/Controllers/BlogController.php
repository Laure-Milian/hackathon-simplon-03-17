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
		$title = $xpath->query("//div[contains(@class, 'article_title')]");
		$i = 0;
		foreach ($title as $exemple) {
			$resultTitle[$i++] = $exemple->nodeValue;
		}
		
		//Get description
		$description = $html->getElementsByTagName('p');
		$i = 0;
		foreach ($description as $exemple) {
			$resultDes[$i++] = $exemple->nodeValue;
		}


		//Display
		echo 'Dernier article :';
		echo '<ul>';
			echo '<li>'.$resultTitle[0].'</li>';
			echo '<li>'.$resultDes[0].'description 1er article </li>';
		echo '</ul>';

		echo 'Avant dernier article :';
		echo '<ul>';
			echo '<li>'.$resultTitle[1].'</li>';
			echo '<li>'.$resultDes[1].'description 2e article</li>';
		echo '</ul>';

		echo 'Avant avant dernier article :';
		echo '<ul>';
			echo '<li>'.$resultTitle[2].'</li>';
			echo '<li>'.$resultDes[2].'description 3e article</li>';
		echo '</ul>';

		return view('modules.blog');
	}
}