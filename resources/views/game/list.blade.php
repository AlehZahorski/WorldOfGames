@extends('layout.main')

@section('content')
    <div class="row mt-3">
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Liczba gier</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $statistics['count'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-gamepad fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Liczba gier 7+</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $statistics['countScoreGtSeven'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-star-half-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Średnia ocena</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $statistics['avg'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thermometer-half fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Maksymalna ocena</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $statistics['max'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thermometer-full fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Minimalna ocena</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $statistics['min'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thermometer-empty fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="card card100vw">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Najlepsze gry</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellpadding="0">
                        <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Tytul</th>
                            <th>Ocena</th>
                            <th>Kategoria</th>
                            <th>Opcje</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Lp</th>
                            <th>Tytul</th>
                            <th>Ocena</th>
                            <th>Kategoria</th>
                            <th>Opcje</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($bestGames ?? [] as $bestGame)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bestGame->title }}</td>
                                <td>{{ $bestGame->score }}</td>
                                <td>{{ $bestGame->genre_name }}</td>
                                <td>
                                    <a href="{{ route('games.show', ['game' => $bestGame->id]) }}">Szczegoly</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="card card100vw">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Gry</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellpadding="0">
                        <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Tytul</th>
                            <th>Ocena</th>
                            <th>Kategoria</th>
                            <th>Opcje</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Lp</th>
                            <th>Tytul</th>
                            <th>Ocena</th>
                            <th>Kategoria</th>
                            <th>Opcje</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($games ?? [] as $game)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $game->title }}</td>
                                <td>{{ $game->score }}</td>
                                <td>{{ $game->genre_name }}</td>
                                <td>
                                    <a href="{{ route('games.show', ['game' => $game->id]) }}">Szczegoly</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
