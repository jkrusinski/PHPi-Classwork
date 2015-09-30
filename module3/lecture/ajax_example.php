<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>

        $(document).ready(function(){


            $('#btn-fetch-data').on('click', function() {

                $.ajax({
                    url: "server_data.php",
                    dataType: "json",
                    success: function(data) {
                        var name = data.name;
                        var date = data.date;

                        $('#div-data').append(name + ' ' + date + '<br />');

                    }
                });

            });

        });

    </script>
</head>
<body>

<input type="button" value="Fetch Data" id="btn-fetch-data" />

<div id="div-data"></div>

</body>
</html>
