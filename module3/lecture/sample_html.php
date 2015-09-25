<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            width: 100%;
            color: blue;
        }
    </style>
    <script type="text/javascript" language="javascript">
        function myClickFunction() {
            var person_name = document.getElementById('pname').value;

            if (person_name == "") {
                alert('Please enter a person name.');
            } else {
                alert('You entered ' + person_name + '.');
            }
        }
    </script>
</head>
<body>

<h3>HTML Is Cool</h3>

<label>Enter Name: <input type="text" name="person_name" id="pname" size="20" class="inputbox" /></label>
<br/>
<input type="button" value="Click Me" onclick="myClickFunction();" class="inputbox" />
</body>
</html>