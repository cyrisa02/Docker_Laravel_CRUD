@extends('layouts.master')

@section('contenu')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Liste des étudiants inscrits</h3>
        <div class=" mt-2">
            <div class="d-flex justify-content-between mb-2">
                {{ $etudiants->links() }}
                <div>
                    <a href="{{ route('etudiant.create') }}" class="btn btn-primary">+ Ajouter</a>
                </div>
            </div>
            @if (session()->has('successDelete'))
                <div class="alert alert-success">
                    <p>{{ session()->get('successDelete') }}</p>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Classe</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($etudiants as $etudiant)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom }}</td>
                            <td>{{ $etudiant->classe->libelle }}</td>
                            <td>
                                <a href="{{ route('etudiant.edit', ['etudiant' => $etudiant->id]) }}"
                                    class="btn btn-info">Edition</a>
                                <a href="#" class="btn btn-danger"
                                    onclick="if(confirm('Voulez-vous vraiment supprimer cet étudiant?')){document.getElementById('form-{{ $etudiant->id }}').submit()}">Supprimer</a>
                                <form id="form-{{ $etudiant->id }} "
                                    action="{{ route('etudiant.supprimer', ['etudiant' => $etudiant->id]) }}"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </div>


    </main>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/offcanvas.js') }}"></script>
    </body>

    </html>
@endsection
