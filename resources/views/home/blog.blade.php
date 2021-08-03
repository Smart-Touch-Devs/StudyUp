@extends('layouts.layout')
@section('content')
<div class="container">
    <div class=" ">
        <div class="text-center">
            <h2 class="display-4 font-weight-bold text-smt-tertiary">Aperçu de StudyUp</h2>
        </div>
        <P class="my-5 text-center letter_size text-smt-tertiary">
            Les dernières mises à jours et infomations sur StudyUp , les ,nouveaux livres ,les informations du campus , les partenariats et les opportunités
        </P>
    </div>
</div>
<div class="container-fluid">
    <!-- <div class="row">
    @foreach($articles as $article)
        <div class="col-lg-7">
           
            <div class="card" style="width: 100%;">
                <img src="{{asset('image').'/'.$article->photo}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center "><span class="text-smt-tertiary">{{ $article->titre }}</span></h5>
                    <p class="card-text">{{ $article->contenu }}</p>
                    
                </div>
            </div>
           
        </div>
        @endforeach
        <div class="col-lg-5">
            <div class="card" style="width: 100%;">
                <div class="fond">


                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div> -->
</div>

@endsection