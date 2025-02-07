@extends('layout')

@section('content')
<h1 class="text-2xl font-bold">Liste des utilisateurs</h1>

<ul>
    @foreach($utilisateur as $user)  <!-- Renommé la variable ici pour éviter les conflits -->
        <li> 
            {{ $user->email }}
        </li>
    @endforeach
</ul>
@endsection
