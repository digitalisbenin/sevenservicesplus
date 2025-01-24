{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>--}}

@extends('layouts.dashbord_layout')

@section('dashboard content')
    <!-- main -->
    <div>
        <!-- navbar -->
        @include('partial.dashbord_navbars.navbar1')


        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
            @include('partial.dashbord_navbars.navbar2')

            @include('partial.dashbord_navbars.navbar3')

            <!-- main wrapper -->
            <main class="main-content-wrapper">
                <section class="container">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <!-- card -->
                            <div
                                class="card bg-light border-0 rounded-4"
                                style="background-image: url({{ asset('assets/images/slider/slider-image-1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: right">
                                <div class="card-body p-lg-6">
                                    <h1>Bienvenu sur SEVEN SERVICES PLUS !</h1>
                                    <p>SEVEN SERVICES PLUS est une boutique qui permet de faire des achats.</p>
                                    <a href="{{url('create-article')}}" class="btn btn-primary">Ajouter une parcelle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table -->
                    <div class="table-responsive-xl mb-6 mb-lg-0">
                        <div class="row flex-nowrap pb-3 pb-lg-0">
                          
                            <div class="col-lg-6 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between align-items-center mb-6">
                                            <div>
                                                <h4 class="mb-0 fs-5">Sites</h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-info text-dark-info rounded-circle">
                                                <i class="bi bi-people fs-5"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div class="lh-1">
                                            @if($categorie->count()> 0)
                                            <h1 class="mb-2 fw-bold fs-2">{{$categorie->count()}}</h1>
                                            @else

                                            <h1 class="mb-2 fw-bold fs-2">0</h1>
                                            @endif
                                            {{--  <span>
                                       <span class="text-dark me-1">30+</span>
                                       new in 2 days
                                    </span>  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between align-items-center mb-6">
                                            <div>
                                                <h4 class="mb-0 fs-5">Parcelles</h4>
                                            </div>
                                            <div class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                                <i class="bi bi-currency-dollar fs-5"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div class="lh-1">
                                            @if($article->count()> 0)
                                            <h1 class="mb-2 fw-bold fs-2">{{$article->count()}}</h1>
                                            @else

                                            <h1 class="mb-2 fw-bold fs-2">0</h1>
                                            @endif
                                            {{--  <span>Monthly revenue</span>  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection
