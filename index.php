<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play" />
<style>
  body{
    font-family: Play;
  }
  @media (max-width: 600px) {
    h1{
        text-align: center;
    }
    @counter-style repeating-emoji {
        system: cyclic;
        symbols: "\1F621" "\1F600" "\1F610";
        suffix: " ";
    }
    .hr1{
        margin-top: 5%;
    }
    .info{
        line-height: 15px; font-size: 18px; width: 70%; text-align: center; margin-left: 15%; margin-top: 15%;
    }
    ul {
        list-style: repeating-emoji;
        font-size: 25px;
        margin-top: 40%;
        margin-left: 10.77%;
        width: 60%;
    }
  }
  @media (min-width: 700px) {
    h1{
        text-align: center;
    }
    @counter-style repeating-emoji {
        system: cyclic;
        symbols: "\1F621" "\1F600" "\1F610";
        suffix: " ";
    }
    .hr1{
        margin-top: 5%;
    }
    .info{
        line-height: 30px; font-size: 28px; width: 70%; text-align: center; margin-left: 15%; margin-top: 10%;
    }
    ul {
      list-style: repeating-emoji;
      font-size: 25px;
      margin-top: 23%;
      margin-left: 10.77%;
      width: 60%;
    }
  }
</style>
</head>
<body>
<?php
$output = exec("python3 op.py");
$pieces = explode(" ", $output);
$p1 = $pieces[0] / 2;
$p2 = $pieces[1] / 2;
$p3 = $pieces[2] / 2;
$l = (100 - ($p1 + $p2 + $p3)) / 2;
$p1f = $p1 + $l;
$p2f = $p1f + $p2;
//echo($l);
echo("<h1>Today's news sentiment</h1>");
echo("<div><div style='border-radius: 20px 0px 0px 20px; width: $p1%; height: 5rem; background: red; color: red; position: absolute; margin-top: 5%; left: $l%;'>_</div>");
echo("<div style='width: $p2%; height: 5rem; background: green; color: green; position: absolute; margin-top: 5%; left: $p1f%;'>_</div>");
echo("<div style='border-radius: 0px 20px 20px 0px; width: $p3%; height: 5rem; background: yellow; color: yellow; position: absolute; margin-top: 5%; left: $p2f%;'>_</div></div>");
echo("<ul><li>Red represents all of today's news headlines that express negative emotions about recent events or occurences.</li>
<br></br>
<li>Green represents all of today's news headlines that express positive emotions about recent events or occurences.</li>
<br></br>
<li>Yellow represents all of today's news headlines that don't express any perticular emotion, and are just informative.</li>
</ul>");
echo("<div class='info'>This app scrapes all of today's top news headlines from <a href='https://www.bbc.com/news'>BBC news</a>, performs sentiment analysis on them and then in-turn classifies them as either: positive sentiment, negative sentiment or neutral.</div>");
echo("<hr width=70% class='hr1'></hr>");
echo("<div style='width: 70%; text-align: center; margin-left: 15%;'><div style='font-size: 0.8rem; margin-top: 3%; text-align: center; padding-bottom: 3%;'>Psst, you still there? 
<br></br>
If you like these types of projects, make sure to give me a follow on <a href='https://twitter.com/MatveyNikonorov'>twitter</a>
</div></div>");
?>
</body>
</html>