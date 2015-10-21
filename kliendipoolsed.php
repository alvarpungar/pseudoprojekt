<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pungar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<button onclick="myFunction()">Tere maailm</button>
<br>
<script>
    function myFunction() {
        alert("Tere maailm!");
    }
</script>
<a href="http://www.khk.ee" onClick="alert('Tere maailm!')">Tere maailm</a><br>
<a href="http://www.khk.ee" onClick="alert('Jääme siia!');return false">Jääme siia</a><br>

<div class="kass2">
    <img src="http://images.medicaldaily.com/sites/medicaldaily.com/files/2013/08/04/0/62/6259.jpg" width="20%"
         height="20%">
</div>

<script>
    $("img[src='http://images.medicaldaily.com/sites/medicaldaily.com/files/2013/08/04/0/62/6259.jpg']").click(function () {
        $(this).attr("src", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7juIqQj7w7nZpj4FCqMrmw4tGPXnUzRL3JQGZ7Xcu9r-KClrA9QHE8KqZ")
    })
</script>
<button id="btn1">RED</button>
<button id="btn2">GREEN</button>
<button id="btn3">BLUE</button>
<script>
    $(document).ready(function () {
        $('#btn1').click(function () {
            $('body').css('backgroundColor', $('#btn1').text());
        });
    });
    $(document).ready(function () {
        $('#btn2').click(function () {
            $('body').css('backgroundColor', $('#btn2').text());
        });
    });
    $(document).ready(function () {
        $('#btn3').click(function () {
            $('body').css('backgroundColor', $('#btn3').text());
        });
    });
</script>
<button id=rclick>Luba parem klõps</button>
<script>
</script>
<script>
    $("html").ready(function () {
        $("html").on("contextmenu", function () {
            return false;
        });
    });


    $("#rclick").click(function () {
        $("html").off("contextmenu");
    });
</script>

</body>
</html>