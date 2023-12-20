<!-- resources/views/ajax-example.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>AJAX Example</title>
</head>
<body>
    <h1>AJAX Example</h1>
    
    <button id="getDataBtn">Get Data via AJAX</button>
    
    <div id="result"></div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#getDataBtn').on('click', function () {
                // Make AJAX request
                $.ajax({
                    type: 'POST',
                    url: '/ajax-example',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        console.log(data); // Log the entire response
                        $('#result').html('<p>' + data.message + '</p>');
                    },

                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
