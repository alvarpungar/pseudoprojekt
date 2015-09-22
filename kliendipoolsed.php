<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pungar</title>
</head>
<body>
    <button onclick="myFunction()">Tere maailm</button><br>
    <script>
        function myFunction() {
            alert("Tere maailm!");
        }
    </script>
    <a href="http://www.khk.ee" onClick="alert('Tere maailm!')">Tere maailm</a><br>
    <a href="http://www.khk.ee" onClick="alert('Jääme siia!') ;return false">Jääme siia</a>

</body>
</html>