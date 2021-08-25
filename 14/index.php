<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form id="form" action="<?=$_SERVER['PHP_SELF'];?>" onsubmit="event.preventDefault();" method="post" >
    Enter string : <br>
    <input id="name" type="text" name="name">
    <input type="submit" onclick="validateMyForm();">
</form>


<div id="result">

</div>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script>
    var arr = {'mr' : "Hello master", 'mrs' : "Hello mrs", 'else' : "hello"};
    var text = 'mr ahmed';



    function validateMyForm(){
        var msg = '';
        var text = document.getElementById('name').value;
    
        if( text.includes('mr.') |  text.includes('mr '))
            msg = arr['mr'];

        else if( text.includes('mrs') )
            msg = arr['mrs'];

        else
            msg = arr['else'];


        var data ={'name' : msg};

  $.ajax({
            type: "POST",
            url: "/try/response.php",
            data: {
                 json: data
            },
            success: function (response) {
                //service.php response
                console.log(response);
                document.getElementById('result').innerHTML = response;
            }
        });
    }



</script>
</body>

</html>

