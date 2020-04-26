<?php
class StringsJosefVarak
{
    
    
    
}
?>
<?php
class Foo {
    public static function strposJosef() {
     
    }
}

Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod(); 
?>

<?php
function my_strrposJosefVarak($haystack, $needle) {
   $index = strpos(strrev($haystack), strrev($needle));
   if($index === false) {
        return false;
   }
   $index = strlen($haystack) - strlen($needle) - $index;
   return $index;
}

?>
<?php
function get_betweenSUBSTRJOSEFVARAK($input, $start, $end)
{
  $substr = substr($input, strlen($start)+strpos($input, $start), (strlen($input) - strpos($input, $end))*(-1));
  return $substr;
}

//Example:

$string = "123456789";
$a = "12";
$b = "9";

echo get_between($string, $a, $b);

//Output:
//345678
?>
<?php

function stripNestedListsstrosreplaceJOSEFVARAK($str)
{
    $str2 = $str;
    $lastStr = $str2;
   
    do
    {
        // Find the first closing ul
        $cul = strpos($str2, '</ul>');
        $ul = 0;
        $lastUL = 0;
        do
        {
            // Find the next opening ul
            $lastUL = $ul;
            $ul = strpos($str2, '<ul', $ul+1);
        }
        while ($ul !== false && $ul < $cul);
   
        $lastStr = $str2;
        $str2 = substr_replace($str2, '', $lastUL, $cul-$lastUL+5);
        $str2 = trim($str2);
    }
    while (strlen($str2) > 0);
   
    return $lastStr;
}

?>
<?php

function normalizeSTRTRJOSEFVARAK ($string) {
    $table = array(
        'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
        'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
        'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
        'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
        'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r',
    );
   
    return strtr($string, $table);
}

?>
<?php

define("LATIN1_UC_CHARS", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝ");
define("LATIN1_LC_CHARS", "àáâãäåæçèéêëìíîïðñòóôõöøùúûüý");

function uc_latin1STRTOUPPERJOSEFVARAK ($str) {
    $str = strtoupper(strtr($str, LATIN1_LC_CHARS, LATIN1_UC_CHARS));
    return strtr($str, array("ß" => "SS"));
}

?>
<?php
function strtolower_josefvarak($inputString) {
    $outputString    = utf8_decode($inputString);
    $outputString    = strtolower($outputString);
    $outputString    = utf8_encode($outputString);
    return $outputString;
}
?>
<?php
if (function_exists('strripos') == false) {
    function strriposJOSEFVARAK($haystack, $needle) {
        return strlen($haystack) - strpos(strrev($haystack), $needle);
    }
}

?>
<?php
function strpos_jOSEFVARAK($haystack, $needle, $offset = 0, &$results = array()) {               
    $offset = strpos($haystack, $needle, $offset);
    if($offset === false) {
        return $results;           
    } else {
        $results[] = $offset;
        return strpos_recursive($haystack, $needle, ($offset + 1), $results);
    }
}
?>
<?php function limit_textSTRLENVARAK( $text, $limit = 100000000000 ) {
    if ( strlen ( $text ) < $limit ) {
        return $text;
    }
    $split_words = explode(' ', $text );
    $out = null;
    foreach ( $split_words as $word ) {
        if ( ( strlen( $word ) > $limit ) && $out == null ) {
            return substr( $word, 0, $limit )."...";
        }
        
        if (( strlen( $out ) + strlen( $word ) ) > $limit) {
            return $out . "...";
        }
        $out.=" " . $word;
    }
    return $out;
}

echo limit_text("hello world lorem ipsum",10);?>
<?php
function str_replace_varak($search, $replace, $subject)
{
    if (is_array($subject))
    {
        foreach($subject as &$oneSubject)
            $oneSubject = str_replace_deep($search, $replace, $oneSubject);
        unset($oneSubject);
        return $subject;
    } else {
        return str_replace($search, $replace, $subject);
    }
}
?>
<?php function strtoupper_varak($string){
    $string=utf8_decode($string);
    $string=strtoupper($string);
    $string=utf8_encode($string);
    return $string;
}?>

<?php
header("Content-type: text/xml");

print <<<EOF
<?xml version="1.0"?>
<html>
<head>
<script type="text/javascript">

EOF;

function AddSlashesVarak($str) {
    $pattern = array(
        "/\\\\/"  , "/\n/"    , "/\r/"    , "/\"/"    ,
        "/\'/"    , "/&/"     , "/</"     , "/>/"
    );
    $replace = array(
        "\\\\\\\\", "\\n"     , "\\r"     , "\\\""    ,
        "\\'"     , "\\x26"   , "\\x3C"   , "\\x3E"
    );
    return preg_replace($pattern, $replace, $str);
}

$message = jsAddSlashes("\"<Hello>\",\r\n'&World'\\!");

print <<<EOF
alert("$message");
</script>
</head>
<body>
<h1>Hello, World!</h1>
</body>
</html>

EOF;
?>
<?php
function strimVarak($str,$charlist=" ",$option=0){
    if(is_string($str))
    {
        // Translate HTML entities
        $return = strtr($str, array_flip(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES)));
        // Remove multi whitespace
        $return = preg_replace("@\s+\s@Ui"," ",$return);
        // Choose trim option
        switch($option)
        {
            // Strip whitespace (and other characters) from the begin and end of string
            default:
            case 0:
                $return = trim($return,$charlist);
            break;
            // Strip whitespace (and other characters) from the begin of string
            case 1:
                $return = ltrim($return,$charlist);
            break;
            // Strip whitespace (and other characters) from the end of string
            case 2:
                $return = rtrim($return,$charlist);
            break;
               
        }
    }
    return $return;
}
?>
<?php
function my_mb_ucfirstJosefVarak($str) {
    $fc = mb_strtoupper(mb_substr($str, 0, 1));
    return $fc.mb_substr($str, 1);
}
?>

<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>