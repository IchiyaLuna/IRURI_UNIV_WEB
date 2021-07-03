<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Control</title>
</head>

<body>

<?php
 $Line = "문과";
 
 $Korean_1 = 0;
 $Math_1 = 0;
 $English_1 = 0;
 $Social_1 = 0;
 $Science_1 = 0;
 $History_1 = 0; 

 $Korean_2 = 0;
 $Math_2 = 0;
 $English_2 = 0;
 $Social_2 = 0;
 $Science_2 = 0;
 $History_2 = 0;

 $Korean_3 = 0;
 $Math_3 = 0;
 $English_3 = 0;
 $Social_3 = 0;
 $Science_3 = 0;
 $History_3 = 1;

 $grade_1 = array($Korean_1,$Math_1,$English_1,$Science_1,$Social_1,$History_1);
 $grade_2 = array($Korean_2,$Math_2,$English_2,$Science_2,$Social_2,$History_2);
 $grade_3 = array($Korean_3,$Math_3,$English_3,$Science_3,$Social_3,$History_3);

 for($i=0; $i<6; $i++) {
     if ($grade_1[$i]==0)
       unset($grade_1[$i]);
   }

 for($i=0; $i<6; $i++) {
     if ($grade_2[$i]==0)
       unset($grade_2[$i]);
   }
 
 for($i=0; $i<6; $i++) {
     if ($grade_3[$i]==0)
       unset($grade_3[$i]);
   }

 

 function gray($arr_1,$arr_2,$arr_3)
  {
   global $Line;

    if ($Line == "문과") { 
      unset($arr_1[3]);
      unset($arr_1[5]);
      unset($arr_2[3]);
      unset($arr_2[5]);
      unset($arr_3[3]);
      unset($arr_3[5]);

     if(sizeof($arr_1)==0)
       $average_1 = 0;
     else
       $average_1 = array_sum($arr_1)/sizeof($arr_1);

     if(sizeof($arr_2)==0)
       $average_2 = 0;
     else
       $average_2 = array_sum($arr_2)/sizeof($arr_2);

     if(sizeof($arr_3)==0)
       $average_3 = 0;
      else
       $average_3 = array_sum($arr_3)/sizeof($arr_3);

     $average = array($average_1, $average_2, $average_3);
     
     for($j=0; $j<3; $j++) {
       if ($average[$j]==0)
         unset($average[$j]);
       }
     return array_sum($average)/sizeof($average);

    }
    if ($Line == "이과") { 
      unset($arr_1[4]);
      unset($arr_1[5]);
      unset($arr_2[4]);
      unset($arr_2[5]);
      unset($arr_3[4]);
      unset($arr_3[5]);

     if(sizeof($arr_1)==0)
       $average_1 = 0;
     else
       $average_1 = array_sum($arr_1)/sizeof($arr_1);

     if(sizeof($arr_2)==0)
       $average_2 = 0;
     else
       $average_2 = array_sum($arr_2)/sizeof($arr_2);

     if(sizeof($arr_3)==0)
       $average_3 = 0;
      else
       $average_3 = array_sum($arr_3)/sizeof($arr_3);

     $average = array($average_1, $average_2, $average_3);
     
     for($j=0; $j<3; $j++) {
       if ($average[$j]==0)
         unset($average[$j]);
       }
     return array_sum($average)/sizeof($average);    
    }



  }
  
 function yellow($arr_1,$arr_2,$arr_3)
  {
    global $Line;

    if ($Line == "문과") { 
      unset($arr_1[3]);
      unset($arr_2[3]);
      unset($arr_3[3]);

     if(sizeof($arr_1)==0)
       $average_1 = 0;
     else
       $average_1 = array_sum($arr_1)/sizeof($arr_1);

     if(sizeof($arr_2)==0)
       $average_2 = 0;
     else
       $average_2 = array_sum($arr_2)/sizeof($arr_2);

     if(sizeof($arr_3)==0)
       $average_3 = 0;
      else
       $average_3 = array_sum($arr_3)/sizeof($arr_3);

     $average = array($average_1, $average_2, $average_3);
     
     for($j=0; $j<3; $j++) {
       if ($average[$j]==0)
         unset($average[$j]);
       }
     return array_sum($average)/sizeof($average);

    }
    if ($Line == "이과") { 
      unset($arr_1[4]);
      unset($arr_1[5]);
      unset($arr_2[4]);
      unset($arr_2[5]);
      unset($arr_3[4]);
      unset($arr_3[5]);

     if(sizeof($arr_1)==0)
       $average_1 = 0;
     else
       $average_1 = array_sum($arr_1)/sizeof($arr_1);

     if(sizeof($arr_2)==0)
       $average_2 = 0;
     else
       $average_2 = array_sum($arr_2)/sizeof($arr_2);

     if(sizeof($arr_3)==0)
       $average_3 = 0;
      else
       $average_3 = array_sum($arr_3)/sizeof($arr_3);

     $average = array($average_1, $average_2, $average_3);
     
     for($j=0; $j<3; $j++) {
       if ($average[$j]==0)
         unset($average[$j]);
       }
     return array_sum($average)/sizeof($average);    
    }
  }  

 function light_yellow($arr_1,$arr_2,$arr_3)
  {
    global $Line;

    if ($Line == "문과") { 
      unset($arr_1[3]);
      unset($arr_2[3]);
      unset($arr_3[3]);

     if(sizeof($arr_1)==0)
       $average_1 = 0;
     else
       $average_1 = array_sum($arr_1)/sizeof($arr_1);

     if(sizeof($arr_2)==0)
       $average_2 = 0;
     else
       $average_2 = array_sum($arr_2)/sizeof($arr_2);

     if(sizeof($arr_3)==0)
       $average_3 = 0;
      else
       $average_3 = array_sum($arr_3)/sizeof($arr_3);

     $average = array($average_1, $average_2, $average_3);
     
     for($j=0; $j<3; $j++) {
       if ($average[$j]==0)
         unset($average[$j]);
       }
     return array_sum($average)/sizeof($average);

    }
    if ($Line == "이과") { 
      unset($arr_1[4]);
      unset($arr_2[4]);
      unset($arr_3[4]);

     if(sizeof($arr_1)==0)
       $average_1 = 0;
     else
       $average_1 = array_sum($arr_1)/sizeof($arr_1);

     if(sizeof($arr_2)==0)
       $average_2 = 0;
     else
       $average_2 = array_sum($arr_2)/sizeof($arr_2);

     if(sizeof($arr_3)==0)
       $average_3 = 0;
      else
       $average_3 = array_sum($arr_3)/sizeof($arr_3);

     $average = array($average_1, $average_2, $average_3);
     
     for($j=0; $j<3; $j++) {
       if ($average[$j]==0)
         unset($average[$j]);
       }
     return array_sum($average)/sizeof($average);    
    }



  } 

 function green($arr_1,$arr_2,$arr_3)
  {
   
    unset($arr_1[5]);
    unset($arr_2[5]);
    unset($arr_3[5]);

    if(sizeof($arr_1)==0)
      $average_1 = 0;
    else
      $average_1 = array_sum($arr_1)/sizeof($arr_1);

    if(sizeof($arr_2)==0)
      $average_2 = 0;
    else
     $average_2 = array_sum($arr_2)/sizeof($arr_2);

    if(sizeof($arr_3)==0)
     $average_3 = 0;
    else
     $average_3 = array_sum($arr_3)/sizeof($arr_3);

    $average = array($average_1, $average_2, $average_3);
     
    for($j=0; $j<3; $j++) {
      if ($average[$j]==0)
        unset($average[$j]);
       }
    return array_sum($average)/sizeof($average);    
    
  }

 function beige($arr_1,$arr_2,$arr_3)
  {
    global $Line;

    if ($Line == "문과") { 
      unset($arr_1[5]);
      unset($arr_2[5]);
      unset($arr_3[5]);

     if(sizeof($arr_1)==0)
       $average_1 = 0;
     else
       $average_1 = array_sum($arr_1)/sizeof($arr_1);

     if(sizeof($arr_2)==0)
       $average_2 = 0;
     else
       $average_2 = array_sum($arr_2)/sizeof($arr_2);

     if(sizeof($arr_3)==0)
       $average_3 = 0;
      else
       $average_3 = array_sum($arr_3)/sizeof($arr_3);

     $average = array($average_1, $average_2, $average_3);
     
     for($j=0; $j<3; $j++) {
       if ($average[$j]==0)
         unset($average[$j]);
       }
     return array_sum($average)/sizeof($average);

    }
    if ($Line == "이과") { 
      unset($arr_1[4]);
      unset($arr_1[5]);
      unset($arr_2[4]);
      unset($arr_2[5]);
      unset($arr_3[4]);
      unset($arr_3[5]);

     if(sizeof($arr_1)==0)
       $average_1 = 0;
     else
       $average_1 = array_sum($arr_1)/sizeof($arr_1);

     if(sizeof($arr_2)==0)
       $average_2 = 0;
     else
       $average_2 = array_sum($arr_2)/sizeof($arr_2);

     if(sizeof($arr_3)==0)
       $average_3 = 0;
      else
       $average_3 = array_sum($arr_3)/sizeof($arr_3);

     $average = array($average_1, $average_2, $average_3);
     
     for($j=0; $j<3; $j++) {
       if ($average[$j]==0)
         unset($average[$j]);
       }
     return array_sum($average)/sizeof($average);    
    }



  }


 
 
 echo white($grade_1,$grade_2,$grade_3)."<br>";
 echo gray($grade_1,$grade_2,$grade_3)."<br>";
 echo yellow($grade_1,$grade_2,$grade_3)."<br>";
 echo light_yellow($grade_1,$grade_2,$grade_3)."<br>";
 echo green($grade_1,$grade_2,$grade_3)."<br>";
 echo beige($grade_1,$grade_2,$grade_3)."<br>";

?>

</body>

</html>