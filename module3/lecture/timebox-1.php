<?php
//make a webpage that has three radio buttons and: yes, no, maybe so
//Have a textbox right under it with a "name" input
//And then have a button, when clicked, displays a message that says Yes we can hang out {name}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h3>RSVP To The Awesome Party</h3>

    <p>Can you go?</p>
    <input type="radio" name="answer" value="Yes"> Yes
    <input type="radio" name="answer" value="No"> No
    <input type="radio" name="answer" value="Maybe so"> Maybe So <br />

    <p>What's your name?</p>
    <input type="text" name="name" placeholder="Your Name" class="name"> <br />

    <input type="button" name="go"  value="Submit RSVP" class="click-me">


    <div class="response" style="display: none;"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="app.js"></script>
</body>
</html>
