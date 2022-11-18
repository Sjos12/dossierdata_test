@extends('layouts.app')
@section('content')
<div class="d-flex gap-3 mb-3">
    <a href="{{ route('contacts.read', $contact->uuid)}} " class="btn btn-secondary my-auto">Terug</a>
    <h1>
        Update a contact
    </h1>
</div>


<form action="{{ route('contacts.update', $contact->uuid) }}" method="post" class="">
    @csrf
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="mb-3">
        <label for="naam" class="form-label">Naam</label>
        <input value="{{ $contact->naam }}" type=" text" class="form-control" name="naam" id="naam" aria-describedby="naam">
        <div id="naam" class="form-text">Please enter the full name of your contact.</div>
    </div>

    <div class="mb-3">
        <label for="plaats" class="form-label">Plaats</label>
        <input value="{{ $contact->plaats }}" type="text" class="form-control" name="plaats" id="plaats" aria-describedby="plaats">
        <div id="plaats" class="form-text">Please enter the city you currently live in.</div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="postcode" class="form-label">Postcode</label>
            <input value="{{ $contact->postcode }}" type="text" class="form-control" name="postcode" id="postcode" aria-describedby="postcode">
            <div id="postcode" class="form-text">Please enter your postcode in the format: 1234 AB</div>
        </div>
        <div class="col">
            <label for="straat" class="form-label">Straat</label>
            <input value="{{ $contact->straat }}" type="text" class="form-control" name="straat" id="straat" aria-describedby="straat">
            <div id="straat" class="form-text">Enter the name of your street.</div>
        </div>
    </div>
    <div class="d-flex">
        <button type="submit" class="btn btn-primary ms-auto">Save changes</button>

    </div>


</form>
@endsection