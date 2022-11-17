@extends('layouts.app')
@section('content')
<h1>
    Create a new contact
</h1>

<form action="{{ route('contacts.create') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Naam</label>
        <input type="text" class="form-control" name="naam" id="naam" aria-describedby="naam">
        <div id="naam" class="form-text">Please enter the full name of your contact.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Plaats</label>
        <input type="text" class="form-control" name="plaats" id="plaats" aria-describedby="plaats">
        <div id="plaats" class="form-text">Please enter the city you currently live in.</div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="exampleInputEmail1" class="form-label">Postcode</label>
            <input type="text" class="form-control" name="postcode" id="postcode" aria-describedby="postcode">
            <div id="postcode" class="form-text">Please enter your postcode in the format: 1234 AB</div>
        </div>
        <div class="col">
            <label for="exampleInputEmail1" class="form-label">Straat</label>
            <input type="text" class="form-control" name="straat" id="straat" aria-describedby="straat">
            <div id="straat" class="form-text">Enter the name of your street.</div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>

</form>
@endsection