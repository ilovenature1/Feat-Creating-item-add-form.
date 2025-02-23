@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-container">
        <h2 class="text-center mb-4">Add Item</h2>
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="itemName" class="form-label">Item Name</label>
                <input type="text" class="form-control" name="name" id="itemName" placeholder="Enter item name">
            </div>
            <div class="mb-3">
                <label for="itemPrice" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="itemPrice" placeholder="Enter price">
            </div>
            <div class="mb-3">
                <label for="itemDescription" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="itemDescription" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Add Item</button>
        </form>
    </div>
</div>
@endsection
