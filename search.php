<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocomplete Search</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
    <h1>Search with Autocomplete</h1>
    <form>
        <label for="search">Search:</label>
        <input id="search" type="text" name="search">
    </form>
    
    <script>
        $(document).ready(function() {
            $("#search").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "cari.php",
                        type: "GET",
                        dataType: "json",
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                minLength: 2 // Minimum length before the autocomplete kicks in
            });
        });
    </script>
</body>
</html>
