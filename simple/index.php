<?php

require_once 'simple_html_dom.php';
// The "i" after the pattern delimiter indicates a case-insensitive search

// preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches);
	
	
// preg_match("/p/i", "PhP is the web scripting language of choice.", $matches);


// preg_match_all("/<p>/i", "<p>1</p><p>2</p><p>3</p>", $matches, PREG_PATTERN_ORDER);


// Create DOM from string
$html = str_get_html('<div id="hello">Hello</div><div id="world">World</div>');

$html->find('div', 1)->class = 'bar';

$html->find('div[id=hello]', 0)->innertext = 'foo';

echo $html; // Output: <div id="hello">foo</div><div id="world" class="bar">World</div>