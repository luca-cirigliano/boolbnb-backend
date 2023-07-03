@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="text-center"> Vuoi sponsorizzare il tuo appartamento per potere avere un incremento di prenotazioni?</h1>

    <h4 class="text-center">In questa sezione puoi scegliere il tipo di sponsorizzazione che desideri</h4>

    <p> La sponsorizzazione permetterà al tuo appartamento di:</p>
    <ul>
        <li>
            Farlo apparire in Homepage nella sezione “Appartamenti in Evidenza”;
        </li>
        <li>
            Nella pagina di ricerca, verrà posizionato sempre prima di un appartamento non
            sponsorizzato che soddisfa le stesse caratteristiche di ricerca.
        </li>
    </ul>

    <div class="row justify-content-center">
        @forelse ($sponsors as $sponsor)
        <div class="col-1 col-md-2 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">{{$sponsor->name}}</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Utilizza questo pacchetto per usufruire di <strong>{{$sponsor->duration}}</strong> ore di vantaggi!
                    </p>
                </div>

                <div class="card-footer">
                    <p class="card-text">Prezzo: <strong>{{$sponsor->price}}</strong> €</p>
                </div>

            </div>

        </div>

        @empty
        Nessuno sponsor esistente
        @endforelse
    </div>

    <p>
        Terminato il periodo di sponsorizzazione, l’appartamento tornerà ad essere
        visualizzato normalmente. Potrai acquistare nuovamente il pacchetto promozionale quando vorrai.
    </p>
</div>
@endsection