<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <style>
        div{
            width:150px;
            height:100px;
            border:1px solid black;
            margin:10px;
            float:left;
            padding:30px;
            text-align:center;
            background-color:lightgray; 
        }
        h3
        {
            background-color:white;
        }
    </style>
    <script>
        var x=0;
        var y=0;
        var z=0;
        $(document).ready(function(){
            $("div.over").mouseover(function(){
                $(".over span").text(x+=1);
            });
            $("div.enter").mouseenter(function(){
                $(".enter span").text(y+=1);
            });
            $("div.move").mousemove(function(){
                $(".move span").text(z+=1);
            });

        });

    </script>
</head>
<body>
    <div class="over">
        <h3>Mouse Over:<span></span></h3>
    </div>
    <div class="enter">
        <h3>Mouse Enter:<span></span></h3>
    </div>  
    <div class="move">
        <h3>Mouse Move:<span></span></h3>
    </div>  
</body>
</html>