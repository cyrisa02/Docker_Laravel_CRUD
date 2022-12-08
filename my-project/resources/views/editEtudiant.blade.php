    @extends('layouts.master')

    @section('contenu')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h3 class="border-bottom pb-2 mb-4">Modification d'un nouvel étudiant</h3>
            <div class=" mt-2">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <p>{{ session()->get('success') }}</p>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form style="width: 65%;" method="POST" action="{{ route('etudiant.update', ['etudiant' => $etudiant->id]) }}">
                    @csrf

                    <input type="hidden" name="_method" value="put">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom de l'étudiant</label>
                        <input type="text" class="form-control" required name="nom" value="{{ $etudiant->nom }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Prénom de l'étudiant</label>
                        <input type="text" class="form-control" required name="prenom" value="{{ $etudiant->prenom }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Classe de l'étudiant</label>
                        <select class="form-control" required name="classe_id">
                            <option value=""></option>p
                            @foreach ($classes as $classe)
                                @if ($classe->id == $etudiant->classe_id)
                                    <option value="{{ $classe->id }}" selected>{{ $classe->libelle }}</option>
                                @else
                                    <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <a href="{{ route('etudiant') }}" class="btn btn-danger">Annuler</a>
                </form>


            </div>
        </div>
        </div>
    @endsection
