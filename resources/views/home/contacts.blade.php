@extends('layouts.layout')
@section('content')
    <div class="text-center mb-5">
        <h1 class="display-4 font-weight-bold text-smt-tertiary mb-5">Nous contacter</h1>
        <div class="card fit-content mx-auto">
            <div class="card-body d-flex p-0">
                <div class="fit-content d-block p-5">
                    <h4 class="mb-5 font-weight-bold text-smt-tertiary">Nous envoyer un email</h4>
                    <form action="#" class="contacts">
                        <div class="form-group border rounded">
                            <input type="text" name="name" placeholder="Votre nom" required class="text-indent-3">
                        </div>
                        <div class="form-group border rounded">
                            <input type="email" name="emil" placeholder="Votre e-mail" required class="text-indent-3">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Votre message ..." class="text-indent-3 rounded border"></textarea>
                        </div>
                    </form>
                </div>
                <div class="bg-smt-primary p-5 text-white">
                    <h4 class="mb-5 font-weight-bold text-smt-tertiary text-white">Nous contacter autrement</h4>
                    <div class="d-block">
                        <div class="fit-content py-3">
                            <span class="h3"><i class="fas fa-phone-alt"></i></span>
                            <a class="h5 ml-3 font-weight-bold text-white" href="tel:0022655026262">+226 55 02 62 62</a>
                        </div>

                        <div class="fit-content py-3">
                            <span class="h3"><i class="fas fa-envelope"></i></span>
                            <a class="h5 ml-3 font-weight-bold text-white" href="mailto:smtgroup@gmail.com">smtgroup@gmail.com</a>
                        </div>

                        <div class="fit-content py-3">
                            <span class="h3"><i class="fab fa-facebook-messenger"></i></span>
                            <a class="h5 ml-3 font-weight-bold text-white" href="#">me.smtgroup.facebook.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection