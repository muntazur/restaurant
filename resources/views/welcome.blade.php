@extends('layout.main')


@section('categories')
        
        <div class="left-panel">

                @foreach($categories as $category)
                   
                    <a class = "btn btn-primary form-control" href="/items/{{ $category->id }}">{{ $category->name }} </a> 

                @endforeach
        </div>

@endsection

