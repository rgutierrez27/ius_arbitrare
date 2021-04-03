@extends('layouts.layout')

@section('styles')
  <!-- Bootstrap CSS -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}
<style>
    /* body {
      background: #FFDE16;
      overflow-x: hidden;
      font-family: 'roboto', sans-serif
    } */
    
    .wrap { padding: 1em; }
    @media (min-width: 43.75em) {
    
    .wrap { padding: 2em; }
    }
    
    .modal {
      display: block;
      padding: 0 1em;
      text-align: center;
      width: 100%;
    }
    @media (min-width: 43.75em) {
    
    .modal {
      padding: 1em 2em;
      /* text-align: right; */
    }
    }
    
    .modal > label {
      background: #000;
      border-radius: .2em;
      color: #b1976b;
      cursor: pointer;
      display: inline-block;
      font-weight: bold;
      margin: 0.5em 1em;
      padding: 0.75em 1.5em;
      -webkit-transition: all 0.55s;
      transition: all 0.55s;
    }
    
    .modal > label:hover {
      -webkit-transform: scale(0.97);
      -ms-transform: scale(0.97);
      transform: scale(0.97);
    }
    
    .modal input {
      position: absolute;
      right: 100px;
      top: 30px;
      z-index: -10;
    }
    
    .modal__overlay {
      /* background-image:url("img/inmobiliaria.jpg"); */
      opacity: 0.5;
      bottom: 0;
      left: 0;
      position: fixed;
      right: 0;
      text-align: center;
      top: 0;
      z-index: -800;
    }    
    .modal__box {
      padding: 0.75em 0.75em;
      position: relative;
      margin-top: 4.5em;
      overflow-x: auto;
      width: 90%;
    }
    @media (min-height: 37.5em) {
    
    .modal__box {
      left: 50%;
      position: absolute;
      top: 50%;
      -webkit-transform: translate(-50%, -80%);
      -ms-transform: translate(-50%, -80%);
      transform: translate(-50%, -80%);
    }
    }
    @media (min-width: 50em) {
    
    .modal__box { padding: 1.75em; }
    }
    
    .modal__box label {
      background: #b1976b;
      border-radius: 50%;
      color: black;
      cursor: pointer;
      display: inline-block;
      height: 1.5em;
      line-height: 1.5em;
      position: absolute;
      right: .5em;
      top: .5em;
      width: 1.5em;
    }
    
    .modal__box h2 {
      color: #b1976b;
      margin-bottom: 1em;
      text-transform: uppercase;
    }
    
    .modal__box p {
      /* color: #FFDE16; */
      color: #ffffff;
      text-align: left;
    }
    
    .modal__overlay {
      opacity: 0;
      overflow: hidden;
      -webkit-transform: scale(0.5);
      -ms-transform: scale(0.5);
      transform: scale(0.5);
      -webkit-transition: all 0.75s cubic-bezier(0.19, 1, 0.22, 1);
      transition: all 0.75s cubic-bezier(0.19, 1, 0.22, 1);
    }
    
    input:checked ~ .modal__overlay {
      opacity: 1;
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
      -webkit-transition: all 0.75s cubic-bezier(0.19, 1, 0.22, 1);
      transition: all 0.75s cubic-bezier(0.19, 1, 0.22, 1);
      z-index: 800;
    }
    
    input:focus + label {
      -webkit-transform: scale(0.97);
      -ms-transform: scale(0.97);
      transform: scale(0.97);
    }

    #detalleArea{
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    </style>
@endsection

@section('Content')

{{-- <div class="modal">
    <input id="modal2" type="checkbox" name="modal2" tabindex="1">
    <label for="modal2" >Launch Modal</label>
    <div class="modal__overlay">
        <div class="modal__box">
          <label for="modal2">&#10006;</label>
          <h2>This is your modal content</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac laoreet elit. Phasellus dignissim purus vitae urna cursus, quis congue ligula tristique. Ut nec blandit risus. Donec at orci ut justo venenatis viverra. Suspendisse in volutpat lacus. In enim est, dapibus eget ipsum sed, suscipit ultrices diam.</p>
        </div>
      </div>
</div> --}}


