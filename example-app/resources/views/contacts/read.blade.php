@extends('layouts.app')

@section('content')
<div class="row mt-5">
    <div class="col-12">
        <a href="{{ route('dashboard')}}" class="btn btn-secondary">
            Terug
        </a>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-2 col-12 d-flex">
        <img class="avatar mx-auto" src="/profile.jpg" alt="Contact picture" srcset="">
    </div>
    <div class="col-md-10 col-12">
        <div class="d-flex gap-3">

            <h1>
                {{ $contact->naam }}
            </h1>
            <a class="btn btn-dark my-auto" href="{{ route('contacts.update.index', $contact->uuid) }}">
                Aanpassen
            </a>
            <form class="my-auto" action="{{ route('contacts.delete', $contact->uuid) }}" method="post"> @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">
                    <img src="/trash.svg" alt="Delete contact">
                </button>
            </form>
        </div>
        <div class="d-flex my-2">
            <p class="bold">
                Woont aan de {{ $contact->straat. ' '.$contact->postcode}} in {{ $contact->plaats}}
            </p>
        </div>

        <div class="d-flex">
            <p class="text-bold">
                Toegevoegd op {{ $contact->created_at}}
            </p>
        </div>

    </div>

</div>
@endsection