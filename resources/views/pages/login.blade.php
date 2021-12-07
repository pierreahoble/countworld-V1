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
                
                <div class="card" style="width: 50%;">
                    <div class="card-body">
                      {{-- <h5 class="card-title text-center">Connexion</h5> --}}

                      <div class="comment-from">
                        <h4 class="title text-center">Connexion </h4>
                        <form action="{{ url('verification') }}" method="POST" class="contact-form">
                            <div class="row">
                                @csrf

                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input type="email" id="email" autocomplete="off"  name="email">
                                        <label for="email">Email*</label>
                                    </div>
                                </div>

                               

                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input type="password" id="password" autocomplete="off"  name="password">
                                        <label for="password">Mot de passe*</label>
                                    </div>
                                </div>
                                                        

                            </div>
                            <div class="col-md-12">
                                <div class="row">                              
                                    <div class="col-md-6">
                                        <button type="submit" class="btn">Valider</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ url('auth/google') }}" type="submit" class="btn"><i class="fab fa-google"></i> Google</a>
                                    </div> 
    
                                </div>
                                    
                            </div>
                        </form>


                        <div class="col-md-12 text-center mt-4">    
                            <p>Vous n'avez pas encore de compte?</p>                            
                                <a href="{{ url('inscription') }}" class="mb-2"> Créer un compte</a>                                    
                        </div>




                    
                    </div>

                     
                    </div>
                  </div>
              
              
            </div>
        </div>
    </div>
</section>

<!-- pricing-area-end -->
    
@endsection