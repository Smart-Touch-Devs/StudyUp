@include('app.layouts.header')
 <div class="container ">
<div class="row mt-5">
    <div class="col-12">
    <a href="/app" class="text-smt-sixth h3"><i class="fas fa-arrow-left"></i></a>
    </div>
</div>
    <div class="card down shadow">
        <div class="row">
            <div class="col-5 up ">
                <img src="{{asset('image/a_c.jpg')}}" alt="AC" class="w-75 poster ">
                <div class="col-12 text-center boutton mb-3">
                    <button type="button" class="btn bg-smt-secondary text-white font-weight-bold px-4">Payer l'oeuvre</button>
                </div>
                <div class="col-12 text-center boutton ">
                    <button type="button" class="btn text-white bg-smt-tertiary font-weight-bold px-4 px-4">Ajouter au favoris</button>
                </div>
            </div>
            <div class="col-7 p-4 ">
                <h3 class="font-weight-bold">Le crime de l'Orient Express</h3>
                <h5 class="">Agatha Christie</h5>
                <p class="text-justify pr-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quasi ad quibusdam tenetur ab iste sed ipsa cumque dicta ratione at et aperiam, harum dolorem provident vitae quae delectus rerum minima eveniet ducimus! Nemo tempore doloremque architecto deleniti, cumque inventore officia ratione esse velit nisi vel et perspiciatis, quis nam beatae maiores aperiam? Veritatis ea cum culpa, adipisci magnam officia non vero ratione maiores dignissimos impedit nemo nisi dolores. Eum obcaecati vero, voluptatum odio non rerum et ab quos tenetur neque voluptates pariatur enim tempore corrupti rem nulla amet, est ratione cum consequatur maiores necessitatibus repellendus. Fugiat, rem debitis blanditiis delectus consectetur reprehenderit consequatur nesciunt ipsam vero nemo architecto quas nulla quidem, laborum et amet, asperiores odit? Error officiis qui quia mollitia, ullam aliquam sunt inventore ea libero sint? Sit ab ad incidunt maxime totam at doloremque, provident enim excepturi non quos quidem laudantium eligendi necessitatibus earum et! Eligendi, quibusdam.
                </p>
            </div>
            <div class="col-12 d-flex justify-content-center mb-5">
                <button type="button" class="btn bg-smt-tertiary font-weight-bold text-white px-5">DEMARRER LA LECTURE</button>
            </div>
        </div>
    </div>
</div>
@include('app.layouts.footer')