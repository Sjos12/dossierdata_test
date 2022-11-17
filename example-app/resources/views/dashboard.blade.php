@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-5">
    <h1>Contacts</h1>
    <a href="{{ route('contacts.create.index') }}" class="btn btn-primary my-auto">Create Contact</a>
</div>
@isset($message)
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endisset

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Naam</th>
            <th scope="col">Straat</th>
            <th scope="col">Postcode</th>
            <th scope="col">Plaats</th>
            <th scope="col">Datum</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>

        @foreach ($contacts as $contact)
        <tr>
            <th scope="row">{{ $contact->naam }}</th>
            <td>{{ $contact->straat }}</td>
            <td>{{ $contact->postcode }}</td>
            <td>{{ $contact->plaats }}</td>
            <td>{{ $contact->created_at }}</td>
            <td>
                <form action="{{ route('contacts.delete', $contact->uuid) }}" method="post"> @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger ">
                        <img src="/trash.svg" alt="Delete contact">
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
        @unless($contacts->isNotEmpty())
        <tr>
            <th class="text-center" colspan="5">
                No entries yet
            </th>
        </tr>
        @endunless
    </tbody>

</table>
@endsection