<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function getItem() {

		$html = new \DOMDocument();
		@$html->loadHtmlFile('http://www.groupe-adonis.fr/blog/feed');
		$xpath = new \DOMXPath($html);
		$domExemple = $xpath->query("//item");

		echo '<ul>';

		$i = 0;
		foreach ($domExemple as $exemple) {
			$result[$i++] = $exemple->nodeValue;
			
		}
			echo '<li>'.$result[0].'</li>';
			echo '<li>'.$result[1].'</li>';
			echo '<li>'.$result[2].'</li>';



		echo '</ul>';

		return view('modules.blog');
	}
}
