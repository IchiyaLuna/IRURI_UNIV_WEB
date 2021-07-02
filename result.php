<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        $gender = $_POST['gender-radio']."<br>";
        $type = $_POST['type-radio']."<br>";
        
        $first_korean = $_POST['first-korean']."<br>";
        $first_math =  $_POST['first-math']."<br>";
        $first_english =  $_POST['first-english']."<br>";
        $first_history =  $_POST['first-history']."<br>";
        $first_social =  $_POST['first-social']."<br>";
        $first_science =  $_POST['first-science']."<br>";

        $second_korean = $_POST['second-korean']."<br>";
        $second_math =  $_POST['second-math']."<br>";
        $second_english =  $_POST['second-english']."<br>";
        $second_history =  $_POST['second-history']."<br>";
        $second_social =  $_POST['second-social']."<br>";
        $second_science =  $_POST['second-science']."<br>";

        $third_korean = $_POST['third-korean']."<br>";
        $third_math = $_POST['third-math']."<br>";
        $third_english = $_POST['third-english']."<br>";
        $third_history = $_POST['third-history']."<br>";
        $third_social = $_POST['third-social']."<br>";
        $third_science = $_POST['third-science']."<br>";

        echo "성별 = ";

        if ($gender == 1){
            echo "남자"."<br>";
        }
        if ($gender == 2) {
            echo "여자" . "<br>";
        }

        echo "계열 = ";
        if ($type == 1) {
            echo "인문" . "<br>";
        }
        if ($type == 2) {
            echo "자연" . "<br>";
        }

        echo "1학년 성적 = ";
        echo $first_korean . " ";
        echo $first_math . " ";
        echo $first_english . " ";
        echo $first_history . " ";
        echo $first_social . " ";
        echo $first_science . "<br>";

        echo "2학년 성적 = ";
        echo $second_korean . " ";
        echo $second_math . " ";
        echo $second_english . " ";
        echo $second_history . " ";
        echo $second_social . " ";
        echo $second_science . "<br>";

        echo "3학년 성적 = ";
        echo $third_korean . " ";
        echo $third_math . " ";
        echo $third_english . " ";
        echo $third_history . " ";
        echo $third_social . " ";
        echo $third_science . "<br>";
        ?>
    </body>
</html>