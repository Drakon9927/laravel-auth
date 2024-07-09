@extends('layouts.app')

@section('content')
@foreach ($project as $item)
<div class="card" style="width: 18rem;">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <h5 class="card-title"> {{$item['title']}} </h5>
        <p class="card-text"> {{$item['description']}} </p>
        <p class="card-text"> {{$item['start_date']}} </p>
        <p class="card-text"> {{$item['end_date']}} </p>
        <p class="card-text"> {{$item['status']}} </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> 
@endforeach




<style scoped>
    body{
        background-color: #222;
    }
    .card{
        margin: 1.5rem
    }
</style>

@endsection

