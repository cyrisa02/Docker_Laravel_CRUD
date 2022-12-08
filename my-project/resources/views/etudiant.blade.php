@extends('layouts.master')

@section('contenu')
    

  

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des étudiants inscrits</h3>
    <div class=" mt-2">
        <div class="d-flex justify-content-end mb-4"><a href="#" class="btn btn-primary">+ Ajouter</a></div>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <a href="#" class="btn btn-info">Edition</a>
        <a href="#" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
   
    
  </tbody>
</table>

    </div>
    
  </div>

  
</main>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <script src="{{ asset('js/offcanvas.js') }}" ></script>
  </body>
</html>
@endsection