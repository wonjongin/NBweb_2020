<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta charset="utf-8"/>
        <title></title>
    </head>

    <body>
    <?php
        $explanation = "";
        echo $explanation;
    ?>
    <h2>삼각함수</h2>
        <form method="post" action="result.php" >
          <select name="fun">
            <option value="Select trigonometrical function">Select trigonometrical function</option>
            <option value="sin">sin</option>
            <option value="cos">cos</option>
            <option value="tan">tan</option>

          </select>
          <input type="number" method="post" placeholder="값을 입력하세요" name="val" required/>
          <select name="unit">
            <option value="°">°</option>
            <option value="radian">radian</option>
          </select>
          <input type="submit" value="계산하기"/>
        </form>


        <!-- <?php

        ?> -->
    </body>
</html>

