</html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
  <style>
       input
     { 
        display: block;
        color:red;
        margin:10;
        width:50%;
        padding:8px;
        position: relative;
        left: 20%;
        top: 100px;   
    }
    #container
        {
         margin-left:10%;
         position:relative;
         top:20px;
        }
        .txt{
            text-align: center;
            vertical-align: middle;
            line-height: 80px; 
            font-size: 30px;
        }
        .p1{
           margin-left:1%;
           text-align: center;
           position:relative;
           font-size: 45px;
           top: 24%;
        }
      </style>         
  <body>

<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

<div id='container'>
<form action="index.php" method="get" autocomplete="off">
  <input type="text" id="time1" placeholder="Starttime" name="start" required value="">
  <input type="text" id="time2" placeholder="Endtime"   name="end" required   value="">
  <input type="text" id="time3" placeholder="Break"     name="break" required value="">
  <input type="date" placeholder="Date" name="day" required>
  <input type="submit">

         </div>
      </form>
   </body>
</html>

<?php
include 'config.php';
// Get the Data
error_reporting(E_ALL ^ E_NOTICE);
  $start = $_GET["start"];
  $end   = $_GET["end"];
  $break = $_GET["break"];
  $day   = $_GET["day"];
  
echo 
   "<br>".
   "<br>". 
   "<br>";
// calculate the Data
$a = new DateTime($end);
$b = new DateTime($start);
$interval = $a->diff($b);

// Display the Data  in array
$array = array('<div class="txt">'."<br>"."Am: ".$day." haben Sie ".$interval->format("%H:%I").' gearbeitet'.'<br>'.'<br>'.'</div>');
 for ($x = 0; $x <= $array[8]; $x++)
{
  echo '<div class="txt">'.$array[$x]."Und Ihre Pausezeit ist ".$break.'<br>'.'<br>'.'</div>';
}

 if ($interval->format("%H:%I") > 10)
{
  echo '<div class="txt">'."heute haben Sie mehr als 10 Stunden gearbeitet!".'</div>';
}

 if ($interval->format("%h:%i") == 10) 
{
  echo '<div class="txt">'."heute haben Sie 10 Stunden gearbeitet!".'<br>'.'<br>'.'</div>';
}
// Insert Data to Database
$sql = "INSERT INTO times (Starttime,Breaktime,Endtime,Workday)
VALUES ('$start','$break','$end','$day')";
?>
 
<script src="timePicker.js" >
<link href="//cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css"  rel="stylesheet">
<script src="//cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>

