@extends('layouts.master')

@section('contenus')

    <div class="row mb-2">
        @foreach($products as $product)

            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h5 class="mb-0">{{ $product->title }}</h5>
                        <div class="mb-1 text-muted">{{ $product->created_at->format('d/m/Y') }}</div>
                        <p class="card-text mb-auto">{{ $product->subtitle }}.</p>
                        <strong class="card-text mb-auto">{{ $product->getPrice() }}</strong>
                        <a href="{{ route('product.show',$product->slug) }}" class="stretched-link btn btn-info">voir l'article</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{ $product->image }}" alt="{{ $product->title }}">

                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection
