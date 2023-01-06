<?php

$str = "<a href=\"#\" click=\"text('data')\">Hello <b>World</b>!</a>";
echo $str . PHP_EOL;
// <a href="#" click="text('data')">Hello <b>World</b>!</a>

// https://www.php.net/manual/en/function.html-entity-decode.php
echo htmlentities($str) . PHP_EOL;
// &lt;a href=&quot;#&quot; click=&quot;text(&#039;data&#039;)&quot;&gt;Hello &lt;b&gt;World&lt;/b&gt;!&lt;/a&gt;

echo html_entity_decode($str) . PHP_EOL;
// <a href="#" click="text('data')">Hello <b>World</b>!</a>

echo html_entity_decode(htmlentities($str)) . PHP_EOL . "\n";
// <a href="#" click="text('data')">Hello <b>World</b>!</a>




// https://www.php.net/manual/en/function.htmlspecialchars.php
echo htmlspecialchars($str) . PHP_EOL;
// &lt;a href=&quot;#&quot; click=&quot;text(&#039;data&#039;)&quot;&gt;Hello &lt;b&gt;World&lt;/b&gt;!&lt;/a&gt;

/*
  htmlspecialchars(
    string $string,
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
    ?string $encoding = null,
    bool $double_encode = true
): string 
 */

echo htmlspecialchars($str, ENT_QUOTES) . PHP_EOL;
// &lt;a href=&quot;#&quot; click=&quot;text(&#039;data&#039;)&quot;&gt;Hello &lt;b&gt;World&lt;/b&gt;!&lt;/a&gt;

echo htmlspecialchars($str, ENT_SUBSTITUTE) . PHP_EOL;
// &lt;a href="#" click="text('data')"&gt;Hello &lt;b&gt;World&lt;/b&gt;!&lt;/a&gt;

echo htmlspecialchars($str, ENT_HTML401) . PHP_EOL;
// &lt;a href="#" click="text('data')"&gt;Hello &lt;b&gt;World&lt;/b&gt;!&lt;/a&gt;




echo htmlspecialchars_decode("&lt;a href=&quot;#&quot; click=&quot;text(&#039;data&#039;)&quot;&gt;Hello &lt;b&gt;World&lt;/b&gt;!&lt;/a&gt;"). PHP_EOL;
// <a href="#" click="text('data')">Hello <b>World</b>!</a>

echo htmlspecialchars_decode("&lt;a href=\"#\" click=\"text('data')\"&gt;Hello &lt;b&gt;World&lt;/b&gt;!&lt;/a&gt;"). PHP_EOL;
// <a href="#" click="text('data')">Hello <b>World</b>!</a>

echo htmlspecialchars_decode(htmlspecialchars($str, ENT_HTML401));
// <a href="#" click="text('data')">Hello <b>World</b>!</a>