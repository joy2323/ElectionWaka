@extends('user.vote.master')
@section('title', 'Whotovote||Manifesto')
@section('content')

<section class="selectbox_section mt_80">
        <div class="container">
            <div class="row" style="width:50%;margin:auto;">
                <div class="col-lg-12 col-md-12" style="margin-bottom: 50px;">
                    
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


    <section class="fire_faq pb_50">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="faq_tab_menu clearfix">
                        <div class="general">
                            <h5 class="color_22 fw_300">ATIKU ABUBAKAR</h5>
                            <ul role="tablist" class="nav nav-tabs">
                                <li class="nav-item"><a class="active" data-toggle="tab" href="#cat1" role="tab" aria-selected="true">Education</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#cat2" role="tab" aria-selected="false">Agriculture</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#cat3" role="tab" aria-selected="false">Security</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#cat4" role="tab" aria-selected="false">Startup</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#cat5" role="tab" aria-selected="false">Economy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/col-4-->

                <div class="col-xl-8 col-lg-7">
                    <div class="faq_tab_content">
                        <div id="myTabContent" class="tab-content">
                            <div id="cat1" role="tabpanel" class="tab-pane fade show active">
                                <h4 class="fw_300 color_22">Lorem Ipsum</h4>
                                <div class="tab_text">
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                </div>
                            </div>

                            <!--tab-pane-2-->
                            <div id="cat2" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Lorem Ipsum</h4>
                                <div class="tab_text">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                </div>
                            </div>

                            <!--tab-pane-3-->
                            <div id="cat3" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Lorem Ipsum</h4>
                                <div class="tab_text">
                                    <p>Traidcraft fights poverty through trade. We are best known as the UK’s leading fair trade organisation and are engaged in a wide range of trade and development activities.
                                        <br><br>Traidcraft fights poverty through trade. We are best known as the UK’s leading fair trade organisation and are engaged in a wide range of trade and development activities.
                                        <br><br>As a professional, enthusiastic and self-motivated team-player in market-oriented business or NGO programme supporting small-enterprise development., candidates will be a business graduate from a reputed business school of home and/or abroad, and/or Post Graduate in Economics, Development Studies, International Affairs, or Social Sciences. </p>
                                </div>
                            </div>

                            <!--tab-pane-4-->
                            <div id="cat4" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Lorem Ipsum</h4>
                                <div class="tab_text">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                </div>
                            </div>

                            <!--tab-pane-5-->
                            <div id="cat5" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Lorem Ipsum</h4>
                                <div class="tab_text">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--/col-8-->
            </div>
        </div>
    </section>
 


@endsection