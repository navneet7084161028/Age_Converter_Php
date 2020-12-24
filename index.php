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
         body{
             margin: 0;
             padding: 0;
             /* background-color: rgb(138, 104, 170); */
             background-image: url(watch.jpg);
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
             text-align: center;
             height: 100vh;
         }
         h1{
             color: lightgreen;
             font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
             font-size: 60px;
             font-weight: 700;
             padding-top: 20px;
         }
         .container{
             margin: auto;
             width: 60%;
             height: auto;
             /* background-color: pink; */
             /* background: linear-gradient(to bottom left, #ffff99 29%, #ff00ff 100%); */
             background: linear-gradient(to bottom left, #00ffff 29%, #ff00ff 100%);

             padding-top: 40px;
             border-radius: 10px;
         }
         input[type=date]{
            background-color: rgb(236, 225, 225);
            height: 10vh;
            font-size: large;
            width: 60%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }
        input[type=time]{
            background-color: rgb(236, 225, 225);
            height: 10vh;
            font-size: large;
            width: 60%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }

        input[type=submit]{
            font-weight: 700;
            font-family:cursive;
            font-size: 30px;
            width: 50%;
            background-color: #4CAF50;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        label{
            font-size: 25px;
            font-family: Georgia, 'Times New Roman', Times, serif;

        }
        #result{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 23px;
            font-weight: 700;
            color: blue;
        }
     </style>
</head>
<body>
    <h1><em>Calculate Your Age</em></h1>
    <div class="container">
        
        <form id="login" method="POST">
            <label>Enter Your Birth Date</label><br>
            <input type="date" value="" id="date" name="date" /><br><br>

            <label>Enter Your Birth Time</label><br>
            <input type="time" value="" id="time" name="time" /><br><br>

            <!-- <label>Enter Year:-</label>
            <input type="number" value="" id="year" name="year" /><br><br> -->

            <input type="submit" value="Check" name="submit" /><br><br>
            <P id="result"></p>

        </form>
    </div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script>
    var set ;
        $(document).ready(function(){
            $('#login').submit(function(e){
                clearInterval(set);
                var date = $('#date').val();
                var time = $('#time').val();
                // var year = $('#year').val();
                e.preventDefault();
                set = setInterval(function(){ 

                $.ajax({
                    type:'POST',
                    url:'convert.php',
                    data:{'date':date, 'time':time},
                    success:function(data){

                        // console.log(data);
                        $('#result').text(data);
                        }
                    })
                }, 1000);

            });
        });
    
    </script>