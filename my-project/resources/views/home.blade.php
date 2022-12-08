@extends('layouts.app')

@section('title', 'Accueil')
    


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach ($users as $user)
            <div class="col-3">
                <article class="card">
                    <header class="card-header">
                         <h1>{{ $user->name }}</h1>
                    </header>
                    <div class="card-body">
                        <div class="">
                            {!! $user->email !!}
                        </div>
                    </div>
                    <footer class="card-footer">
                        {{ $user->created_at->format('d/m/Y à H:i:s') }}
                    </footer>
                </article>
            </div>
        @endforeach

    </div>
</div>
@endsection