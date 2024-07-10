@extends('layouts.app')

@section('content')
<div class="card" style="width: 18rem;">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <h5 class="card-title"> {{$project['title']}} </h5>
        <p class="card-text"> {{$project['description']}} </p>
        <p class="card-text"> {{$project['start_date']}} </p>
        <p class="card-text"> {{$project['end_date']}} </p>
        <p class="card-text"> {{$project['status']}} </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> 



<style scoped>
    body{
        background-color: #222;
    }
    .card{
        margin: 1.5rem
    }
</style>

@endsection

