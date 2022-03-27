@extends('layouts.app')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Forum</h2>
                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit
                    quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
        </div><!-- End Breadcrumbs -->
        <div class="container">
            <a href="{{ route('create-class') }}" class="btn btn-primary mt-4">Upload Class Location</a>
            <h1 class="mt-5">Find Class</h1>

            @if (count($findClasses) > 0)
                @foreach ($findClasses as $findClass)
                    <div class="container  d-flex align-items-left">


                        <div class="card card-body bg-light mb-3">
                            
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img style="width: 50%" src="{{asset('images/' . $findClass->picture )}}" alt="" srcset="">
                                    </div>

                                    <div class="col-md-8 col-sm-8">
                                        <h3><a href="/find-class/show/{{ $findClass->id }}">{{ $findClass->name }}</a> </h3>
                                        <small>Created at {{ $findClass->created_at }}</small>
                                    </div>
                                </div>

                            
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </main><!-- End #main -->


@endsection