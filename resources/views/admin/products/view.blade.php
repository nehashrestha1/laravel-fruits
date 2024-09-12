@extends('admin.layouts.main')
@section('content')

<div class="container">
    <h2>Product Details</h2>

    <div class="card">
        <div class="card-header">
            {{ $product->title }}
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p><strong>Quantity:</strong> {{ $product->qty }}</p>
            <p><strong>Status:</strong> {{ $product->status == 1 ? 'Active' : 'Inactive' }}</p>
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" width="200">
            @endif
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back to Products List</a>
</div>

@endsection
