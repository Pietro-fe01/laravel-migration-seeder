<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <h1>Homepage</h1>
                <ul class="d-flex justify-content-between">
                    @foreach ($trains as $train)
                        <li>
                            <div>
                                <strong>Company:</strong>
                                {{ $train->company }}</div>   
                            <div>
                                <strong>Starting station:</strong>
                                {{ $train->starting_station }}</div>  
                            <div>
                                <strong>Arrival station:</strong>
                                {{ $train->arrival_station }}</div>
                            <div>
                                <strong>Starting time:</strong>
                                {{ $train->starting_time }}</div>  
                            <div>
                                <strong>Arrival time:</strong>
                                {{ $train->arrival_time }}</div>
                            <div>
                                <strong>Unique train code:</strong>
                                {{ $train->unique_code }}</div>
                            <div>
                                <strong>Carriages' number:</strong>
                                {{ $train->carriages_num }}</div>
                            <div>
                                <strong>In time:</strong>
                                {{ $train->in_time }}</div>
                            <div>
                                <strong>Cancelled:</strong>
                                {{ $train->is_cancelled }}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </main>
    </body>
</html>
