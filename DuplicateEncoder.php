<!-- Description:
The goal of this exercise is to convert a string to a new string where each
character in the new string is '(' if that character appears only once in
the original string, or ')' if that character appears more than once in
the original string. Ignore capitalization when determining if a character
is a duplicate.

Examples:

"din" => "((("

"recede" => "()()()"

"Success" => ")())())"

"(( @" => "))(("

 -->


<?php
function duplicate_encode($word){
$strLow=strtolower($word);
$arr = str_split($strLow);
$newStr='';
for($i=0 ; $i < sizeof($arr); $i++)
  {
    if(substr_count($strLow,$arr[$i]) > 1) {
      $newStr .=')';
    }else{
       $newStr .= '(';
    }
  }
  return $newStr;
}
?>
