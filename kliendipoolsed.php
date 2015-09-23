<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pungar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
    <button onclick="myFunction()">Tere maailm</button><br>
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
</body>
</html>