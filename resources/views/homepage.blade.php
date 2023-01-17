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
    <body class="bg-light">

        <main>
            <div class="container">
                <h1 class="text-center">Homepage</h1>

                <h5>All trains :</h5>
                <ul class="d-flex">
                    @foreach ($all_trains as $train)
                        <li class="mx-4 mb-4">
                            <div>
                                <strong>Company:</strong>
                                {{ $train->company }}
                            </div>   
                            <div>
                                <strong>Starting station:</strong>
                                {{ $train->starting_station }}
                            </div>  
                            <div>
                                <strong>Arrival station:</strong>
                                {{ $train->arrival_station }}
                            </div>
                            <div>
                                <strong>Starting time:</strong>
                                {{ $train->starting_time }}
                            </div>  
                            <div>
                                <strong>Arrival time:</strong>
                                {{ $train->arrival_time }}
                            </div>
                            <div>
                                <strong>Unique train code:</strong>
                                {{ $train->unique_code }}
                            </div>
                            <div>
                                <strong>Carriages' number:</strong>
                                {{ $train->carriages_num }}
                            </div>
                            <div>
                                <strong>In time:</strong>
                                <span class="{{ $train->in_time ? 'text-success' : 'text-danger' }}">
                                    {{ $train->in_time ? 'True' : 'False' }}
                                </span>
                            </div>
                            <div>
                                <strong>Cancelled:</strong>
                                <span class="{{ $train->is_cancelled ? 'text-danger' : 'text-success' }}">
                                    {{ $train->is_cancelled ? 'True' : 'False' }}
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <h5>Starting trains from now :</h5>
                <ul class="d-flex">
                    @foreach ($trains as $train)
                        <li class="mx-4 mb-4">
                            <div>
                                <strong>Company:</strong>
                                {{ $train->company }}
                            </div>   
                            <div>
                                <strong>Starting station:</strong>
                                {{ $train->starting_station }}
                            </div>  
                            <div>
                                <strong>Arrival station:</strong>
                                {{ $train->arrival_station }}
                            </div>
                            <div>
                                <strong>Starting time:</strong>
                                {{ $train->starting_time }}
                            </div>  
                            <div>
                                <strong>Arrival time:</strong>
                                {{ $train->arrival_time }}
                            </div>
                            <div>
                                <strong>Unique train code:</strong>
                                {{ $train->unique_code }}
                            </div>
                            <div>
                                <strong>Carriages' number:</strong>
                                {{ $train->carriages_num }}
                            </div>
                            <div>
                                <strong>In time:</strong>
                                <span class="{{ $train->in_time ? 'text-success' : 'text-danger' }}">
                                    {{ $train->in_time ? 'True' : 'False' }}
                                </span>
                            </div>
                            <div>
                                <strong>Cancelled:</strong>
                                <span class="{{ $train->is_cancelled ? 'text-danger' : 'text-success' }}">
                                    {{ $train->is_cancelled ? 'True' : 'False' }}
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </main>
    </body>
</html>
