@extends('base')


@section('style')
<style>
    #form{
        background-color:#f5f5f5;
    }
</style>
    
@endsection


@section('contenu')



<!-- pricing-area -->
<section class="pricing-area pt-110 pb-90" id="form">
    <div class="container">
       

        <div class="pricing-plan-wrap" >
            <div class="row justify-content-center">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                      {{-- <h5 class="card-title text-center">Connexion</h5> --}}

                      <div class="comment-from">
                        <h2 class="text-center">Connexion </h2>
                        <form action="{{ url('inscription') }}" class="contact-form" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input type="email" id="email" autocomplete="off" required="" name="email">
                                        <label for="email">Email*</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input type="text" id="tel" autocomplete="off" required="" name="tel">
                                        <label for="tel">Téléphone*</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input type="password" id="password" autocomplete="off" required="" name="password">
                                        <label for="password">Mot de passe*</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input type="password" id="password_confirmation" autocomplete="off" required="" name="password_confirmation">
                                        <label for="passwordConfirmation">Mot de Passe Confirmation*</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn">S'inscrire</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn"><i class="fab fa-google"></i> Google</button>
                                </div> 

                            </div>
                        </form>


                    
                    </div>

                     
                    </div>
                  </div>
              
              
            </div>
        </div>
    </div>
</section>

<!-- pricing-area-end -->
    
@endsection