<div class=attorna-page-wrapper id="attorna-page-wrapper">
    <div class=gdlr-core-page-builder-body>
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                            <div id=rev_slider_1_1_wrapper class="rev_slider_wrapper fullwidthbanner-container" data-source=gallery style="margin:0px auto;background:#202020;padding:0px;margin-top:0px;margin-bottom:0px;">
                                <div id=rev_slider_1_1 class="rev_slider fullwidthabanner" style=display:none; data-version=5.4.8.2>
                                    <ul>
                                        <li data-index=rs-1 data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off data-easein=default data-easeout=default data-masterspeed=300 data-thumb=assets/upload/slider-1-100x50.jpg data-rotate=0 data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10 data-description> <img src=assets/upload/slider-1.jpg alt title=slider-1 width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat class=rev-slidebg data-no-retina>
                                            <div class="tp-caption   tp-resizeme" id=slide-1-layer-1 data-x=center data-hoffset data-y=center data-voffset=-182 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #b6a281; letter-spacing: 2px;font-family:Poppins;text-transform:uppercase;">Bienvenidos</div>
                                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id=slide-1-layer-3 data-x=center data-hoffset data-y=center data-voffset=-152 data-width="['103']" data-height="['1']" data-type=shape data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(182,162,129);"></div>
                                            <div class="tp-caption   tp-resizeme" id=slide-1-layer-4 data-x=center data-hoffset data-y=center data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;">Ius Arbitrare</div>
                                            <div class="tp-caption   tp-resizeme" id=slide-1-layer-5 data-x=center data-hoffset data-y=center data-voffset=33 data-width="['610']" data-height="['81']" data-visibility="['on','on','off','off']" data-type=text data-responsive_offset="on" data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px;font-family:Poppins;">Profesionales con alta experiencia</div>
                                            <div class="tp-caption rev-btn rev-withicon " id=slide-1-layer-7 data-x=center data-hoffset data-y=center data-voffset=127 data-width="['auto']" data-height="['auto']" data-visibility="['on','on','off','off']" data-type=button data-responsive_offset="on" data-frames='[{"delay":790,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(174,148,104);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[14,14,14,14] data-paddingright=[17,17,17,17] data-paddingbottom=[16,16,16,16] data-paddingleft="[23,23,23,23]" style="z-index: 9; white-space: nowrap; font-size: 12px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: 2.5px;font-family:Poppins;text-transform:uppercase;background:linear-gradient(180deg, rgba(131,102,62,1) 0%, rgba(176,150,106,1) 100%);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Contactanos<i class=fa-icon-long-arrow-right></i></div>
                                        </li>
                                        <li data-index=rs-2 data-transition=fade data-slotamount=default data-hideafterloop=0 data-hideslideonmobile=off data-easein=default data-easeout=default data-masterspeed=300 data-thumb=upload/slider-2-100x50.jpg data-rotate=0 data-saveperformance=off data-title=Slide data-param1 data-param2 data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10 data-description> <img src=assets/upload/slider-2.jpg alt title=slider-2 width=1800 height=1000 data-bgposition="center center" data-bgfit=cover data-bgrepeat=no-repeat class=rev-slidebg data-no-retina>
                                            <div class="tp-caption   tp-resizeme" id=slide-2-layer-1 data-x=center data-hoffset data-y=center data-voffset=-182 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 38px; line-height: 38px; font-weight: 400; color: #b6a281; letter-spacing: 2px;font-family:Poppins;text-transform:uppercase;">Profesionales</div>
                                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id=slide-2-layer-3 data-x=center data-hoffset data-y=center data-voffset=-152 data-width="['103']" data-height="['1']" data-type=shape data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgb(182,162,129);"></div>
                                            <div class="tp-caption   tp-resizeme" id=slide-2-layer-4 data-x=center data-hoffset data-y=center data-voffset=-80 data-width="['auto']" data-height="['auto']" data-type=text data-responsive_offset="on" data-frames='[{"delay":310,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 102px; line-height: 102px; font-weight: 700; color: #ffffff; letter-spacing: 8px;font-family:Poppins;text-transform:uppercase;">Ius Arbitrare</div>
                                            <div class="tp-caption   tp-resizeme" id=slide-2-layer-5 data-x=center data-hoffset data-y=center data-voffset=33 data-width="['610']" data-height="['81']" data-visibility="['on','on','off','off']" data-type=text data-responsive_offset="on" data-frames='[{"delay":530,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop=[0,0,0,0] data-paddingright=[0,0,0,0] data-paddingbottom=[0,0,0,0] data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 610px; max-width: 610px; max-width: 81px; max-width: 81px; white-space: normal; font-size: 20px; line-height: 38px; font-weight: 500; color: #dedede; letter-spacing: 0px;font-family:Poppins;">Somos profesionales con alta experiencia</div>
                                            <div class="tp-caption rev-btn rev-withicon " id=slide-2-layer-7 data-x=center data-hoffset data-y=center data-voffset=127 data-width="['auto']" data-height="['auto']" data-visibility="['on','on','off','off']" data-type=button data-responsive_offset="on" data-frames='[{"delay":790,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(174,148,104);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop=[14,14,14,14] data-paddingright=[17,17,17,17] data-paddingbottom=[16,16,16,16] data-paddingleft="[23,23,23,23]" style="z-index: 9; white-space: nowrap; font-size: 12px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: 2.5px;font-family:Poppins;text-transform:uppercase;background:linear-gradient(180deg, rgba(131,102,62,1) 0%, rgba(176,150,106,1) 100%);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Contactanos<i class=fa-icon-long-arrow-right></i></div>
                                        </li>
                                    </ul>
                                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="margin: -70px 0px 0px 0px;padding: 0px 0px 0px 0px;" id=gdlr-core-wrapper-1>
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=" gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix" style="box-shadow: 0 0 32px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 32px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 32px rgba(10, 10, 10,0.08); background-color: #ffffff ;border-radius: 4px 4px 4px 4px;-moz-border-radius: 4px 4px 4px 4px;-webkit-border-radius: 4px 4px 4px 4px;">
                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-1>
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 60px 40px 20px 45px;" data-sync-height=height-about>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 8px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 16px ;font-weight: 700 ;letter-spacing: 4px ;">Acerca de Nosotros<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                            <div class=gdlr-core-divider-container style="max-width: 39px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;border-bottom-width: 4px ;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
                                            <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                                <p>Ius Arbitrare Centro de Asesoría Integral y Resolución de Conflictos, es una innovadora institución fundada en el año 2016 y conformada por un equipo multidisciplinario altamente especializado; esto ha permitido un continuo crecimiento de diferentes áreas de especialización, fruto de la innovación y de la constante adaptación a las necesidades de nuestros clientes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align">
                                            <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src=assets/upload/sign-black.png alt width=254 height=47 title=sign-black></div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 11px ;font-weight: 400 ;letter-spacing: 4px ;text-transform: uppercase ;">
                                                <p> CEO &#038; Founder of Attorna</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-hide-in-mobile">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height=height-about>
                                <div class=gdlr-core-pbf-background-wrap style="border-radius: 0px 4px 4px 0px;-moz-border-radius: 0px 4px 4px 0px;-webkit-border-radius: 0px 4px 4px 0px;">
                                    <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(img/about2.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                                </div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 95px 0px 30px 0px;">
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 600 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a8a8a8 ;">En que somos expertos ?</span>
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;text-transform: none ;">Áreas de Práctica Jurídica<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 70px ;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                        </div>
                    </div>
                    {{-- <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src=assets/upload/hp-icon-1.png alt width=57 height=56 title=hp-icon-1></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Corporate & Securities<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                        <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                            <p>We can provide corporate governance, helping clients manage the responsibilities of running a corporation in financial field.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=# style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 40px ;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src=assets/upload/hp-icon-2.png alt width=66 height=51 title=hp-icon-2></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Real Estate Law<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                        <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                            <p>We can provide corporate governance, helping clients manage the responsibilities of running a corporation in financial field.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=# style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 13px 0px 40px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 36px ;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src=assets/upload/hp-icon-3.png alt width=53 height=45 title=hp-icon-3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Health Care LAw<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                        <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                            <p>We can provide corporate governance, helping clients manage the responsibilities of running a corporation in financial field.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=# style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src=assets/upload/hp-icon-4.png alt width=53 height=53 title=hp-icon-4></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Insurance Law<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                        <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                            <p>We can provide corporate governance, helping clients manage the responsibilities of running a corporation in financial field.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=# style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 40px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src=assets/upload/hp-icon-5.png alt width=48 height=53 title=hp-icon-5></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Construction & Engineering<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                        <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                            <p>We can provide corporate governance, helping clients manage the responsibilities of running a corporation in financial field.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=# style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src=assets/upload/hp-icon-6.png alt width=50 height=50 title=hp-icon-6></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">Ecommerce Law<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                        <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                            <p>We can provide corporate governance, helping clients manage the responsibilities of running a corporation in financial field.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=# style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >Learn More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @php
                        $cont = 0;
                    @endphp
                    <div class="modal">
                    @foreach ($areaPractice ?? [] as $item)
                    @php
                        $cont++;
                        if ($cont == 4) {
                            $nameClase = "gdlr-core-column-first";
                            $cont = 1;
                        }else{
                            $nameClase = "";
                        }
                    @endphp
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 {{$nameClase}}">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 3px 0px 40px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 38px ;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="assets/upload/{{$item->icon_area}}" alt width=50 height=50 title=hp-icon-6></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 22px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 15px ;font-weight: 600 ;letter-spacing: 3px ;color: #454545 ;">{{$item->name_area}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div> 
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 22px ;">
                                        <div class=gdlr-core-text-box-item-content style="text-transform: none ;">
                                            <p id="detalleArea">{{$item->detail_area}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    {{-- <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=# style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class=gdlr-core-content >ver mas</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div> --}}
                                    <input id="modal{{$item->id_area}}" type="checkbox" name="modal{{$item->id_area}}" tabindex="1" style="display: none;">
                                    <label for="modal{{$item->id_area}}" class="gdlr-core-content" style="font-size: 13px ; cursor: pointer;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 0px 0px 0px 0px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;">VER MAS</label>
                                    <div class="modal__overlay" style="background-image:url('{{$item->backgroundimg}}');background-size:100% 100%;">
                                      <div class="bg-overlay" style="height: 100%; left: 0;position: fixed;top: 0;width: 100%;z-index: 0;background: #00000098;">
                                        <div class="modal__box">
                                          <label for="modal{{$item->id_area}}">&#10006;</label>
                                          <h2>{{$item->name_area}}</h2>
                                          <p>{{$item->detail_area}}</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>

                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 170px 0px 225px 0px;" data-skin="white client" id=gdlr-core-wrapper-2>
            <div class=gdlr-core-pbf-background-wrap>
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/pattrick1-bg.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
            </div>
            <div class=gdlr-core-pbf-background-frame style="margin: 60px 60px 60px 60px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;color: #b1976b ;">what we are expert at</span>
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 33px ;font-weight: 700 ;text-transform: none ;color: #ffffff ;">Why Clients Choose Us?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 50px ;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-2>
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 30px 65px;" data-sync-height=height2>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                        <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #c4c4c4 ;">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookm arksgrove right at the coast of the Semantics, a large language ocean. A small river named</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id=gdlr-core-column-3>
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 65px 0px 0px;" data-sync-height=height2>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                        <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #c4c4c4 ;">
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 52px ;font-weight: 700 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end=1000>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">Client Consultations</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 52px ;font-weight: 700 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end=95>0</span><span class=gdlr-core-counter-item-suffix>%</span></div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">Successful Cases</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 52px ;font-weight: 700 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end=10>0</span><span class=gdlr-core-counter-item-suffix>mIns</span></div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">Recovered cost for clients</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 52px ;font-weight: 700 ;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration data-counter-start=0 data-counter-end=30>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                        <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;">Professional Attorneys</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="margin: -140px auto 0px auto;padding: 0px 0px 100px 0px;max-width: 845px ;" data-skin="Grey Contact Form" id=gdlr-core-wrapper-3>
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id=gdlr-core-column-4>
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 80px 60px 0px 60px;">
                            <div class=gdlr-core-pbf-background-wrap style="box-shadow: 0 0 46px rgba(0, 0, 0,0.08); -moz-box-shadow: 0 0 46px rgba(0, 0, 0,0.08); -webkit-box-shadow: 0 0 46px rgba(0, 0, 0,0.08); border-radius: 4px 4px 4px 4px;-moz-border-radius: 4px 4px 4px 4px;-webkit-border-radius: 4px 4px 4px 4px;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/statue-con.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 55px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #303030 ;">Free Consultation<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;color: #6d6d6d ;margin-top: 15px ;">Law is complicate matter. It can cause you a big problem<br> if you ignore it. Let us help you! </span></div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div role=form class=wpcf7 id=wpcf7-f5826-p2039-o1 lang=en-US dir=ltr>
                                            <div class=screen-reader-response></div>
                                            <form action=# method=post class=wpcf7-form novalidate=novalidate>
                                                <div style="display: none;">
                                                    <input type=hidden name=_wpcf7 value=5826>
                                                    <input type=hidden name=_wpcf7_version value=5.1.1>
                                                    <input type=hidden name=_wpcf7_locale value=en_US>
                                                    <input type=hidden name=_wpcf7_unit_tag value=wpcf7-f5826-p2039-o1>
                                                    <input type=hidden name=_wpcf7_container_post value=2039>
                                                    <input type=hidden name=g-recaptcha-response value>
                                                </div>
                                                <div class="gdlr-core-input-wrap gdlr-core-large gdlr-core-full-width gdlr-core-with-column gdlr-core-no-border">
                                                    <div class=gdlr-core-column-30><span class="wpcf7-form-control-wrap your-name"><input type=email name=your-name value size=40 class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required=true aria-invalid=false placeholder=Name*></span></div>
                                                    <div class=gdlr-core-column-30><span class="wpcf7-form-control-wrap your-phone"><input type=text name=your-phone value size=40 class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required=true aria-invalid=false placeholder=Phone*></span></div>
                                                    <div class=clear></div>
                                                    <div class=gdlr-core-column-30><span class="wpcf7-form-control-wrap your-case"><select name=your-case class="wpcf7-form-control wpcf7-select" aria-invalid=false><option value="Corporate Law">Corporate Law</option><option value="Criminal Law">Criminal Law</option><option value="Personal Injury">Personal Injury</option></select></span></div>
                                                    <div class=gdlr-core-column-30><span class="wpcf7-form-control-wrap your-email"><input type=email name=your-email value size=40 class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required=true aria-invalid=false placeholder=Email*></span></div>
                                                    <div class=clear></div>
                                                    <div class=gdlr-core-column-60><span class="wpcf7-form-control-wrap your-message"><textarea name=your-message cols=40 rows=10 class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required=true aria-invalid=false placeholder=Message*></textarea></span></div>
                                                    <div class=clear></div>
                                                    <div class="gdlr-core-column-60 gdlr-core-left-align">
                                                        <input type=submit value="Submit Now" class="wpcf7-form-control wpcf7-submit gdlr-core-full">
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 100px 0px 45px 0px;background-color: #f2f2f2 ;">
            <div class=gdlr-core-pbf-background-wrap style="bottom: 293px ;">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/GFED.jpg) ;background-repeat: repeat ;background-position: center ;" data-parallax-speed=0></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #ffffff ;">Partners at Attorna<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px ;"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href=# style="font-size: 13px ;font-weight: 600 ;letter-spacing: 2px ;color: #b1976b ;padding: 10px 33px 15px 33px;"><span class=gdlr-core-content >View All People</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="color: #b1976b ;"  ></i></a></div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 55px ;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-personnel-item-style-grid-with-background gdlr-core-personnel-style-grid gdlr-core-with-background gdlr-core-item-pdlr">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2  gdlr-core-bottom-nav-1" data-type=carousel data-column=3 data-move=1 data-nav=navigation-bottom data-nav-parent=gdlr-core-personnel-item data-disable-autoslide=1>
                                <ul class=slides>
                                    <li class=gdlr-core-item-mglr>
                                        <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                            <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                                <a href=#><img src=assets/upload/James-599x500.jpg alt width=599 height=500 title=James></a>
                                            </div>
                                            <div class=gdlr-core-personnel-list-content-wrap>
                                                <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;margin-bottom: 5px ;"><a href=# >James Milner</a></h3>
                                                <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">Partner</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=gdlr-core-item-mglr>
                                        <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                            <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                                <a href=#><img src=assets/upload/Emma2-599x500.jpg alt width=599 height=500 title=Emma2></a>
                                            </div>
                                            <div class=gdlr-core-personnel-list-content-wrap>
                                                <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;margin-bottom: 5px ;"><a href=# >Emma Bunton</a></h3>
                                                <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">Partner</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=gdlr-core-item-mglr>
                                        <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                            <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                                <a href=#><img src=assets/upload/Melanie-599x500.jpg alt width=599 height=500 title=Melanie></a>
                                            </div>
                                            <div class=gdlr-core-personnel-list-content-wrap>
                                                <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;margin-bottom: 5px ;"><a href=# >Melanie Brown</a></h3>
                                                <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">Partner</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=gdlr-core-item-mglr>
                                        <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                            <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                                <a href=#><img src=assets/upload/Nathaniel1-599x500.jpg alt width=599 height=500 title=Nathaniel1></a>
                                            </div>
                                            <div class=gdlr-core-personnel-list-content-wrap>
                                                <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;margin-bottom: 5px ;"><a href=# >Nathaniel Phillips</a></h3>
                                                <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">Partner</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=gdlr-core-item-mglr>
                                        <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                            <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                                <a href=#><img src=assets/upload/Jodan1-599x500.jpg alt width=599 height=500 title=Jodan1></a>
                                            </div>
                                            <div class=gdlr-core-personnel-list-content-wrap>
                                                <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;margin-bottom: 5px ;"><a href=# >Jodan Henderson</a></h3>
                                                <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">Partner</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=gdlr-core-item-mglr>
                                        <div class="gdlr-core-personnel-list gdlr-core-outer-frame-element clearfix" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;">
                                            <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-grayscale-effect">
                                                <a href=#><img src=assets/upload/joel1-599x500.jpg alt width=599 height=500 title=joel1></a>
                                            </div>
                                            <div class=gdlr-core-personnel-list-content-wrap>
                                                <h3 class="gdlr-core-personnel-list-title" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;margin-bottom: 5px ;"><a href=# >Joel Matip</a></h3>
                                                <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 13px ;font-weight: 500 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;">Partner</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;" data-skin="2018 white">
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 12px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #2c2c2c ;">We serve the best service<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 20px ;">
                                        <div class=gdlr-core-divider-container style="max-width: 40px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;border-bottom-width: 6px ;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-40">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                        <div class=gdlr-core-text-box-item-content style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #6d6d6d ;">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookm arksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place. bliss of souls like. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                            <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/winner21.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=assets/upload/law30.png alt width=35 height=50 title=law30></div>
                                        <div class=gdlr-core-column-service-content-wrapper>
                                            <div class=gdlr-core-column-service-title-wrap>
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">2018 winning Award</h3></div>
                                            <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                            <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/private22.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=assets/upload/law31.png alt width=34 height=46 title=law31></div>
                                        <div class=gdlr-core-column-service-content-wrapper>
                                            <div class=gdlr-core-column-service-title-wrap>
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">Private</h3></div>
                                            <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 20px 20px 20px 20px;padding: 75px 20px 45px 20px;" data-sync-height=height5>
                            <div class=gdlr-core-pbf-background-wrap style="border-radius: 3px 3px 3px 3px;-moz-border-radius: 3px 3px 3px 3px;-webkit-border-radius: 3px 3px 3px 3px;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/legal23.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=assets/upload/law32.png alt width=45 height=45 title=law32></div>
                                        <div class=gdlr-core-column-service-content-wrapper>
                                            <div class=gdlr-core-column-service-title-wrap>
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 700 ;letter-spacing: 3px ;">Legal Protection</h3></div>
                                            <div class=gdlr-core-column-service-content style="font-weight: 400 ;text-transform: none ;">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 145px 0px 150px 0px;" data-skin="Testimonial Dark" id=gdlr-core-wrapper-4>
            <div class=gdlr-core-pbf-background-wrap>
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/see-bg.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.1></div>
            </div>
            <div class=gdlr-core-pbf-background-frame style="margin: 60px 60px 60px 60px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-weight: 600 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #b1976b ;margin-bottom: 0px ;">testimonial</span>
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 33px ;font-weight: 700 ;text-transform: none ;color: #ffffff ;">Words From Clients<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 40px ;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 820px ;">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix  gdlr-core-testimonial-style-center gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-nav-style-middle-large" data-type=carousel data-column=1 data-move=1 data-nav=bullet data-vcenter-nav=1>
                                            <ul class=slides>
                                                <li class=gdlr-core-item-mglr>
                                                    <div class="gdlr-core-testimonial clearfix">
                                                        <div class=gdlr-core-testimonial-content-wrap>
                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts.</p>
                                                            </div>
                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                <div class="gdlr-core-testimonial-author-image gdlr-core-media-image"><img src=assets/upload/jihn-1.png alt width=71 height=71 title=jihn-1></div>
                                                                <div class=gdlr-core-testimonial-author-content>
                                                                    <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">John Dowson</div>
                                                                    <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">CEO Of iFin, Financial Corp.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=gdlr-core-item-mglr>
                                                    <div class="gdlr-core-testimonial clearfix">
                                                        <div class=gdlr-core-testimonial-content-wrap>
                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                <p> I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary,</p>
                                                            </div>
                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                <div class="gdlr-core-testimonial-author-image gdlr-core-media-image"><img src=assets/upload/Emma1-150x150.jpg alt width=150 height=150 title=Emma1></div>
                                                                <div class=gdlr-core-testimonial-author-content>
                                                                    <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Janete Jones</div>
                                                                    <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">CFO Of Apple</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=gdlr-core-item-mglr>
                                                    <div class="gdlr-core-testimonial clearfix">
                                                        <div class=gdlr-core-testimonial-content-wrap>
                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="color: #aa9b7a ;">&#8220;</div>
                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 20px ;color: #c9c9c9 ;">
                                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                                                            </div>
                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                <div class="gdlr-core-testimonial-author-image gdlr-core-media-image"><img src=assets/upload/Nathaniel1-150x150.jpg alt width=150 height=150 title=Nathaniel1></div>
                                                                <div class=gdlr-core-testimonial-author-content>
                                                                    <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #ffffff ;font-size: 19px ;">Jame Gordon</div>
                                                                    <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #b1a17d ;font-size: 15px ;">Accountant</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 25px 0px;" data-skin="Grey Carousel">
            <div class=gdlr-core-pbf-background-wrap>
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 600 ;font-style: normal ;letter-spacing: 2px ;text-transform: uppercase ;color: #a8a8a8 ;margin-bottom: 7px ;">see our</span>
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;text-transform: none ;color: #303030 ;">Case Studies<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 43px ;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-modern-desc-no-space gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2  gdlr-core-bottom-nav-1" data-type=carousel data-column=5 data-move=1 data-nav=navigation-bottom data-nav-parent=gdlr-core-portfolio-item>
                                <ul class=slides>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/Family1-600x600.jpg alt width=600 height=600 title=Family1><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/Family1.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >Family Violence</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Violence</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/Giving-Million-Air-Its-Wings-600x600.jpg alt width=600 height=600 title=Giving-Million-Air-Its-Wings><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/Giving-Million-Air-Its-Wings.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >Giving Million Air Its Wings</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Financial</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/Reinventing-the-Riverfront-600x600.jpg alt width=600 height=600 title=Reinventing-the-Riverfront><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/Reinventing-the-Riverfront.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >Car Accident Insurance</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Accidental</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/Making-Sure-the-Closing-Happens-600x600.jpg alt width=600 height=600 title=Making-Sure-the-Closing-Happens><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/Making-Sure-the-Closing-Happens.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >Making Sure It&#8217;s Closed</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Financial</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/Public-Company-Fraud-600x600.jpg alt width=600 height=600 title=Public-Company-Fraud><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/Public-Company-Fraud.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >Public Company Fraud</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Financial</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/Nighmare-on-Wall-Street-600x600.jpg alt width=600 height=600 title=Nighmare-on-Wall-Street><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/Nighmare-on-Wall-Street.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >Nighmare on Wall Street</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Violence</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/Privacy-Matter-600x600.jpg alt width=600 height=600 title=Privacy-Matter><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/Privacy-Matter.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >Privacy Matter</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Financial</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/MaTix-Tax-Invation-600x600.jpg alt width=600 height=600 title=MaTix-Tax-Invation><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/MaTix-Tax-Invation.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >MaTix Tax Invation</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Accidental</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=gdlr-core-portfolio-modern-desc>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image ">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src=assets/upload/Failure-of-Apple-Acquisition-600x600.jpg alt width=600 height=600 title=Failure-of-Apple-Acquisition><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center gdlr-core-js" style="background: rgba(62, 53, 43, 0.8) ;"><span class=gdlr-core-image-overlay-content ><span class=gdlr-core-portfolio-icon-wrap ><a class="gdlr-core-lightgallery gdlr-core-js "  href=upload/Failure-of-Apple-Acquisition.jpg data-lightbox-group=gdlr-core-img-group-1><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a></span><span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href=# >Failure of Apple Acquisition</a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font"><a href=# rel=tag>Violence</a></span><span class=gdlr-core-portfolio-content></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 160px 0px 110px 0px;" data-skin=Newsletter id=gdlr-core-wrapper-5>
            <div class=gdlr-core-pbf-background-wrap>
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/sing-name.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.2></div>
            </div>
            <div class=gdlr-core-pbf-background-frame style="margin: 55px 55px 55px 55px;border-width: 1px 1px 1px 1px;border-style: solid ;border-color: #686868 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 18px ;font-weight: 700 ;font-style: normal ;letter-spacing: 4px ;text-transform: uppercase ;color: #ffffff ;">Are you looking for someone to help?</span>
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #b1976b ;">Let us help you! Call Now : (1)2345-2345-54<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                            <div class=gdlr-core-text-box-item-content style="text-transform: none ;color: #ffffff ;">
                                <div style="margin-left: 12px; margin-right: 0px; display: inline;"><i class="fa fa-envelope-open-o" style="font-size: 14px ;color: #b1976b ;margin-right: 10px ;"></i>Contact@Attornasite.co</div>
                                <div style="margin-left: 9px; margin-right: 13px; display: inline;">· <i class=icon_clock_alt style="font-size: 15px ;color: #b1976b ;margin-right: 10px ;"></i>Mon &#8211; Fri 09:00-17:00</div>
                            </div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 50px ;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 38px ;">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;text-transform: none ;color: #ffffff ;">Subscribe To Newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-style-rectangle">

                            <div class="newsletter newsletter-subscription">
                                <form class="gdlr-core-newsletter-form clearfix" method=post action="#" onsubmit="return newsletter_check(this)">
                                    <div class=gdlr-core-newsletter-email>
                                        <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type=email name=ne size=30 required>
                                    </div>
                                    <div class=gdlr-core-newsletter-submit>
                                        <input class=newsletter-submit type=submit value=Subscribe>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 100px 0px 65px 0px;" id=gdlr-core-wrapper-6>
            <div class=gdlr-core-pbf-background-wrap>
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/work-bg.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed=0.1></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 600 ;font-style: normal ;letter-spacing: 3px ;text-transform: uppercase ;color: #a69279 ;margin-bottom: 7px ;">our blog</span>
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 30px ;font-weight: 700 ;text-transform: none ;color: #2b2b2b ;">Recent Articles<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align gdlr-core-style-vertical" style="margin-bottom: 43px ;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #b1976b ;height: 27px ;"></div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column-with-frame" style="padding-bottom: 15px ;">
                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background  gdlr-core-outer-frame-element gdlr-core-with-thumbnail" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;" data-sync-height=blog-item-1>
                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href=#><img src=assets/upload/drew-beamer-679505-unsplash-700x450.jpg alt width=700 height=450 title=drew-beamer-679505-unsplash></a>
                                        </div>
                                        <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position" style="padding-top: 40px;padding-bottom: 35px;">
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;"><a href=# >Domestic Violence in California &#8211; How a Lawyer Can Help</a></h3>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_clock_alt ></i></span><a href=#>Feb 28, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_comment_alt ></i></span><a href=#>1 comment</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                    <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background  gdlr-core-outer-frame-element gdlr-core-with-thumbnail" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;" data-sync-height=blog-item-1>
                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href=#><img src=assets/upload/rawpixel-804738-unsplash-700x450.jpg alt width=700 height=450 title=rawpixel-804738-unsplash></a>
                                        </div>
                                        <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position" style="padding-top: 40px;padding-bottom: 35px;">
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;"><a href=# >Filing a Claim against a Cruise Ship Contractual Limitations</a></h3>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_clock_alt ></i></span><a href=#>Feb 28, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_comment_alt ></i></span><a href=#>4 comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                    <div class="gdlr-core-blog-grid gdlr-core-style-3 gdlr-core-js  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background  gdlr-core-outer-frame-element gdlr-core-with-thumbnail" style="box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.08); border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;" data-sync-height=blog-item-1>
                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                            <a href=#><img src=assets/upload/rawpixel-1135753-unsplash-700x450.jpg alt width=700 height=450 title=rawpixel-1135753-unsplash></a>
                                        </div>
                                        <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position" style="padding-top: 40px;padding-bottom: 35px;">
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 700 ;letter-spacing: 0px ;"><a href=# >Day Care Responsibility to Protect Children</a></h3>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_clock_alt ></i></span><a href=#>Feb 28, 2019</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_documents_alt ></i></span><a href=# title="Posts by James Smith" rel=author>James Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment"><span class=gdlr-core-blog-info-sep >•</span><span class=gdlr-core-head><i class=icon_comment_alt ></i></span><a href=#>2 comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-button-no-border" href=blog-full-right-sidebar-with-frame.html style="font-size: 13px ;font-weight: 700 ;letter-spacing: 2px ;color: #ffffff ;padding: 12px 24px 14px 28px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #b1976b ;"><span class=gdlr-core-content >Read The Blog</span><i class="gdlr-core-pos-right fa fa-long-arrow-right"  ></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 60px 0px 10px 0px;">
            <div class=gdlr-core-pbf-background-wrap style="background-color: #1d1d1d ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid" style="padding-bottom: 10px ;">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=assets/upload/banner-1-d.png alt width=220 height=120 title=banner-1-d></div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=assets/upload/banner-2-d.png alt width=220 height=120 title=banner-2-d></div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=assets/upload/banner-3-d.png alt width=220 height=120 title=banner-3-d></div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=assets/upload/banner-4-d.png alt width=220 height=120 title=banner-4-d></div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=assets/upload/banner-5-d.png alt width=220 height=120 title=banner-5-d></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 0px ;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3a3a3a ;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
  <!-- Bootstrap Js -->
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   --}}
@endsection