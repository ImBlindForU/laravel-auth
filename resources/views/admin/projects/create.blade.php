@extends('layouts.admin')


@section('content')
    <div class="container">
        <h2 class="text-center mt-3">crea un nuovo post</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.project.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <label for="content">Contenuto</label>
                        <textarea type="text" id="content" class="form-control" ></textarea>
                    </div>

                    <button class="btn btn-success">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection