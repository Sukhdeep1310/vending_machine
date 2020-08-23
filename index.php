 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
              
$code=$_POST["code"];
$numFive=$_POST["numFive"];
$numTen=$_POST["numTen"];
$numTwentyFive=$_POST["numTwentyFive"];
$numDollar=$_POST["numDollar"];
class addValues{
    private $five,$ten,$twentyfive,$dollar;
    
    public function __construct($a,$b,$c,$d){
        
        $this->five=$a;
        $this->ten=$b;
        $this->twentyfive=$c;
        $this->dollar=$d;
        
    }
    public function sum(){
       return round(($this->five*5 + $this->ten*10 + $this->twentyfive*25+ $this->dollar*100)/100,2);
        
    }
}
    $total = new addValues($numFive,$numTen,$numTwentyFive,$numDollar);     
    $result = $total->sum();

    echo "<div class=msg>";
    if($code=="123" || $code=="124"|| $code=="125" ){
        echo "Your deposited amount is $".round($result,2)."<br>";

        if($result<1.25){
            $new=round(1.25-$result,2);
            echo "Please insert more coins.You need $".$new."more to purchase this item<br>";
        }
        else{
            $change=$result-1.25;
            echo "Change: $".$change."<br>";
            echo "Please collect your change and item";
        }
    }
    elseif($code=="223" || $code=="224"|| $code=="225"){
        echo "Your deposited amount is $".round($result,2)."<br>";
        if($result<1.50){
            $new=round(1.50-$result,2);
            echo "Please insert more coins.You need $".$new."more to purchase this item<br>";
        }
        else{
            $change=$result-1.50;
            echo "Change: $".$change."<br>";
            echo "Please collect your change and item";
        }     
    }
    elseif($code=="323" || $code=="324"|| $code=="325"){
        echo "Your deposited amount is $".round($result,2)."<br>";
        if($result<1.75){
            $new=round(1.75-$result,2);
            echo "Please insert more coins.You need $".$new."more to purchase this item<br>";
        }
        else{
            $change=$result-1.75;
            echo "Change: $".$change."<br>";
            echo "Please collect your change and item";
        }          
    }
    else{
        echo "<script type='text/javascript'>alert (' Entered Code is Incorrect.Try again');</script>";
    }
    
}
echo "</div>";
?>



<!doctype html>
<html>
    <head>
        <title>Vending Machine</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
                font-size: 25px;
                
            }
            .msg{
                background-color: #81F781;
                text-align: center;
                margin-left: 4%;
                margin-right: 5%;
            }
            .choco{
                width:15%;
                display: inline-block;
            }
            .code{
                width:15%;
                display: inline-block;
                 text-align: center;
            }
            .left,.right{
                width: 46%;
                padding: 2%;
            }
            .left{
                float: left;
            }
            .right{
                margin-top: 10%;
                float: right;
            }
            input{
                font-size: 25px;
            }
            h1{
                text-align: center;
                color: #0404B4;
            }
            .container{
                width: 90%;
                height: 680px;
                margin-left: 4%;
                margin-right: 2%;
                border: 1px solid black;
                background-color: #CECEF6;
            }
        </style>
    </head>
    <body>
        <h1>Vending Machine</h1>
        <div class="container">
            
            <div class="left"> 
            <h3>Chocolate Bars($1.25 each)</h3>
            <div class="choco">
                <img src="images/img1.jpg" width="90%" height="10%">

            </div>
            <div class="choco">
                <img src="images/img2.jpg" width="90%" height="10%">

            </div>
            <div class="choco">
                <img src="images/img3.jpg" width="90%" height="10%">

            </div><br>
            <div class="code">
                <b>123</b>
            </div>
            <div class="code">
                 <b>124</b>
            </div>
            <div class="code">
                <b>125</b>
            </div>
            <h3>Pop($1.50 each)</h3>
            <div class="choco">
                <img src="images/row1.png" width="90%" height="10%">

            </div>
            <div class="choco">
                <img src="images/row2.jpg" width="90%" height="10%">

            </div>
            <div class="choco">
                <img src="images/row3.jpg" width="90%" height="10%">

            </div><br>
            <div class="code">
                <b>223</b>
            </div>
            <div class="code">
                 <b>224</b>
            </div>
            <div class="code">
                <b>225</b>
            </div>
            <h3>Chips($1.75 each)</h3>
            <div class="choco">
                <img src="images/im1.jpeg" width="90%" height="10%">

            </div>
            <div class="choco">
                <img src="images/im2.jpg" width="90%" height="10%">

            </div>
            <div class="choco">
                <img src="images/im3.jpg" width="90%" height="10%">

            </div><br>
            <div class="code">
                <b>323</b>
            </div>
            <div class="code">
                 <b>324</b>
            </div>
            <div class="code">
                <b>325</b>
            </div>
            <br><br>
        </div>
        <div class="right">
            <form action="index.php" method="post">
                To Select any item<br>
                Enter the code <input type="number" name="code" minlength="3" maxlength="3" required><br><br><br>
                number of 5 cent coins: <input type="number" name="numFive" min="0" max="50" required><br><br>
                number of 10cent coins: <input type="number" name="numTen" min="0" max="50" required><br><br>
                number of 25cent coins: <input type="number" name="numTwentyFive" min="0" max="50" required><br><br>
                number of 1dollar coins: <input type="number" name="numDollar" min="0" max="2" required><br><br>

                <button type="submit" data-toggle="modal" data-target="#myModal">Order</button>
            </form>
        </div>
            
        </div>              
    </body>
</html>

