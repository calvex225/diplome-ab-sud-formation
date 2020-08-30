@extends('layout')

@section('title')
    Dashboard
@endsection

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tableau de Board</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Partager</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
      </div>
      <select class="btn btn-sm btn-outline-secondary" id="periodeSelection">
        <option value="1" selected>Cette semaine</option>
        <option value="2">Ce mois</option>
        <option value="3">Cette Annee</option>
        <option value="x">Personnaliser</option>
      </select>
      {{-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        Cette Semaine
      </button> --}}
    </div>
  </div>

  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

  <h2>Dilpomes</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Numero</th>
          <th>Nom</th>
          <th>Prenoms</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2017-013-00640</td>
          <td>Lorem</td>
          <td>Ipsum</td>
          <td>16-Mars-2020</td>
          <td><a href="#" alt="Voir"><span data-feather="eye"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Telecharger"><span data-feather="download"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Modifier"><span data-feather="edit"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Supprimer"><span data-feather="trash"></span></a></td>
        </tr>
        <tr>
          <td>2017-013-00640</td>
          <td>Lorem</td>
          <td>Ipsum</td>
          <td>16-Mars-2020</td>
          <td><a href="#" alt="Voir"><span data-feather="eye"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Telecharger"><span data-feather="download"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Modifier"><span data-feather="edit"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Supprimer"><span data-feather="trash"></span></a></td>
        </tr>
        <tr>
          <td>2017-013-00640</td>
          <td>Lorem</td>
          <td>Ipsum</td>
          <td>16-Mars-2020</td>
          <td><a href="#" alt="Voir"><span data-feather="eye"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Telecharger"><span data-feather="download"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Modifier"><span data-feather="edit"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Supprimer"><span data-feather="trash"></span></a></td>
        </tr>
        <tr>
          <td>2017-013-00640</td>
          <td>Lorem</td>
          <td>Ipsum</td>
          <td>16-Mars-2020</td>
          <td><a href="#" alt="Voir"><span data-feather="eye"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Telecharger"><span data-feather="download"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Modifier"><span data-feather="edit"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Supprimer"><span data-feather="trash"></span></a></td>
        </tr>
        <tr>
          <td>2017-013-00640</td>
          <td>Lorem</td>
          <td>Ipsum</td>
          <td>16-Mars-2020</td>
          <td><a href="#" alt="Voir"><span data-feather="eye"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Telecharger"><span data-feather="download"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Modifier"><span data-feather="edit"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Supprimer"><span data-feather="trash"></span></a></td>
        </tr>
        <tr>
          <td>2017-013-00640</td>
          <td>Lorem</td>
          <td>Ipsum</td>
          <td>16-Mars-2020</td>
          <td><a href="#" alt="Voir"><span data-feather="eye"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Telecharger"><span data-feather="download"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Modifier"><span data-feather="edit"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Supprimer"><span data-feather="trash"></span></a></td>
        </tr>
        <tr>
          <td>2017-013-00640</td>
          <td>Lorem</td>
          <td>Ipsum</td>
          <td>16-Mars-2020</td>
          <td><a href="#" alt="Voir"><span data-feather="eye"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Telecharger"><span data-feather="download"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Modifier"><span data-feather="edit"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" alt="Supprimer"><span data-feather="trash"></span></a></td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection