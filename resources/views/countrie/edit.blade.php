@extends('layouts.master')
@section('contenu')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="content">
            <form method="post" action="{{ route('countrie.update',$countries->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" value="{{ $countries->countrie}}" name="pays" class="form-control">
                    <input type="hidden" name="countrieId" value="{{ $countries->id }}">
                    {!! $errors->first('countrie', '<small class="text-danger">:message</small>') !!}
                </div>
                <div class="form-group">
                    <label>Icone:</label>
                    <input type="file" value="{{ $countries->icone }}" class="form-control-file" name="icone" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </section>
    </div>
</div>
@endsection