<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
     $Korean=84;
     $Korean_choice="언론과매체";
     $Korean_rank=1;
     $Math=82;
     $Math_choice="기하";
     $Math_rank=1;
     $English=89;
     $English_rank=1;
     $History=35;
     $History_rank=1;
     $Tamgu_1=45;
     $Tamgu_2=43;
     $Tamgu_1_choice="지구과학1";
     $Tamgu_2_choice="화학1";
     $Tamgu_1_rank=1;
     $Tamgu_2_rank=1;
     $Tamgu_rank;
     $Tamgu_1_type;
     $Tamgu_2_type;
     $Foreign_choice="ㄴㄴ";
     $time="3월";
     $Average_a=array(58.13,59.85,30.54,50.58,44.14,22.35,22.29,18.03,18.97,18.69,20.09,23.81,21.06,18.07,21.09,23.16,20.82,23.33); 
     $Deviation_a=array(19.86,23.95,18.89,22.57,24.49,10.23,10.99,10.71,10,10.56,11.48,11.83,9.87,9.73,10.98,11.72,10.79,11.9);
     $standard_score_sum;
     $array=array(93,85,77,69,57,45,33,24);
     
     



     
     function standard_score_K ($score)
     {
       global $Average_a;
       global $Deviation_a;
       global $Korean_choice;
       global $Korean_rank;
       global $array;

       if ($Korean_choice == "화법과작문")
       {
         for($i=0; $i<8; $i++)
         {
           if($score-$array[$i]>=0)
           {
             break;
           }
           else
           {
             $Korean_rank=$Korean_rank+1;
           }
         }
         return  20*(($score-$Average_a[0])/$Deviation_a[0])+100;
       }
       else if ($Korean_choice == "언론과매체")
       {
         for($i=0; $i<8; $i++)
         {
           if($score-$array[$i]>=0)
           {
             break;
           }
           else
           {
             $Korean_rank=$Korean_rank+1;
           }
         }
         return  20*(($score-$Average_a[1])/$Deviation_a[1])+100;
       }
       
     }

     function standard_score_M ($score)
     {
       global $Average_a;
       global $Deviation_a;
       global $Math_choice;
       global $Math_rank;
       global $array;

       if ($Math_choice == "확률과통계")
       {
         for($i=0; $i<8; $i++)
         {
           if($score-$array[$i]>=0)
           {
             break;
           }
           else
           {
             $Math_rank=$Math_rank+1;
           }
         }
         return  20*(($score-$Average_a[2])/$Deviation_a[2])+100;
       }
       else if ($Math_choice == "미적분")
       {
         for($i=0; $i<8; $i++)
         {
           if($score-$array[$i]>=0)
           {
             break;
           }
           else
           {
             $Math_rank=$Math_rank+1;
           }
         }
         return  20*(($score-$Average_a[3])/$Deviation_a[3])+100;
       }
       else if ($Math_choice == "기하")
       {
         for($i=0; $i<8; $i++)
         {
           if($score-$array[$i]>=0)
           {
             break;
           }
           else
           {
             $Math_rank=$Math_rank+1;
           }
         }
         return  20*(($score-$Average_a[4])/$Deviation_a[4])+100;
       }
     }

     
     function standard_score_T_1 ($score)
     {
       global $Average_a;
       global $Deviation_a;
       global $Tamgu_1_choice;
       global $Tamgu_1_rank;
       global $array;


       switch ( $Tamgu_1_choice ) {
        case "한국지리":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[5])/$Deviation_a[5])+50;
          break;
        case "세계지리":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[6])/$Deviation_a[6])+50;
          break;
        case "동아시아사":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[7])/$Deviation_a[7])+50;
          break;
        case "세계사":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[8])/$Deviation_a[8])+50;
          break;
        case "정치와법":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[9])/$Deviation_a[9])+50;
          break;
        case "경제":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[10])/$Deviation_a[10])+50;
          break;
        case "사회문화":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[11])/$Deviation_a[11])+50;
          break;
        case "생활과윤리":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[12])/$Deviation_a[12])+50;
          break;
        case "윤리와사상":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[13])/$Deviation_a[13])+50;
          break;
        case "물리학1":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[14])/$Deviation_a[14])+50;
          break; 
        case "생명과학1":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[15])/$Deviation_a[15])+50;
          break;
        case "화학1":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[16])/$Deviation_a[16])+50;
          break;
        case "지구과학1":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[17])/$Deviation_a[17])+50;
          break; 
        case "물리학2":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[14])/$Deviation_a[14])+50;
          break; 
        case "생명과학2":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[15])/$Deviation_a[15])+50;
          break;
        case "화학2":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[16])/$Deviation_a[16])+50;
          break;
        case "지구과학2":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_1_rank=$Tamgu_1_rank+1;
             }
           }
          return  10*(($score-$Average_a[17])/$Deviation_a[17])+50;
          break;                
  
        default:
          return 0;
       }
       
     }

     function standard_score_T_2 ($score)
     {
       global $Average_a;
       global $Deviation_a;
       global $Tamgu_2_choice;
       global $Tamgu_2_rank;
       global $array;


       switch ( $Tamgu_2_choice ) {
        case "한국지리":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[5])/$Deviation_a[5])+50;
          break;
        case "세계지리":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[6])/$Deviation_a[6])+50;
          break;
        case "동아시아사":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[7])/$Deviation_a[7])+50;
          break;
        case "세계사":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[8])/$Deviation_a[8])+50;
          break;
        case "정치와법":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[9])/$Deviation_a[9])+50;
          break;
        case "경제":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[10])/$Deviation_a[10])+50;
          break;
        case "사회문화":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[11])/$Deviation_a[11])+50;
          break;
        case "생활과윤리":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[12])/$Deviation_a[12])+50;
          break;
        case "윤리와사상":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[13])/$Deviation_a[13])+50;
          break;
        case "물리학1":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[14])/$Deviation_a[14])+50;
          break; 
        case "생명과학1":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[15])/$Deviation_a[15])+50;
          break;
        case "화학1":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[16])/$Deviation_a[16])+50;
          break;
        case "지구과학1":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[17])/$Deviation_a[17])+50;
          break; 
        case "물리학2":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[14])/$Deviation_a[14])+50;
          break; 
        case "생명과학2":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[15])/$Deviation_a[15])+50;
          break;
        case "화학2":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[16])/$Deviation_a[16])+50;
          break;
        case "지구과학2":
          for($i=0; $i<8; $i++)
           {
             if($score-$array[$i]>=0)
             {
               break;
             }
             else
             {
               $Tamgu_2_rank=$Tamgu_2_rank+1;
             }
           }
          return  10*(($score-$Average_a[17])/$Deviation_a[17])+50;
          break;                
  
        default:
          return 0;
       }
       
     }

     function english_rank ($score)
     {
       global $English_rank;
       for($i=0; $i<8; $i++)
           {
             if($score-(90-10*$i)>=0)
             {
               break;
             }
             else
             {
               $English_rank=$English_rank+1;
             }
           }
     }


     function history_rank ($score)
     {
       global $History_rank;
       for($i=0; $i<8; $i++)
           {
             if($score-(40-5*$i)>=0)
             {
               break;
             }
             else
             {
               $History_rank=$History_rank+1;
             }
           }
           return 0;
     }

    
     

     //echo standard_score_K($Korean)."<br>";
     //echo standard_score_M($Math)."<br>";
     //echo standard_score_T_1($Tamgu_1)."<br>";
     //echo standard_score_T_2($Tamgu_2)."<br>";

     $standard_score_sum = standard_score_K($Korean)+standard_score_M($Math)+standard_score_T_1($Tamgu_1)+standard_score_T_2($Tamgu_2);

     history_rank($History);
     english_rank($English);


     //echo $standard_score_sum."<br>";

     function percentile ($score)
     {
       if($score>=350)
       {
         $base=450-$score;
         $height=$base*10000/300;
         $area=$base*$height/2;
         return 100-($area/500000*100);
       }
       if($score<350)
       {
         $base=$score-150;
         $height=$base*10000/600;
         $area=$base*$height/2;
         return 100-((500000-$area)/500000*100);
       }


     }

     echo "백분위: ".percentile($standard_score_sum)."<br>";
     
     echo "국어등급: ".$Korean_rank."<br>";
     echo "수학등급: ".$Math_rank."<br>";
     echo "영어등급: ".$English_rank."<br>";
     echo "한국사등급: ".$History_rank."<br>";
     echo "탐구1등급: ".$Tamgu_1_rank."<br>";
     echo "탐구2등급: ".$Tamgu_2_rank."<br>";

     if($Tamgu_1_rank>=$Tamgu_2_rank)
      $Tamgu_rank=$Tamgu_2_rank;
     else
      $Tamgu_rank=$Tamgu_1_rank;


     if($Tamgu_1_choice=="물리학1" ||$Tamgu_1_choice=="화학1" ||$Tamgu_1_choice=="생명과학1" ||$Tamgu_1_choice=="지구과학1" ||$Tamgu_1_choice=="물리학2" ||$Tamgu_1_choice=="화학2" ||$Tamgu_1_choice=="생명과학2" ||$Tamgu_1_choice=="지구과학2")
     {
       $Tamgu_1_type="과학탐구";
     }
     else
      $Tamgu_1_type="사회탐구";

     if($Tamgu_2_choice=="물리학1" ||$Tamgu_2_choice=="화학1" ||$Tamgu_2_choice=="생명과학1" ||$Tamgu_2_choice=="지구과학1" ||$Tamgu_2_choice=="물리학2" ||$Tamgu_2_choice=="화학2" ||$Tamgu_2_choice=="생명과학2" ||$Tamgu_2_choice=="지구과학2")
     {
       $Tamgu_2_type="과학탐구";
     }
     else
      $Tamgu_2_type="사회탐구";


     echo "탐구 등급: ".$Tamgu_rank."<br>";
     echo "탐구1 : ".$Tamgu_1_type."<br>";
     echo "탐구2 : ".$Tamgu_2_type."<br>";

     function snu()
     {
       global $Math_choice;
       global $Tamgu_1_choice;
       global $Tamgu_2_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       global $Foreign_choice;
       $crazy_1;
       $crazy_2;

       if($Tamgu_1_choice=="물리학2" || $Tamgu_1_choice=="화학2" ||$Tamgu_1_choice=="생명과학2" || $Tamgu_1_choice=="지구과학2")
       {
         $crazy_1="crazy";
       }
       else
        $crazy_1="no";

       if($Tamgu_2_choice=="물리학2" || $Tamgu_2_choice=="화학2" ||$Tamgu_2_choice=="생명과학2" || $Tamgu_2_choice=="지구과학2")
       {
         $crazy_2="crazy";
       }
       else
        $crazy_2="no";

      

       if($Math_choice=="확률과통계")
       {
         
         //코드1번
         echo "출력 리스트에서 서울대 자연 제거"."<br>";
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         
         //코드1번
         echo "출력 리스트에서 서울대 자연 제거"."<br>";
       }

       else if($crazy_1=="no" && $crazy_2=="no")
       {
         
         //코드1번
         echo "출력 리스트에서 서울대 자연 제거"."<br>";
       }

       if($Foreign_choice=="ㄴㄴ")
       {
         
         //코드0번
         echo "출력 리스트에서 서울대 인문 제거"."<br>";

       }
       
        

      return 0;

     }

     function yu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
       

       $i=min($rank1+$rank2,$rank1+$rank4,$rank2+$rank4);
       $j=min($rank1+$rank2,$rank2+$rank4);

       //echo $i."<br>";
       //echo $j."<br>";

       if($rank3 > 3)
       {
         echo "출력 리스트에서 연세대 제거"."<br>";
         //코드2,3,4번
         return 0;
       }

       if($i>4)
       {
         echo "출력 리스트에서 연세대 인문 제거"."<br>";
         //코드2번
       }

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 연세대 자연 제거"."<br>";
         //코드3,4번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 연세대 자연 제거"."<br>";
         //코드3,4번
       }

       else if($j>5)
       {
         echo "출력 리스트에서 연세대 자연 제거"."<br>";
         //코드3,4번
       }

       else if($i != 2)
       {
         echo "출력 리스트에서 연세대 의예 제거"."<br>";
         //코드4번
       }

       return 0;
     }

     function ku($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
       

       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       $j=$rank1+$rank2+$rank3+$rank4;
       

       //echo $i."<br>";
       //echo $j."<br>";

       if($i>5)
       {
         echo "출력 리스트에서 고려대 인문(학교추천) 제거"."<br>";
         //코드6번
         
       }

       if($j>7)
       {
         echo "출력 리스트에서 고려대 인문(학업우수) 제거"."<br>";
         //코드7번
       }

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 고려대 자연 제거"."<br>";
         //코드8,9,10,11,12번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 고려대 자연 제거"."<br>";
         //코드8,9,10,11,12번
       }

       else
       {
        if($i>6)
        {
         echo "출력 리스트에서 고려대 자연(학교추천) 제거"."<br>";
         //코드9번
        }
        if($j>8)
        {
         echo "출력 리스트에서 고려대 자연(학업우수)  제거"."<br>";
         //코드10,11,12번
        }
        else if($j>7)
        {
         echo "출력 리스트에서 고려대 반도체  제거"."<br>";
         //코드11,12번
        }
        else if($j>5)
        {
         echo "출력 리스트에서 고려대 의예  제거"."<br>";
         //코드12번
        }
       }

      

       return 0;
     }

     function khu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       
       

       $i=min($rank1+$rank2,$rank3+$rank1,$rank1+$rank4,$rank3+$rank2,$rank4+$rank2,$rank3+$rank4);
      
       

       //echo $i."<br>";
       //echo $j."<br>";

       if($i>5)
       {
         echo "출력 리스트에서 경희대 인문 제거"."<br>";
         //코드13,14번
         
       }

       else if($i>4)
       {
         echo "출력 리스트에서 경희대 인문(한의예) 제거"."<br>";
         //코드14번
       }

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 경희대 자연 제거"."<br>";
         //코드15,16번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 경희대 자연 제거"."<br>";
         //코드15,16번
       }

       else
       {
        if($i>5)
        {
         echo "출력 리스트에서 경희대 자연 제거"."<br>";
         //코드15,16번
        }
        
        else if($i>4)
        {
         echo "출력 리스트에서 경희대 의예  제거"."<br>";
         //코드16번
        }
        
       }

      

       return 0;
     } 

     function uos($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>7)
       {
         echo "출력 리스트에서 시립대 인문 제거"."<br>";
         //코드17번
         
       }

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 시립대 자연 제거"."<br>";
         //코드18번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 시립대 자연 제거"."<br>";
         //코드18번
       }

       else if($i>7)
       {
         echo "출력 리스트에서 시립대 자연 제거"."<br>";
         //코드18번
       }

       
       

      

       return 0;
     }

     function hiu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>8)
       {
         echo "출력 리스트에서 홍익대 인문(교과) 제거"."<br>";
         //코드19번
         
       }
       if($i>7)
       {
         echo "출력 리스트에서 홍익대 인문(학종) 제거"."<br>";
         //코드17번
         
       }

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 홍익대 자연 제거"."<br>";
         //코드20,21번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 홍익대 자연 제거"."<br>";
         //코드20,21번
       }

       else 
       {
         if($i>8)
         {
         echo "출력 리스트에서 홍익대 자연(학종) 제거"."<br>";
         //코드20번
         }
         if($i>9)
         {
         echo "출력 리스트에서 홍익대 자연(교과) 제거"."<br>";
         //코드21번
         }
       }

       
       

      

       return 0;
     }

     function ehwa($rank1, $rank2, $rank3, $rank4)
     {
       $i;
       
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>6)
       {
         echo "출력 리스트에서 이화여대 인문 제거"."<br>";
         //코드22번
         
       }
      
       return 0;
     }

     function sju($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
       
       
       $i=min($rank1+$rank2,$rank3+$rank1,$rank2+$rank4,$rank3+$rank2,$rank4+$rank1,$rank3+$rank4);
       $j=$rank1+$rank2+$rank3;
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 세종대 자연 제거"."<br>";
         //코드23,24번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 세종대 자연 제거"."<br>";
         //코드23,24번
       }

       else 
       {
         if($i>6)
         {
         echo "출력 리스트에서 세종대 자연 제거"."<br>";
         //코드23번
         }
         if($j>9)
         {
         echo "출력 리스트에서 세종대 자연(시스템) 제거"."<br>";
         //코드24번
         }
       }

       
       

      

       return 0;
     }
     
     function swu($rank1, $rank2, $rank3, $rank4)
     {
       $i;
       $j;
       
       
       $i=min($rank1+$rank2,$rank2+$rank4,$rank4+$rank1);
       $j=min($rank3+$rank1,$rank3+$rank2,$rank3+$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

    
        if($i>7 && $j>5)
        {
         echo "출력 리스트에서 서울여대 제거"."<br>";
         //코드25번
        }     

       return 0;
     }

     function smu($rank1, $rank2, $rank3, $rank4)
     {
       $i;
                
       $i=min($rank1+$rank2,$rank3+$rank1,$rank2+$rank4,$rank3+$rank2,$rank4+$rank1,$rank3+$rank4);
             
       //echo $i."<br>";
       //echo $j."<br>";

    
        if($i>7)
        {
         echo "출력 리스트에서 상명대 제거"."<br>";
         //코드26번
        }     

       return 0;
     }

     function cuk($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
       
       
       $i=min($rank1+$rank2,$rank3+$rank1,$rank2+$rank4,$rank3+$rank2,$rank4+$rank1,$rank3+$rank4);
       $j=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>6)
       {
          echo "출력 리스트에서 가톨릭대 인문 제거"."<br>";
         //코드27번
       }

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 가톨릭대 자연 제거"."<br>";
         //코드28,29번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 가톨릭대 자연 제거"."<br>";
         //코드28,29번
       }

       else 
       {
         if($i>7)
         {
         echo "출력 리스트에서 가톨릭대 자연 제거"."<br>";
         //코드28번
         }
         if($j>4)
         {
         echo "출력 리스트에서 가톨릭대 의예 제거"."<br>";
         //코드29번
         }
       }

       
       

      

       return 0;
     }

     function knu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
      
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>11)
       {
          echo "출력 리스트에서 강원대 인문 제거"."<br>";
         //코드31번
       }

       if($i>10)
       {
          echo "출력 리스트에서 강원대 인문 제거"."<br>";
         //코드30번
       }

       if($i>9)
       {
          echo "출력 리스트에서 강원대 자연(간호) 제거"."<br>";
         //코드34번
       }

       if($i>12)
       {
          echo "출력 리스트에서 강원대 자연 제거"."<br>";
         //코드32번
       }

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 강원대 의예 제거"."<br>";
         //코드33번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 강원대 의예 제거"."<br>";
         //코드33번
       }

       else if($i>5)
       {
         echo "출력 리스트에서 강원대 의예 제거"."<br>";
         //코드33번
       }
       

       
       

      

       return 0;
     }

     function kynu($rank1, $rank2, $rank3, $rank4)
     {
       $i;
       $j;
      
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       $j=min($rank1+$rank2,$rank3+$rank1,$rank2+$rank4,$rank3+$rank2,$rank4+$rank1,$rank3+$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($j>8)
       {
          echo "출력 리스트에서 경북대 인문 제거"."<br>";
         //코드35번
       }

       if($j>9)
       {
          echo "출력 리스트에서 경북대 자연 제거"."<br>";
         //코드36번
       }

       if($i>3)
       {
          echo "출력 리스트에서 경북대 의예 제거"."<br>";
         //코드37번
       }

       if($i>4)
       {
          echo "출력 리스트에서 경북대 치의예 제거"."<br>";
         //코드38번
       }
      

       return 0;
     }

     function gnu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
      
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       $j=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4);
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>13)
       {
          echo "출력 리스트에서 경상대 인문 제거"."<br>";
         //코드39번
       }


       

       if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 경상대 자연 제거"."<br>";
         //코드40,41,42,43,44,45번
       }

       else 
       {
         if($i>13)
         {
          echo "출력 리스트에서 경상대 자연 제거"."<br>";
         //코드40번
         }
         if($i>14)
         {
          echo "출력 리스트에서 경상대 자연 제거"."<br>";
         //코드43번
         }
         if($i>10)
         {
          echo "출력 리스트에서 경상대 자연 제거"."<br>";
         //코드41번
         }


       }
       
       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 경상대 의예 제거"."<br>";
         //코드42,44,45번
       }
       else 
       {
         if($j>6)
         {
         echo "출력 리스트에서 경상대 의예 제거"."<br>";
         //코드42번
         }
         if($j>5)
         {
         echo "출력 리스트에서 경상대 의예 제거"."<br>";
         //코드44번
         }
         if($j>4)
         {
         echo "출력 리스트에서 경상대 의예 제거"."<br>";
         //코드45번
         }
       }
       

       
       

      

       return 0;
     }

     function pnu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
      
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank1+$rank3+$rank4);
       $j=min($rank1+$rank2,$rank2+$rank4,$rank3+$rank2);
       
       //echo $i."<br>";
       //echo $j."<br>";

    

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 부산대 자연 제거"."<br>";
         //코드46,47,48번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 부산대 자연 제거"."<br>";
         //코드46,47,48번
       }

       else 
       {
         if($j>5)
         {
         echo "출력 리스트에서 부산대 자연 제거"."<br>";
         //코드46번
         }
         if($j>6)
         {
         echo "출력 리스트에서 부산대 자연 제거"."<br>";
         //코드47번
         }
         if($i>4)
         {
         echo "출력 리스트에서 부산대 의예 제거"."<br>";
         //코드48번
         }
       }
       

       
       

      

       return 0;
     }

     function cnu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
      
       
       $i=$rank1+$rank4+$rank3;
       $j=$rank4+$rank2+$rank3;
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>11)
       {
          echo "출력 리스트에서 충남대 인문 제거"."<br>";
         //코드49번
       }
       if($i>9)
       {
          echo "출력 리스트에서 충남대 인문 제거"."<br>";
         //코드50번
       }
       if($i>8)
       {
          echo "출력 리스트에서 충남대 인문 제거"."<br>";
         //코드51번
       }


       

       if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 충남대 자연 제거"."<br>";
         //코드52,53,54,55,56,57번
       }

       else if($j>12)
         {
          echo "출력 리스트에서 충남대 자연 제거"."<br>";
         //코드52번
         }
       
       
       if($Math_choice=="확률과통계")
       {
          echo "출력 리스트에서 충남대 자연 제거"."<br>";
         //코드53,54,55,56,57번
       }
       else 
       {
         if($j>7)
         {
          echo "출력 리스트에서 충남대 수의예 제거"."<br>";
         //코드53번
         }
         if($j>6)
         {
          echo "출력 리스트에서 충남대 수의예 제거"."<br>";
         //코드54번
         }
         if($j>12)
         {
          echo "출력 리스트에서 충남대 자연 제거"."<br>";
         //코드55번
         }
         if($j>10)
         {
          echo "출력 리스트에서 충남대 자연 제거"."<br>";
         //코드56번
         }
         if($j>9)
         {
          echo "출력 리스트에서 충남대 자연 제거"."<br>";
         //코드57번
         }
       }
       

       
       

      

       return 0;
     }

     function jnu($rank1, $rank2, $rank3, $rank4)
     {
       $i;
       $j;
       $k;
      
       
       $i=$rank2+$rank3+$rank4;
       $j=min($rank1+$rank2,$rank3+$rank1,$rank2+$rank4,$rank3+$rank2,$rank4+$rank1,$rank3+$rank4);
       $k=min($rank2+$rank3+$rank4,$rank2+$rank1+$rank4,$rank2+$rank3+$rank1);
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>10)
       {
          echo "출력 리스트에서 제주대 자연 제거"."<br>";
         //코드58번
       }

       if($j>10)
       {
          echo "출력 리스트에서 제주대 자연 제거"."<br>";
         //코드59번
       }

       if($k>7)
       {
          echo "출력 리스트에서 제주대 자연 제거"."<br>";
         //코드60번
       }
      

       return 0;
     }

     function chnu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
       $k;
       
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       $j=$rank1+$rank2+$rank3+$rank4;
       $k=min($rank1+$rank2,$rank3+$rank1,$rank2+$rank4,$rank3+$rank2,$rank4+$rank1,$rank3+$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 전남대 자연 제거"."<br>";
         //코드61,62,63번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
         echo "출력 리스트에서 전남대 자연 제거"."<br>";
         //코드61,62,63번
       }

       else 
       {
         if($i>11)
         {
         echo "출력 리스트에서 전남대 자연 제거"."<br>";
         //코드61번
         }
         if($k>12)
         {
         echo "출력 리스트에서 전남대 자연 제거"."<br>";
         //코드62번
         }
         if($j>6)
         {
         echo "출력 리스트에서 전남대 치의예 제거"."<br>";
         //코드63번
         }
       }

       
       

      

       return 0;
     }

     function jbnu($rank1, $rank2, $rank3, $rank4)
     {
       global $Math_choice;
       global $Tamgu_1_type;
       global $Tamgu_2_type;
       $i;
       $j;
       
       
       $i=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       $j=$rank1+$rank2+$rank3+$rank4;
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($Math_choice=="확률과통계")
       {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드64,65,66,67,68,69,70,71,72,73번
       }

       else if($Tamgu_1_type=="사회탐구" || $Tamgu_2_type=="사회탐구")
       {
        echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드64,65,66,67,68,69,70,71,72,73번
       }

       else 
       {
         if($j>7)
         {
         echo "출력 리스트에서 전북대 의예 제거"."<br>";
         //코드64번
         }
         if($j>5)
         {
         echo "출력 리스트에서 전북대 의예 제거"."<br>";
         //코드65번
         }
         if($i>7)
         {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드66번
         }
         if($i>8)
         {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드67번
         }
         if($i>9)
         {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드68번
         }
         if($i>10)
         {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드69번
         }
         if($i>11)
         {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드70번
         }
         if($i>12)
         {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드71번
         }
         if($i>14)
         {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드72번
         }
         if($i>15)
         {
         echo "출력 리스트에서 전북대 자연 제거"."<br>";
         //코드73번
         }
       }

       
       

      

       return 0;
     }

     function namuzi($rank1, $rank2, $rank3, $rank4)
     {
       $i;
       $j;
       $k;
       $l;
       
       
       $i=$rank1+$rank2+$rank3+$rank4;
       $j=min($rank1+$rank2+$rank3,$rank1+$rank2+$rank4,$rank3+$rank2+$rank4,$rank1+$rank3+$rank4);
       $k=min($rank1+$rank2,$rank3+$rank1,$rank2+$rank4,$rank3+$rank2,$rank4+$rank1,$rank3+$rank4);
       $l=min($rank1,$rank2,$rank3,$rank4);
       
       //echo $i."<br>";
       //echo $j."<br>";

       if($i>9)
        {
        echo "출력 리스트에서 서울교대 제거"."<br>";
        //코드74번
        }
       if($j>3)
        {
        echo "출력 리스트에서 가천대 의예 제거"."<br>";
        //코드75번
        }
       if($k>2)
        {
        echo "출력 리스트에서 가천대 수의예 제거"."<br>";
        //코드76번
        }
       if($l>5)
        {
        echo "출력 리스트에서 조선대 제거"."<br>";
        //코드77번
        }
         
       

       
       

      

       return 0;
     }



     

     

     snu();
     yu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     ku($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     khu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     uos($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     hiu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     ehwa($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     sju($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     swu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     smu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     cuk($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     knu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     kynu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     gnu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     pnu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     cnu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     jnu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     chnu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     jbnu($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);
     namuzi($Korean_rank,$Math_rank,$English_rank,$Tamgu_rank);


    
    
    
    
    
    
    
    
    
     ?> 
  </body>
</html>