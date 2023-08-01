@extends('layouts.app')

@section('content')
    <h2>Edit Customer</h2>
    @if ($errors->any())
        <div>
            <strong>Whoops! Something went wrong!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
        </div>
        <div>
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" value="{{ old('contact_number', $customer->contact_number) }}" required>
        </div>
        <!-- Add other relevant fields here -->
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('customers.index') }}">Back to Customer List</a>
@endsection