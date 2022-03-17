<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    </div>
    <h1>Profile</h1>
    <a href="{{ url('/') }}">Home</a> |
    <a href="{{ url('/pokemonlist') }}">Available Pokemon List</a> |
    <a href=" {{ URL::to('/pokemonpollssurvey') }}">Pokemon Polls Survey</a> |
    <a href="{{ url('/profile') }}">User Profile</a> |
</body>
</html>