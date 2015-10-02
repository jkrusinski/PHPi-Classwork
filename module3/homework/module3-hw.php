<html>

<head>
    <title>Countries on Earth</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <style>
        body {
            font-family: monospace;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.click').on('click', function () {

                //create variable to hold the index of the country clicked
                var index = $(this).data('index');
                //create variable to hold the string the user typed to make same query
                var query = $(this).data('query');

                //Make ajax call to get the list of countries once more
                $.ajax({
                    url: 'get_countries.php',
                    method: 'POST',
                    data: {
                        query: query
                    },
                    success: function (data) {

                        //Parse string into JSON object
                        var obj = JSON.parse(data);

                        //Add data to HTML string
                        var html = '<h1>' + obj[index].name + '</h1>';
                        html += '<h4>Capital: ' + obj[index].capital + '</h4>';
                        html += '<h4>Region: ' + obj[index].region + '</h4>';
                        html += '<h4>Population: ';
                        //Weird replace method acts like php number_format (copied from stack
                        html += obj[index].population.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '</h4>';
                        html += '<h4>Languages: ' + obj[index].languages.join(', ') + '</h4>';

                        //Replace contents of #information with html string
                        $('#information').html(html);

                    }
                });
            });
        });
    </script>
</head>

<body>

<h3>Countries on Earth</h3>

<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <label>Enter Country Name: <input type="text" name="country_name" size="30"/></label>
    <input type="submit" name="submit" value="Get Details"/>
</form>

<hr/>

<div id="information">
    <?php

    // Check for an incoming POST request
    if (isset($_POST['submit'])) {

        $countryName = $_POST['country_name'];

        if ($countryName) {

            //Get country info from API
            $countryJSON = @file_get_contents('http://restcountries.eu/rest/v1/name/' . $countryName);

            //if API came back correctly
            if ($countryJSON) {

                //convert JSON into PHP stdObject
                $countryInfo = json_decode($countryJSON);

                //if more than one country was returned
                if (count($countryInfo) > 1) {

                    echo '<h3>Did you mean...</h3>';

                    //loop through each country that was returned
                    foreach ($countryInfo as $key => $value) {

                        //Add button linking to country index
                        echo "<button class='click' data-index='$key' data-query='$countryName'>";
                        echo $countryInfo[$key]->name;
                        echo "</button>";

                    }

                } else {

                    //Print country info
                    echo "<h1>" . $countryInfo[0]->name . "</h1>";
                    echo "<h4>Capital: " . $countryInfo[0]->capital . "</h4>";
                    echo "<h4>Region: " . $countryInfo[0]->region . "</h4>";
                    echo "<h4>Population: " . number_format($countryInfo[0]->population) . "</h4>";
                    echo "<h4>Languages: " . implode(', ', $countryInfo[0]->languages) . "</h4>";

                }

            } else {

                echo 'Please enter a valid country name.';

            }


        } else {

            echo 'Please enter a valid country name.';

        }

    }
    ?>
</div>

</body>

</html>