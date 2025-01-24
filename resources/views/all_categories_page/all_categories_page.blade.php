@extends('layouts.categorie_layout')

@section('all categories section')
    <div>
        <!-- navbar -->
        @include('partial.dashbord_navbars.navbar1')


        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
        @include('partial.dashbord_navbars.navbar2')

        @include('partial.dashbord_navbars.navbar3')

        <!-- main -->
            <main class="main-content-wrapper">
                <div class="container">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                                <!-- pageheader -->
                                <div>
                                    <h2>Site</h2>
                                    <!-- breacrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class=""><a href="{{ url('dashboard') }}"
                                                                           class="text-inherit">Dashboard</a></li>/
                                            <li class="breadcrumb-item active" aria-current="page">Sites</li>
                                        </ol>
                                    </nav>
                                </div>
                                <!-- button -->
                                <div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#nameModal" class="btn btn-primary">Ajouter un
        
                                        Site</a>
                                       <!-- Button trigger modal -->

                                       <div class="modal fade" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="nameModalLabel">Entrer un nom</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <form id="nameForm" action="{{ url('create-categorie') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                  <label for="nameInput" class="form-label">Nom</label>
                                                  <input type="text" class="form-control" id="nameInput" name="name" placeholder="Créer un site" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                    <button type="submit" form="nameForm" class="btn btn-primary">Valider</button>
                                                  </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
<!-- Modal -->
    </div>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                {{--  <div class="px-6 py-6">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4 col-md-6 col-12 mb-2 mb-md-0">
                                            <!-- form -->
                                            <form class="d-flex" role="search">
                                                <input class="form-control" type="search" placeholder="Search Category"
                                                       aria-label="Search"/>
                                            </form>
                                        </div>
                                        <!-- select option -->
                                        <div class="col-xl-2 col-md-4 col-12">
                                            <select class="form-select">
                                                <option selected>Status</option>
                                                <option value="Published">Published</option>
                                                <option value="Unpublished">Unpublished</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>  --}}
                                <!-- card body -->
                                <div class="card-body p-0">
                                    <!-- table -->
                                    <div class="table-responsive">
                                        <table
                                            class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox">
                                            <thead class="bg-light">
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               id="checkAll"/>
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th>N°</th>
                                                <th>Nom</th>
                                                <th class="">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categorie as $key => $value)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                   id="categoryOne"/>
                                                            <label class="form-check-label" for="categoryOne"></label>
                                                        </div>
                                                    </td>
                                                    
                                                    <td><a href="#" class="text-reset">{{ $key+1 }}</a></td>
                                                    <td><a href="#" class="text-reset">{{ $value -> name }}</a></td>
                                                   

                    

                                                    <td>
                                                        <a class="btn"  href="#" 
                                                      
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#editModal{{ $value->id }}" 
                                                        data-id="{{ $value->id }}" 
                                                        data-name="{{ $value->name }}">
                                                            <i class="bi bi-pencil-square me-3"></i>

                                                        </a>

                                                        


                                                                    <a class="btn" href="{{url('categories/'.$value->id.'/destroy')}}">
                                                                        <i class="bi bi-trash me-3"></i>

                                                                    </a>



                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="editModal{{ $value->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $value->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="editModalLabel{{ $value->id }}">Modifier un Site</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <!-- Formulaire pour modifier -->
                                                        <form method="POST" action="{{ url('categories/'.$value->id.'/update') }}">
                                                          @csrf
                                                          @method('PUT')
                                                          <div class="modal-body">
                                                            <input type="hidden" name="id" value="{{ old('id', $value->id) }}">
                                                            <div class="mb-3">
                                                              <label for="editName" class="form-label">Nom du site</label>
                                                              <input type="text" class="form-control" id="editName" name="name" value="{{ old('name', $value->name) }}" required>
                                                            </div>
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>

                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                   
                                </div>
                                <div
                                    class="border-top d-flex justify-content-between align-items-md-center px-6 py-6 flex-md-row flex-column gap-4">
                                    {{--<span>Showing 1 to 8 of 12 entries</span>--}}
                                    <nav>
                                        {{--<ul class="pagination mb-0">
                                            <li class="page-item disabled"><a class="page-link" href="#!">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                        </ul>--}}
                                        <p>{{ $categorie->links() }}</p>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
