<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
</head>
<body>
 <h4>This is blog page</h4>

    <ul>
        @foreach ($customers as $ct)
            <li>
                {{ $ct }}
            </li>
        @endforeach
    </ul>
</body>
</html>
