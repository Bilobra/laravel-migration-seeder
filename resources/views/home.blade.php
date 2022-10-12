@extends('layout.app')
@section('metaTitle','HomePage')

@section('content')
<section class="black_section">
        <h2 class="title_section">I nostri treni:</h2>
        <div class="container">
            <div class="main_content">
                @forelse ($trains as $train)
                    <div class="card">
                        <a href="">
                            <h3>{{$train->azienda}}</h3>
                            <h5>codice del treno : {{$train->codice_treno}}</h5>
                            <p>numero di carrozze : {{$train->numero_carrozze}}</p>
                            <p>
                                Partenza : {{$train->stazione_di_partenza}} -- {{$train->orario_di_partenza}}
                            </p>
                            <p>
                                Arrivo : {{$train->stazione_di_arrivo}} -- {{$train->orario_di_arrivo}}
                            </p>
                    
                        </a>
                        <div class="badge">
                           <div class="text_badge">{{$train->codice_treno}}</div> 
                        </div>
                        
                    </div>
                @empty
                    <p>non ci sono elementi</p>
                @endforelse

            </div>
        </div>
    </section>
@endsection