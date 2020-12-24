<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Age Converter</title>
    <style>
    #div1{
           
            background-color: rgb(155, 125, 184);
            height: 20vh;
    }  
    h1{
        text-align: center;
    }      
    </style>
</head>
<body>
            <h1>Age converter</h1>
        <div class="container" id="div1">
            <form action="index.php" method="POST">
                <select name="day">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>

                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>

                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>&nbsp;&nbsp;&nbsp;&nbsp;
                
                <select name="month">

                    <option value="1">January</option>
                    <option value="2">Febuary</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>   

                </select>&nbsp;&nbsp;&nbsp;

                <select name="year">

                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>

                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>

                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                </select>

                <input type="submit" name="submit" value="calculate" />
            </form>
    </div>

<?php 

if(isset($_POST['submit'])){
    $d = $_POST['day'];
    $m = $_POST['month'];
    $y = $_POST['year'];

    $dob = $d. '-' .$m. '-' .$y;

    $bday = new DateTime($dob);
    $today = date('d-m-y');
    $age = $bday -> diff(new DateTime);
    echo "<br>";
    echo "your birthday is: -";
    echo $dob;
    echo "<br>";
    echo $age-> y;
    echo "years";
    echo $age-> m;
    echo "Months";
    echo $age-> d;
    echo "Dates";
}


?>


</body>
</html>





<!-- <?php 
echo "Today date is : ". date("d")."<br>";
echo "Month is: ". date("M")."<br>";
echo "Year is: ". date("Y")."<br>";
echo "Today Day is: ". date("D")."<br>";
echo "Week day is: ". date("l")."<br>";
echo "Full Date is: ". date("d-M-Y")."<br>";
echo "It show the current total day in a year: ". date("z")."<br>";
echo "It show the current week in a year: ". date("W")."<br>";
echo "It show the present day in the month: ". date("t")."<br>";
echo "It show the current year is leap year or not: ". date("L")."<br>";
?> -->