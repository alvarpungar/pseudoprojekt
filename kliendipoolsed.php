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
    <a href="http://www.khk.ee" onClick="alert('Jääme siia!');return false">Jääme siia</a><br>
    <img alt="" src="http://images.medicaldaily.com/sites/medicaldaily.com/files/2013/08/04/0/62/6259.jpg"
         style="height: 300px; width: 400px" id="imgClickAndChange" onclick="changeImage()"/>
    <script language="javascript">
        function changeImage() {

            if (document.getElementById("imgClickAndChange").src == "http://images.medicaldaily.com/sites/medicaldaily.com/files/2013/08/04/0/62/6259.jpg") {
                document.getElementById("imgClickAndChange").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7juIqQj7w7nZpj4FCqMrmw4tGPXnUzRL3JQGZ7Xcu9r-KClrA9QHE8KqZ";
            }
            else {
                document.getElementById("imgClickAndChange").src = "http://images.medicaldaily.com/sites/medicaldaily.com/files/2013/08/04/0/62/6259.jpg";
            }
        }
    </script>

</body>
</html>