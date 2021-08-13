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
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bolder">Ajouter un livre</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close ml-1" data-dismiss="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputName">Titre du livre</label>
                                        <input type="text" name="titre" id="inputName" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputStatus">Categories</label>
                                        <select id="inputStatus" name="categorie_id" class="form-control custom-select">
                                            @foreach($categories as $categorie)
                                            <option selected disabled value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">Editeur</label>
                                        <select id="inputStatus" name="editeur_id" class="form-control custom-select">
                                            @foreach($editors as $editor)
                                            <option selected disabled value="{{ $editor->id }}">{{ $editor->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">langue</label>
                                        <select id="inputStatus" name="langue_id" class="form-control custom-select">
                                            @foreach($languages as $language)
                                            <option selected disabled value="{{ $language->id }}">{{ $language->langue}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description</label>
                                        <textarea id="inputDescription" name="description" class="form-control" rows="10"></textarea>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputName">Nombre de pages</label>
                                    <input type="number" name="page" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Auteur</label>
                                    <select id="inputStatus" name="auteur_id" class="form-control custom-select">
                                        @foreach($authors as $author)
                                        <option selected disabled value="{{ $author->id }}">{{ $author->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Pays</label>
                                    <select id="inputStatus" name="pays_id" class="form-control custom-select">
                                        @foreach($countries as $countrie)
                                        <option selected disabled value="{{ $countrie->id }}">{{ $countrie->pays}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Prix</label>
                                    <input type="number" name="prix" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="file-upload">
                                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
                                        Image</button>
                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' name="photo" onchange="readURL(this);" accept="image/*" />

                                        <div class="drag-text">
                                            <h3>Ajouter une Photo</h3>
                                        </div>
                                        {!! $errors->first('photo', '<small class="text-danger">:message</small>') !!}
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">Retirer <span class="image-title">Uploaded Image</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregister</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection