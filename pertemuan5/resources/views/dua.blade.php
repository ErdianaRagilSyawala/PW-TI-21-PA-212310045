<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Course</th>
                    <th>Type</th>
                    <th>Rate</th>
                </tr>
            </thead>
            @foreach ($data['skill'] as $index => $result)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $result['course'] }}</td>
                <td>{{ $result['type'] }}</td>
                <td>
                    <div>
                        @for ($i = $result['rate']; $i > 0; $i--) <span class="me-1 text-warning bi bi-star">
                            <i class="bi bi-star{{ ($i < 5) ? '-fill' : ' '}}"></i>
                        </span>
                        {{ $result['rate'] }}
                        @endfor
                    </div>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>