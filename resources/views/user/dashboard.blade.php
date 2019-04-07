@extends('user.vote.master')
@section('title', 'Whotovote||Dashboard')
@section('content')


<section class="selectbox_section mt_80">
        <div class="container">
            <div class="row" style="max-width: 500px;margin:0 auto;padding: 0;">
                <div class="col-lg-12 col-md-12" style="margin-bottom: 50px;margin-top: 100px;">
                    
                    <!--select-2-->
                    <div class="fire_select2 fire_select">
                        <h4 class="fw_400 color_44 mb_30 text-center">Search candidates manifesto</h4>
                        <select name="" id="">
                            <option value="">Choose candidate</option>
                            <option value="buhari">Muhammadu Buhari</option>
                            <option value="Atiku">Atiku Abubakar</option>
                            <option value="Moghalu">Kingsley Moghalu</option>
                            <option value="sowore">Sowore</option>
                            <option value="fela">Fela Durutoye</option>
                            <option value="Oby">Oby Ezekwesili</option>
                        </select>
                        <button class="btn btn-primary btn-lg" style="margin-left: 20px;height: 43px!important;background-color: green!important;border: none!important;">search manifesto</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection