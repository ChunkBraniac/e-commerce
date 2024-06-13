@extends('layouts.app')

@section('content')
    <div class="container mt-xl-5 pt-5">
        <div class="row">

            @unless (count($items) == 0)
                @foreach ($items as $item)
                    <div class="col-xl-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('product/large-size/1.jpg') }}" alt="">
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>

                                <button class="btn btn-outline-success">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endunless
        </div>
    </div>
@endsection
