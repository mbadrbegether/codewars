<?php
function dont_give_me_five($start, $end) {
  // Write your code here
  $result =0;
  for($i=$start; $i<= $end; $i++){
      if(substr_count((string) $i,'5') ==0){
     $result++;
      }

  }
  return $result;
}
?>
