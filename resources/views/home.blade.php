@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                  <h1>Category</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($categories as $category)
                            <div class="col col-4">
                                <div class="card">
                                    <img src="{{ $category->image }}" class="card-img-top">
                                    <div class="card-body">
                                    <h5 class="card-title">{{$category->name}}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                  
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  <h1>Our Products</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col col-6">
                                <div class="card">
                                    <img src="{{ $product->image }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->name}}</h5>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#show-{{ $product->id }}">
                                            Detail
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="show-{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail Menu #{{ $product->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <form method="POST" action="{{ route('addToCart') }}">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <input type="hidden" name="status_id" value="1">
                                                    <div class="modal-body">
                                                        <div class="card">
                                                        <img src="{{ $product->image }}" class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $product->name }}</h5>
                                                            <h6 class="card-title">{{ $product->price }}</h6>
                                                            <input type="range" id="star" min="0" max="5" value="{{ $product->star }}" disabled>
                                                            <p class="card-text">{{ $product->desc }}</p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
