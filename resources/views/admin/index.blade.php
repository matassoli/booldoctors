@extends('layouts.app')

@section('title')
    BoolDoctors - Dashboard
@endsection

@section('content')
    {{-- personal info --}}
    <section id="info">
        <div class="my_container info d-flex">
            {{-- profile image --}}
            <div class="image_box d-flex flex-column align-items-center">
                <figure class="text-center">
                    @if ($details->image != 'https://via.placeholder.com/150')
                    <img {{-- da modificare in caso di seed --}} src="{{ asset('storage/' . $details->image) }}" alt="Immagine di {{$user->name}} {{$user->surname}}">
                    @else
                    <img src="https://i.ibb.co/wQBsxBd/standard-Doctor.png" alt="Immagine del dottore">
                    @endif
                    <figcaption>
                        <p><small>La tua immagine di profilo</small></p>
                    </figcaption>
                </figure>
                <div class="info-buttons d-flex justify-content-around">
                    <a href="{{route('admin.profile.edit', [ 'profile' => $user->id ])}}"><button type="button" class="btn btn-insert"><i class="fas fa-pencil-alt"></i> Modifica dettagli</button></a>
                    <a href="#"><button type="button" class="btn btn-danger"><i class="fas fa-times"></i> Elimina profilo</button></a>
                </div>
            </div>

            {{-- personal details --}}
            <div class="details d-flex">
                <div class="details-title">
                    <h1>Buongiorno, <br> <span class="name">{{$user->name}} {{$user->surname}}</span></h1>
                </div>
                <div class="bio d-flex">
                    <h4><strong>Indirizzo <br> </strong> {{$user->details->address}}</h4>
                    <p><strong>Bio <br> </strong> {{$user->details->bio}}</p>
                    <a href="{{route('admin.messages')}}"><button type="button" class="btn btn-insert">Mostra messaggi</button></a>
                </div>
            </div>
        </div>
    </section>
    {{-- fine personal info --}}

    {{-- reviews --}}
    <section id="reviews">
        <div class="my_container d-flex flex-row-reverse align-items-center">
            <div class="reviews d-flex justify-content-center align-items-center">
                <a href="{{route('admin.comments')}}"><button type="button" class="btn btn-insert">Mostra recensioni</button></a>
            </div>
            <div class="reviews-image">
                <img src="https://www.interno16holidayhome.com/wp-content/uploads/2019/01/reviews.png" alt="Recensioni">
            </div>
        </div>
    </section>
    {{-- fine reviews --}}

    {{-- statistics --}}
    <section id="statistics">
        <div class="my_container d-flex align-items-center">
            <div class="statistics d-flex justify-content-center align-items-center">
                <a href="{{route('admin.statistics')}}"><button type="button" class="btn btn-insert">Visualizza le tue statistiche</button></a>
            </div>
            <div class="statistics-image">
                <img src="https://images.vexels.com/media/users/3/143065/isolated/preview/c6cbc8cf5ca3856bca8d5f28c0471fca-bar-graph-cart-by-vexels.png" alt="Grafico">
            </div>
        </div>
    </section>
    {{-- fine statistics --}}

    {{-- sponsorships --}}
    <section id="sponsor">
        <div class="my_container">
            <div class="text-center h-100 d-flex flex-column justify-content-between">
                <div class="text">
                    <h2>
                        Vuoi aggiungere una sponsorizzazione al tuo profilo?
                    </h2>
                    <p>
                        Scegli fra le seguenti offerte e acquista visibilità, il tuo profilo sarà messo in risalto nella homepage di BoolDoctors!
                    </p>
                </div>
                <a href="#"><button class="btn btn-insert">Ottieni sponsorizzazione</button></a>
            </div>
        </div>
    </section>
    {{-- fine sponsorships --}}
@endsection
