@extends('layout')

@section('title')
    Generer
@endsection

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Generer un Diplome</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <button type="button" class="btn btn-sm btn-outline-secondary">
        <span data-feather="list-text"></span>
        Voir Liste
      </button>
    </div>
  </div>

  <div class="col-md-12 order-md-12">
    <form class="needs-validation" novalidate>
      <h5 class="mb-3">Informations sur le Candidat</h5>
      <div class="row">
        <div class="col-md-3 mb-1">
          <label for="civility">Civilite du Candidat</label>
          <select class="custom-select d-block w-100" id="civility" required>
            <option value="">Choisissez...</option>
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
            <option value="Mademoiselle">Mademoiselle</option>
          </select>
          <div class="invalid-feedback">
            Choisissez la civilite du candidat.
          </div>
        </div>
        <div class="col-md-4 mb-2">
          <label for="lastName">Nom de Famille du Candidat</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Le nom de famille est requis.
          </div>
        </div>
        <div class="col-md-5 mb-3">
          <label for="firstName">Prenoms du Candidat</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Un prenom, ou plus, est requis.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 mb-2">
          <label for="birthDate">Date de Naissance</label>
          <input type="date" class="form-control" id="birthDate" placeholder="" value="" required>
          <div class="invalid-feedback">
            La date de naissance est requise.
          </div>
        </div>
        <div class="col-md-4 mb-2">
          <label for="birthPlace">Lieu de Naissance</label>
          <input type="text" class="form-control" id="birthPlace" placeholder="" value="" required>
          <div class="invalid-feedback">
            Le lieu de naissance est requis.
          </div>
        </div>
        <div class="col-md-5 mb-1">
          <div class="form-group">
            <label for="photo">Ajouter Une photo d'identite</label>
            <input type="file" class="form-control-file" id="photo" required>
          </div>
          <div class="invalid-feedback">
            Une photo d'identite est requise.
          </div>
        </div>
      </div>

      <hr class="mb-4">

      <h5 class="mb-3">Session et Diplome</h5>
      <div class="row">
        <div class="col-md-3 mb-2">
          <label for="examDate">Date d'examen</label>
          <input type="date" class="form-control" id="examDate" placeholder="" value="" required>
          <div class="invalid-feedback">
            Une date d'examen est requise.
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <label for="juryCivility">Mosnieur/Madame President</label>
          <select class="custom-select d-block w-100" id="juryCivility" required>
            <option value="">Choisissez...</option>
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
            <option value="Mademoiselle">Mademoiselle</option>
          </select>
          <div class="invalid-feedback">
            Choisissez la civilite du president du Jury.
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <label for="juryPresident">Nom du President du Jury</label>
          <input type="text" class="form-control" id="juryPresident" placeholder="" value="" required>
          <div class="invalid-feedback">
            Entrer le nom du president du Jury.
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <label for="doAtDate">Date d'Etablissement du diplome</label>
          <input type="date" class="form-control" id="doAtDate" placeholder="" value="" required>
          <div class="invalid-feedback">
            La date d'etablissement du diplome est requise.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 mb-2">
          <label for="startDate">Date de Debut de Session</label>
          <input type="date" class="form-control" id="startDate" placeholder="" value="" required>
          <div class="invalid-feedback">
            La date de debut de la session est requise.
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <label for="endDate">Date de Fin de Session</label>
          <input type="date" class="form-control" id="endDate" placeholder="" value="" required>
          <div class="invalid-feedback">
            La date de fin de la session est requise.
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <label for="reference">Numero Reference du Diplome</label>
          <input type="text" class="form-control" id="reference" placeholder="" value="" required>
          <div class="invalid-feedback">
            Le numero de reference du diplome est requis.
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <label for="autoriNum">Numero d'Autorisation Prealable</label>
          <input type="text" class="form-control" id="autoriNum" placeholder="" value="" required>
          <div class="invalid-feedback">
            Le numero d'autorisation prealable est requis.
          </div>
        </div>
      </div>

      <hr class="mb-4">

      <div class="row">
        <div class="col-md-5 mb-3">
          <h5 class="mb-3">Etablissement Partenaire</h5>
          <div class="custom-control custom-radio">
            <input id="own" name="etablissementPartenaire" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="own">Pour Notre Etablissement</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="etablissementPartenaire" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Pour un Etablissement Partenaire</label>
          </div>
        </div>
        <div class="col-md-7 mb-4">
          <div class="form-group">
            <label for="partenaire">Si ce diplome est pour un Etablissement Partenaire, alors entrer ses informations</label>
            <textarea class="form-control" id="partenaire" rows="3"></textarea>
          </div>
        </div>
      </div>
      <hr class="mb-4">

      <button class="btn btn-primary btn-lg btn-block" type="submit">Valider le Diplome</button>
    </form>
    <div class="row">
      <hr class="mb-4">
    </div>
  </div>

@endsection