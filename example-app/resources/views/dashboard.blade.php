@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-5">
    <h1>Contacts</h1>
    <a href="{{ route('contacts.create.index') }}" class="btn btn-primary my-auto">Create Contact</a>
</div>

<div class="table__wrapper">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
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
                <th scope="row"><img class="icon " src="/profile.jpg" alt="Contact picture" srcset=""></th>
                <th>{{ $contact->naam }}</th>
                <td>{{ $contact->straat }}</td>
                <td>{{ $contact->postcode }}</td>
                <td>{{ $contact->plaats }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>
                    <div class="d-flex gap-3"> <a class="btn btn-info  text-light btn-sm " href="{{ route('contacts.read', $contact->uuid)}}">
                            Bekijken
                        </a>
                        <form action="{{ route('contacts.delete', $contact->uuid) }}" method="post"> @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                <img src="/trash.svg" alt="Delete contact">
                            </button>
                        </form>
                    </div>


                </td>

            </tr>


            @endforeach
            @unless($contacts->isNotEmpty())
            <tr>
                <th class="text-center" colspan="7">
                    No entries yet
                </th>
            </tr>
            @endunless
        </tbody>

    </table>
</div>

@endsection