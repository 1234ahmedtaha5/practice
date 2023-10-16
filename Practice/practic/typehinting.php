<?php
   
   //type hinting تساعد على زيادة سرعة الكود
  
  declare(strict_types=1); // عشان اخلى الكومبيلر ميثبلش استرنج
   
  function sum( int $n1,int $n2):float /* result */ {
      return $n1 + $n2 + 5.25;
  }

  echo sum(5,3);
;
?>