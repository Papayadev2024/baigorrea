@extends('components.public.matrix', ['pagina' => 'Inicio'])
@section('titulo', 'Inicio')
@section('css_importados')
    <style>
        .swiper-pagination-testimonios .swiper-pagination-bullet {
            width: 14px;
            height: 8px;
            border-radius: 6px;
            background-color: #FFFFFF !important;
        
        }

        .swiper-pagination-testimonios .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: #05304e81!important;
            opacity: 1;
        }
        .select2-container--default .select2-selection--single {
            border: 1px solid #F9D1AF !important;
            border-radius: 0.5rem !important;
            height: auto !important;
            padding: 0.5rem 0.75rem !important;
            background-color: #FDFDFD !important;
        }

        /* Estilo cuando está enfocado */
        .select2-container--default.select2-container--focus .select2-selection--single {
            border-color: #EB6C2D !important;
            outline: 0 !important;
            box-shadow: none !important;
        }

        /* Estilo del texto */
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #013250 !important;
            font-family: 'Aceh', sans-serif !important;
            font-size: 1rem !important;
            line-height: 1.5 !important;
            padding: 0 !important;
        }

        /* Para pantallas grandes */
        @media (min-width: 1536px) {
            .select2-container--default .select2-selection--single .select2-selection__rendered {
                font-size: 1.25rem !important;
            }
        }

        /* Estilo de la flecha desplegable */
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100% !important;
        }

        .select2-search__field{
            border-color: #EB6C2D !important;
            outline: 0 !important;
            box-shadow: none !important;
        }

        .select2-results__message{
            font-size: 12px !important;
        }

        /* Estilos para select banderas */
        .js-phone-select + .select2-container--default .select2-selection--single {
            border: 1px solid #F9D1AF !important;
            border-radius: 0.5rem 0 0 0.5rem !important; /* Solo redondeo izquierdo */
            height: auto !important;
            padding: 0.5rem 0.75rem !important;
            background-color: #FDFDFD !important;
            transition: border-color 0.3s ease;
            
        }
        
        .js-phone-select + .select2-container {
            max-width: 100px!important;
        }

        .word {
            opacity: 0;
        }

      
    </style>
@stop
@section('content')
    
    <main>
        
        {{-- style="background-image: url('{{ asset('images/img/bannerfinal.png') }}')" --}}
        <section id="bannerprincipal" class="bg-cover relative" >
            <iframe class="w-full h-full absolute" src="https://www.youtube.com/embed/5GvpNRNPJbs?autoplay=1&mute=1&enablejsapi=1&loop=1&controls=0&disablekb=1&fs=0&modestbranding=1&rel=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="absolute inset-0 bg-[#0057B8] bg-opacity-80"></div>
            <div class="flex flex-col gap-10 w-full pr-[5%] sm:px-[5%] bg-[#0057B8] bg-opacity-80">
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
                    
                    <div class="lg:col-span-2 flex flex-col sm:-space-y-10 pt-10 md:pt-16">
                        <div class="flex flex-col justify-center items-start gap-8 px-[5%] sm:px-0">
                            <h2 id="animated-text" class="z-10 text-white mx-auto lg:mx-0 text-left sm:text-center lg:text-left max-w-2xl 2xl:max-w-3xl font-tt_hoves_bold uppercase text-4xl sm:text-5xl xl:text-[64px] leading-tight lg:!leading-[65px] tracking-tighter" >
                                <span class="word">Tu</span>
                                <span class="word">terreno</span>
                                <span class="word">en</span>
                                <span class="word">pisco</span>
                                <span class="word">al</span>
                                <span class="word">alcance</span>
                                <span class="word">de</span>
                                <span class="word">tu</span>
                                <span class="word text-[#E1DE18]">bolsillo</span>
                            </h2>
                        </div>
                       
                        <div class="flex flex-col justify-end items-start relative order-2 lg:order-1">
                            <div class="relative mx-auto lg:mx-0" data-aos="fade-down">
                                <img class="imagenportada w-full h-[300px] sm:h-[400px] xl:h-[500px] 2xl:h-[600px]  -mb-7 z-10 object-cover sm:object-contain object-right sm:object-center" src="{{asset('images/img/imagenportada.png')}}"
                                    onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                        </div>
                    </div>
    
                    <div class="lg:col-span-1 flex flex-col sm:flex-row gap-5 sm:gap-10 lg:flex-col justify-around items-start lg:items-center order-1 lg:order-2 2xl:py-12">
                        
                        <div class="hidden lg:grid grid-cols-1 gap-2 xl:gap-4 z-20 min-w-[390px] xl:w-[450px] 2xl:w-[550px] 3xl:w-[550px] max-w-[600px]">
                            <div id="form1" class="bg-[#FDFDFD] p-4 xl:p-6 2xl:p-8 rounded-2xl flex flex-col gap-4 formulariocontacto">
                                <form class="flex flex-col gap-2 xl:gap-4" id="formContactos">
                                  @csrf
                                    <div class="relative">
                                        <input type="text" name="full_name" id="full_name" placeholder=" " 
                                            class="peer border-[#F9D1AF] focus:border-[#EB6C2D] focus:ring-0 font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                        <label for="full_name" class="text-[#013250] absolute left-2 top-2 peer-focus:-top-3 peer-[:not(:placeholder-shown)]:-top-3 transition-all peer-focus:text-sm peer-[:not(:placeholder-shown)]:text-sm peer-focus:bg-white peer-[:not(:placeholder-shown)]:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1 font-aceh 2xl:text-xl peer-focus:2xl:text-lg peer-[:not(:placeholder-shown)]:2xl:text-lg">Nombres y Apellidos</label>
                                    </div>
                                    
                                    <div class="relative">
                                            <select type="text" name="project" id="proyecto" placeholder=" " 
                                                class="customselect peer border-[#F9D1AF] focus:border-[#EB6C2D] focus:ring-0 font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                                <option value="Proyecto Paracas">Proyecto Paracas</option>
                                                <option value="Proyecto Villa Vista">Proyecto Villa Vista</option>
                                                <option value="Proyecto Cañete">Proyecto Cañete</option>
                                            </select>
                                    </div>
                                    
                                    <div class="flex flex-row">
                                        <select class="js-phone-select !max-w-[120px]" name="code_country">
                                            @foreach($paises as $pais)
                                                <option value="{{ $pais['iso2'] }}"
                                                        data-phone-code="+{{ $pais['phoneCode'] }}">
                                                    {{ $pais['nameES'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="relative w-full">
                                            <input type="text" name="phone" id="telefonoContacto" placeholder=" " 
                                                class="peer border-[#F9D1AF] focus:border-[#EB6C2D] focus:ring-0 font-aceh w-full py-2 px-3 rounded-lg rounded-l-none border-l-transparent text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <label for="telefonoContacto" class="text-[#013250] absolute left-2 top-2 peer-focus:-top-3 peer-[:not(:placeholder-shown)]:-top-3 transition-all peer-focus:text-sm peer-[:not(:placeholder-shown)]:text-sm peer-focus:bg-white peer-[:not(:placeholder-shown)]:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1 font-aceh 2xl:text-xl peer-focus:2xl:text-lg peer-[:not(:placeholder-shown)]:2xl:text-lg">Celular</label>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-3">
                                        <label for="message" class="col-span-4 -mb-2 text-[#013250] font-aceh text-base 2xl:text-xl">¿Cuenta con una inicial?<span class="text-[#EB6C2D]">*</span></label>

                                        <div class="flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <input id="input1" type="radio" name="amount" value="no" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                            <label for="input1">No</label>
                                        </div>

                                        <div class="flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <input id="input2" type="radio" name="amount" value="1480" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                            <label for="input2">S/1,480</label>
                                        </div>

                                        <div class="flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <input id="input3" type="radio" name="amount" value="2000" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                            <label for="input3">S/2,000</label>
                                        </div>

                                        <div class="flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <input id="input4" type="radio" name="amount" value="2400" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                            <label for="input4">S/2,400</label>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-3">
                                        <label for="message" class="col-span-4 -mb-2 text-[#013250] font-aceh text-base 2xl:text-xl">La cuota mensual que puedo pagar es de<span class="text-[#EB6C2D]">*</span></label>

                                        <div class="flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <input id="inputcuota1" type="radio" name="quote" value="300" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                            <label for="inputcuota1">S/300</label>
                                        </div>

                                        <div class="flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <input id="inputcuota2" type="radio" name="quote" value="400" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                            <label for="inputcuota2">S/400</label>
                                        </div>

                                        <div class="flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <input id="inputcuota3" type="radio" name="quote" value="500" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                            <label for="inputcuota3">S/500</label>
                                        </div>

                                        <div class="flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                            <input id="inputcuota4" type="radio" name="quote" value="600" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                            <label for="inputcuota4">S/600</label>
                                        </div>
                                    </div>
                                    
                                    <div class="relative mt-3">
                                        <input type="date" name="date_buy" id="date_buy" placeholder=" " 
                                            class="peer border-[#F9D1AF] focus:border-[#EB6C2D] focus:ring-0 font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                        <label for="date_buy" class="text-[#013250] absolute left-2 top-2 peer-focus:-top-3 peer-[:not(:placeholder-shown)]:-top-3 transition-all peer-focus:text-sm peer-[:not(:placeholder-shown)]:text-sm peer-focus:bg-white peer-[:not(:placeholder-shown)]:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1 font-aceh 2xl:text-xl peer-focus:2xl:text-lg peer-[:not(:placeholder-shown)]:2xl:text-lg">¿Tienes una fecha aproximada de compra?</label>
                                    </div>
                                    

                                    
                                    {{-- <input type="email" name="email" 
                                      placeholder="Correo Electrónico"
                                      class="border-green-500 border-0 focus:!border-0 focus:!ring-0 focus:!ring-transparent
                                      placeholder:text-[#AAC3E6] text-[#97adcb] font-Montserrat_Regular w-full py-3 px-2 rounded-3xl text-base 2xl:text-xl  placeholder-opacity-25 font-light  bg-white"> --}}
                        
                              
                                  <input type="hidden" name="client_width" id="anchodispositivo">
                                  <input type="hidden" name="client_height" id="largodispositivo">
                                  <input type="hidden" name="client_latitude" id="latitud">
                                  <input type="hidden" name="client_longitude" id="longitud">
                                  <input type="hidden" name="client_system" id="sistema">
                                  <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Inicio" />
                                     
                                   <button type="submit" class="w-full text-white text-center text-lg px-6 py-3 font-aceh rounded-xl bg-gradient-to-r from-[#EB6C2D] to-[#F4B17D] flex flex-row gap-2 justify-center">
                                        Enviar formulario
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                            <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                                            <rect x="0.5" width="24" height="24" fill="white"/>
                                            </mask>
                                            <g mask="url(#mask0_2002_48)">
                                            <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                                            </g>
                                        </svg>
                                    </button>

                                    <p class="col-span-4 -mb-2 text-[#013250] font-aceh text-base 2xl:text-xl">Al enviar el formulario estoy aceptando<span class="text-[#EB6C2D]"><a id="linkTerminos2" class="underline"> Términos y Condiciones</a> y <a id="linkPoliticasDatos2" class="underline">Políticas de privacidad</a></span></p>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section  class="w-full items-start px-[5%] py-8 text-[#252222] bg-cover bg-center" style="background-image: url({{ asset('images/img/textura_beneficios.png') }})">
            <div class="grid grid-cols-1" data-aos="fade-down">
                <div>
                    <div class="swiper beneficios">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px]">
                                    <div class="rounded-full w-14 h-14 flex flex-row justify-center items-center">
                                        <img  class="object-contain w-12" loading="lazy" src="{{asset('images/img/energy.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/imagen/noimagen.jpg') }}';"/>
                                    </div>
                                    <div class="flex flex-col text-white">
                                        <h2 class="uppercase text-xl xl:text-2xl font-tt_hoves_bold !leading-none max-w-xs">obras completas</h2>
                                        <p class="mt-2 text-lg xl:text-xl font-aceh !leading-tight">
                                            Contamos con todas las obras completas, amplias pistas asfaltadas, veredas, luz, agua y desagüe.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px]">
                                    <div class=" rounded-full w-14 h-14 flex flex-row justify-center items-center">
                                        <img  class="object-contain w-12" loading="lazy" src="{{asset('images/img/slide.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/imagen/noimagen.jpg') }}';"/>
                                    </div>
                                    <div class="flex flex-col text-white">
                                        <h2 class="uppercase text-xl xl:text-2xl font-tt_hoves_bold !leading-none max-w-xs">ÁREAS RECREATIVAS</h2>
                                        <p class="mt-2 text-lg xl:text-xl font-aceh !leading-tight">
                                            Contamos con amplios parques, juegos para niños y cancha deportiva.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex flex-col gap-4 items-start min-w-[240px]">
                                    <div class=" rounded-full w-14 h-14 flex flex-row justify-center items-center">
                                        <img  class="object-contain w-12" loading="lazy" src="{{asset('images/img/artboard.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/imagen/noimagen.jpg') }}';"/>
                                    </div>
                                    <div class="flex flex-col text-white">
                                        <h2 class="uppercase text-xl xl:text-2xl font-tt_hoves_bold tracking-wide !leading-none max-w-xs">Desde 90m2</h2>
                                        <p class="mt-2 text-lg xl:text-xl font-aceh !leading-tight">
                                            ¡Nuevo Proyecto! Aprovecha la Pre-Venta. Crédito directo sin bancos.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-[5%] pt-10 lg:pt-20 bg-white" id="paracasllegada">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10" >
                <div class="flex flex-col justify-center">
                    <img class="w-full h-[300px] sm:h-[400px] lg:h-[500px] 2xl:h-[600px] object-contain object-center" src="{{ asset('images/img/terreno.png') }}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>
                <div class="flex flex-col gap-5 justify-center">

                    <h2 id="animated-second-text" class="text-[#013250] text-left font-tt_hoves_bold uppercase text-3xl sm:text-4xl xl:text-5xl 2xl:text-6xl !leading-tight tracking-wide">
                        <span class="word">Vive</span>
                        <span class="word">a 10 minutos</span>
                        <span class="word">de</span>
                        <span class="word">la</span><br>
                        <span class="word">Bahía de</span>      
                        <span class="word text-[#EB6C2D]">Paracas</span>
                    </h2>
                    
                    <div class="flex precios1derecha">
                        <div class="grid grid-cols-2 rounded-2xl  border border-[#013250] w-auto">
                            <div class="flex flex-col border-r border-[#013250] px-4 py-2">
                                <p class="font-aceh text-[#014568] text-lg">Desde</p>
                                <h2 class="font-aceh font-bold text-[#013250] text-2xl">S/12,948</h2>
                            </div>
                            
                            <div class="flex flex-col px-4 py-2">
                                <p class="font-aceh  text-[#014568] text-lg">Cuotas desde</p>
                                <h2 class="font-aceh font-bold text-[#013250] text-2xl leading-5 sm:!leading-normal">S/279 <span class="text-[#014568] font-normal text-lg">mensuales</span></h2>
                            </div>
                        </div>
                    </div>

                    <p class="font-aceh text-[#014568] text-lg 2xl:text-xl precios1derecha">
                        Disfruta del sol radiante todo el año. Estamos ubicados en la misma avenida Panamericana Sur, kilómetro 232, y a tan solo 10 minutos de la bahía de Paracas y de la urbanización Santa Cruz.
                    </p>

                    <ul class="font-aceh text-[#014568] text-lg 2xl:text-xl precios1derecha">
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> A 10 minutos de la reserva natural</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Alto potencial de revalorización</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Ubicados en la misma Avenida Panamericana Sur Km.232</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Crédito directo sin intereses</li>
                    </ul>

                    <div id="masinfoparacas" class="precios1derecha text-white hidden cursor-pointer lg:flex text-center text-lg px-6 py-3 font-aceh rounded-xl bg-gradient-to-r from-[#004469] to-[#61C0E0] flex-row gap-2 justify-center">
                        Quiero más información 
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                            <rect x="0.5" width="24" height="24" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_2002_48)">
                            <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                            </g>
                        </svg>
                    </div>

                    <div id="masinfoparacas2" class="precios1derecha text-white lg:hidden cursor-pointer text-center text-lg px-6 py-3 font-aceh rounded-xl bg-gradient-to-r from-[#004469] to-[#61C0E0] flex flex-row gap-2 justify-center">
                        Quiero más información 
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                            <rect x="0.5" width="24" height="24" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_2002_48)">
                            <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-[5%] pt-10 lg:pt-20 bg-white" id="villallegada">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10" >
                <div class="flex flex-col lg:order-2 justify-center">
                    <img class="w-full h-[300px] sm:h-[400px] lg:h-[500px] 2xl:h-[600px] object-contain object-center" src="{{ asset('images/img/imagendemo.png') }}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>
                <div class="flex flex-col gap-5 justify-center">

                    <h2 id="animated-third-text" class="text-[#013250] text-left font-tt_hoves_bold uppercase text-3xl sm:text-4xl xl:text-5xl 2xl:text-6xl !leading-tight tracking-wide">
                        <span class="word">Construye</span>
                        <span class="word">la</span>
                        <span class="word">casa</span>
                        <span class="word">de tus sueños en</span><br>
                        <span class="word text-[#EB6C2D]">Villa Buenavista</span>
                    </h2>
                    
                    <div class="flex precios2izquierda">
                        <div class="grid grid-cols-2 rounded-2xl  border border-[#013250] w-auto">
                            <div class="flex flex-col border-r border-[#013250] px-4 py-2">
                                <p class="font-aceh text-[#014568] text-lg">Inicial</p>
                                <h2 class="font-aceh font-bold text-[#013250] text-2xl">S/1,480</h2>
                            </div>
                            
                            <div class="flex flex-col px-4 py-2">
                                <p class="font-aceh  text-[#014568] text-lg">Cuotas desde</p>
                                <h2 class="font-aceh font-bold text-[#013250] text-2xl leading-5 sm:!leading-normal">S/279 <span class="text-[#014568] font-normal text-lg">mensuales</span></h2>
                            </div>
                        </div>
                    </div>

                    <p class="font-aceh text-[#014568] text-lg 2xl:text-xl precios2izquierda">
                        En Villa Buenavista, tú eres propietario de un terreno con 100% de seguridad legal. Tu contrato es firmado y legalizado notarialmente. Además, contamos con título de propiedad y servicios básicos.
                    </p>

                    <ul class="font-aceh text-[#014568] text-lg 2xl:text-xl precios2izquierda">
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Ubicación con amplias áreas verdes</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Bono de descuento por buen pagador</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Hasta 48 cuotas sin intereses</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Crédito directo, sin bancos.</li>
                    </ul>

                    <div id="masinfovilla" class="precios2izquierda text-white cursor-pointer hidden lg:flex text-center text-lg px-6 py-3 font-aceh rounded-xl bg-gradient-to-r from-[#004469] to-[#61C0E0]  flex-row gap-2 justify-center">
                        Quiero más información 
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                            <rect x="0.5" width="24" height="24" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_2002_48)">
                            <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                            </g>
                        </svg>
                    </div>

                    <div id="masinfovilla2" class="precios2izquierda text-white cursor-pointer text-center flex lg:hidden text-lg px-6 py-3 font-aceh rounded-xl bg-gradient-to-r from-[#004469] to-[#61C0E0]  flex-row gap-2 justify-center">
                        Quiero más información 
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                            <rect x="0.5" width="24" height="24" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_2002_48)">
                            <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-[5%] py-10 lg:py-20 bg-white" id="canetellegada">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10" >
                <div class="flex flex-col justify-center">
                    <img class="w-full h-[300px] sm:h-[400px] lg:h-[500px] 2xl:h-[600px] object-contain object-center" src="{{ asset('images/img/terreno.png') }}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>
                <div class="flex flex-col gap-5 justify-center">

                    <h2 id="animated-four-text" class="text-[#013250] text-left font-tt_hoves_bold uppercase text-3xl sm:text-4xl xl:text-5xl 2xl:text-6xl !leading-tight tracking-wide">
                        <span class="word">Disfruta de tu</span>
                        <span class="word">Terreno en Pisco y obtén</span>
                        <span class="word">alta revalorización</span>
                        <br><span class="word text-[#EB6C2D]">por tu inversión</span></h2>
                    
                    <div class="flex precios3derecha">
                        <div class="grid grid-cols-2 rounded-2xl  border border-[#013250] w-auto">
                            <div class="flex flex-col border-r border-[#013250] px-4 py-2">
                                <p class="font-aceh text-[#014568] text-lg">Inicial</p>
                                <h2 class="font-aceh font-bold text-[#013250] text-2xl">S/2,000</h2>
                            </div>
                            
                            <div class="flex flex-col px-4 py-2">
                                <p class="font-aceh  text-[#014568] text-lg">Cuotas desde</p>
                                <h2 class="font-aceh font-bold text-[#013250] text-2xl leading-5 sm:!leading-normal">S/373 <span class="text-[#014568] font-normal text-lg">mensuales</span></h2>
                            </div>
                        </div>
                    </div>

                    <p class="font-aceh text-[#014568] text-lg 2xl:text-xl precios3derecha">
                        Equilibrio perfecto entre ciudad y naturaleza. 
                        Vive rodeado de áreas verdes con una inversión inteligente 
                        en una zona en crecimiento.
                    </p>

                    <ul class="font-aceh text-[#014568] text-lg 2xl:text-xl precios3derecha">
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Tu inversión dentro del casco urbano</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Seguridad y tranquilidad aseguradas</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> A 10 minutos del Mega Plaza Pisco y de Plaza Vea</li>
                        <li class="flex flex-row items-center gap-2"><i class="fa-solid fa-square-check text-[#00BE00] text-[22px]"></i> Financiamiento sin bancos</li>
                    </ul>

                    <div id="masinfocanete" class="precios3derecha text-white cursor-pointer text-center hidden lg:flex text-lg px-6 py-3 font-aceh rounded-xl bg-gradient-to-r from-[#004469] to-[#61C0E0] flex-row gap-2 justify-center">
                        Descubre más
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                            <rect x="0.5" width="24" height="24" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_2002_48)">
                            <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                            </g>
                        </svg>
                    </div>

                    <div id="masinfocanete2" class="precios3derecha text-white cursor-pointer text-center flex lg:hidden text-lg px-6 py-3 font-aceh rounded-xl bg-gradient-to-r from-[#004469] to-[#61C0E0] flex-row gap-2 justify-center">
                        Descubre más
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                            <rect x="0.5" width="24" height="24" fill="white"/>
                            </mask>
                            <g mask="url(#mask0_2002_48)">
                            <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="px-[5%]" style="background-image: url({{ asset('images/img/textura_final.png') }})">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 lg:gap-10 pb-10 lg:pb-0" >
                <div class="lg:col-span-7 flex flex-col justify-start pt-10 pb-4 lg:py-10 gap-3 lg:gap-8">
                    <h2 class="text-white text-left font-tt_hoves_bold uppercase text-3xl sm:text-4xl xl:text-5xl 2xl:text-6xl !leading-tight tracking-wide" data-aos="fade-down">
                        <span class="text-[#E0DE1D]">Historias</span> de quienes ya eligieron su terreno en Cañete
                    </h2>
                    <div>
                        <div class="swiper testimonios flex flex-row w-full">
                           <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="grid grid-cols-1 2xl:max-w-2xl">
                                        <div class="flex flex-col justify-center items-center">
                                          <div class="w-full h-[380px] rounded-xl overflow-hidden relative bg-cover bg-center" style="background-image: url('https://i.ytimg.com/vi/ywwtO7MZUzk/hq720.jpg');">
                                            <div class="absolute inset-0 flex items-center justify-center disparo bg-opacity-50 cursor-pointer" onclick="showVideo(this)">
                                              <button class="text-white text-2xl"><img class="w-16 hover:animate-jump hover:animate-once hover:animate-duration-1000" src="{{ asset('images/img/iconof.png') }}" /></button>
                                            </div>
                                            <iframe id="videoIframe" class="videoIframe w-full h-full hidden" src="https://www.youtube.com/embed/ywwtO7MZUzk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid grid-cols-1 2xl:max-w-2xl">
                                        <div class="flex flex-col justify-center items-center">
                                          <div class="w-full h-[380px] rounded-xl overflow-hidden relative bg-cover bg-center" style="background-image: url('https://i.ytimg.com/vi/RTyeApYGYtk/hq720.jpg');">
                                            <div class="absolute inset-0 flex items-center justify-center disparo bg-opacity-50 cursor-pointer" onclick="showVideo(this)">
                                              <button class="text-white text-2xl"><img class="w-16 hover:animate-jump hover:animate-once hover:animate-duration-1000" src="{{ asset('images/img/iconof.png') }}" /></button>
                                            </div>
                                            <iframe id="videoIframe" class="videoIframe w-full h-full hidden" src="https://www.youtube.com/embed/RTyeApYGYtk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid grid-cols-1 2xl:max-w-2xl">
                                        <div class="flex flex-col justify-center items-center">
                                          <div class="w-full h-[380px] rounded-xl overflow-hidden relative bg-cover bg-center" style="background-image: url('https://i.ytimg.com/vi/6V8qnZWqFFc/hq720.jpg');">
                                            <div class="absolute inset-0 flex items-center justify-center disparo bg-opacity-50 cursor-pointer" onclick="showVideo(this)">
                                              <button class="text-white text-2xl"><img class="w-16 hover:animate-jump hover:animate-once hover:animate-duration-1000" src="{{ asset('images/img/iconof.png') }}" /></button>
                                            </div>
                                            <iframe id="videoIframe" class="videoIframe w-full h-full hidden" src="https://www.youtube.com/embed/6V8qnZWqFFc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="grid grid-cols-1 2xl:max-w-2xl">
                                        <div class="flex flex-col justify-center items-center">
                                          <div class="w-full h-[380px] rounded-xl overflow-hidden relative bg-cover bg-center" style="background-image: url('https://i.ytimg.com/vi/603k7mautZk/hq720.jpg');">
                                            <div class="absolute inset-0 flex items-center justify-center disparo bg-opacity-50 cursor-pointer" onclick="showVideo(this)">
                                              <button class="text-white text-2xl"><img class="w-16 hover:animate-jump hover:animate-once hover:animate-duration-1000" src="{{ asset('images/img/iconof.png') }}" /></button>
                                            </div>
                                            <iframe id="videoIframe" class="videoIframe w-full h-full hidden" src="https://www.youtube.com/embed/603k7mautZk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                            <div class="swiper-pagination-testimonios !flex justify-start py-3 mt-3"></div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 flex flex-col justify-end">
                    <img class="imagentestimonio w-full h-[300px] sm:h-[400px] lg:h-[600px] 2xl:h-[650px] object-contain object-end" src="{{ asset('images/img/varon_testimonio.png') }}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                </div>
                <div class="-mt-5 lg:col-span-5 grid lg:hidden lg:grid-cols-1 gap-2 xl:gap-4 z-20 min-w-[300px] w-full">
                    <div id="form2" class="bg-[#FDFDFD] p-6 rounded-2xl flex flex-col gap-4">
                        <form class="flex flex-col gap-4 xl:gap-4" id="formContactos2">
                          @csrf
                            <div class="relative">
                                <input type="text" name="full_name" id="full_name2" placeholder=" " 
                                    class="peer border-[#F9D1AF] focus:border-[#EB6C2D] focus:ring-0 font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                <label for="full_name2" class="text-[#013250] absolute left-2 top-2 peer-focus:-top-3 peer-[:not(:placeholder-shown)]:-top-3 transition-all peer-focus:text-sm peer-[:not(:placeholder-shown)]:text-sm peer-focus:bg-white peer-[:not(:placeholder-shown)]:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1 font-aceh 2xl:text-xl peer-focus:2xl:text-lg peer-[:not(:placeholder-shown)]:2xl:text-lg">Nombres y Apellidos</label>
                            </div>
                            
                            <div class="relative">
                                    <select type="text" name="project" id="proyecto2" placeholder=" " 
                                        class="customselect peer border-[#F9D1AF] focus:border-[#EB6C2D] focus:ring-0 font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                        <option value="Proyecto Paracas">Proyecto Paracas</option>
                                        <option value="Proyecto Villa Vista">Proyecto Villa Vista</option>
                                        <option value="Proyecto Cañete">Proyecto Cañete</option>
                                    </select>
                            </div>
                            
                            <div class="flex flex-row">
                                <select class="js-phone-select !max-w-[100px]" name="code_country">
                                    @foreach($paises as $pais)
                                        <option value="{{ $pais['iso2'] }}" 
                                                data-phone-code="+{{ $pais['phoneCode'] }}">
                                            {{ $pais['nameES'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="relative w-full">
                                    <input type="text" name="phone" id="phone2" placeholder=" " 
                                        class="peer border-[#F9D1AF] focus:border-[#EB6C2D] focus:ring-0 font-aceh w-full py-2 px-3 rounded-lg rounded-l-none border-l-transparent text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <label for="phone2" class="text-[#013250] absolute left-2 top-2 peer-focus:-top-3 peer-[:not(:placeholder-shown)]:-top-3 transition-all peer-focus:text-sm peer-[:not(:placeholder-shown)]:text-sm peer-focus:bg-white peer-[:not(:placeholder-shown)]:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1 font-aceh 2xl:text-xl peer-focus:2xl:text-lg peer-[:not(:placeholder-shown)]:2xl:text-lg">Telefono</label>
                                </div>
                            </div>

                            <div class="grid grid-cols-4 gap-3">
                                <label for="message" class="col-span-4 -mb-2 text-[#013250] font-aceh text-base 2xl:text-xl">¿Cuenta con una inicial?<span class="text-[#EB6C2D]">*</span></label>

                                <div class="col-span-2 flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <input id="input1" type="radio" name="amount" value="no" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                    <label for="input1">No</label>
                                </div>

                                <div class="col-span-2 flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <input id="input2" type="radio" name="amount" value="1480" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                    <label for="input2">S/1,480</label>
                                </div>

                                <div class="col-span-2 flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <input id="input3" type="radio" name="amount" value="2000" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                    <label for="input3">S/2,000</label>
                                </div>

                                <div class="col-span-2 flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <input id="input4" type="radio" name="amount" value="2400" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                    <label for="input4">S/2,400</label>
                                </div>
                            </div>

                            <div class="grid grid-cols-4 gap-3">
                                <label for="message" class="col-span-4 -mb-2 text-[#013250] font-aceh text-base 2xl:text-xl">La cuota mensual que puedo pagar es de<span class="text-[#EB6C2D]">*</span></label>

                                <div class="col-span-2 flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <input id="inputcuota1" type="radio" name="quote" value="300" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                    <label for="inputcuota1">S/300</label>
                                </div>

                                <div class="col-span-2 flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <input id="inputcuota2" type="radio" name="quote" value="400" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                    <label for="inputcuota2">S/400</label>
                                </div>

                                <div class="col-span-2 flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <input id="inputcuota3" type="radio" name="quote" value="500" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                    <label for="inputcuota3">S/500</label>
                                </div>

                                <div class="col-span-2 flex flex-row gap-2 items-center justify-center relative border border-[#F9D1AF] hover:border-[#EB6C2D] font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                    <input id="inputcuota4" type="radio" name="quote" value="600" class="text-[#EB6C2D] border-[#F9D1AF] focus:ring-0 focus:ring-transparent focus:border-[#EB6C2D]">
                                    <label for="inputcuota4">S/600</label>
                                </div>
                            </div>
                            
                            <div class="relative mt-3">
                                <input type="date" name="date_buy" id="date_buy2" placeholder=" " 
                                    class="peer border-[#F9D1AF] focus:border-[#EB6C2D] focus:ring-0 font-aceh w-full py-2 px-3 rounded-lg text-base 2xl:text-xl text-[#013250] bg-[#FDFDFD]">
                                <label for="date_buy2" class="text-[#013250] absolute left-2 top-2 peer-focus:-top-3 peer-[:not(:placeholder-shown)]:-top-3 transition-all peer-focus:text-sm peer-[:not(:placeholder-shown)]:text-sm peer-focus:bg-white peer-[:not(:placeholder-shown)]:bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1 font-aceh 2xl:text-xl peer-focus:2xl:text-lg peer-[:not(:placeholder-shown)]:2xl:text-lg">¿Tienes una fecha aproximada de compra?</label>
                            </div>
                            

                            
                            {{-- <input type="email" name="email" 
                              placeholder="Correo Electrónico"
                              class="border-green-500 border-0 focus:!border-0 focus:!ring-0 focus:!ring-transparent
                              placeholder:text-[#AAC3E6] text-[#97adcb] font-Montserrat_Regular w-full py-3 px-2 rounded-3xl text-base 2xl:text-xl  placeholder-opacity-25 font-light  bg-white"> --}}
                
                      
                          <input type="hidden" name="client_width" id="anchodispositivo">
                          <input type="hidden" name="client_height" id="largodispositivo">
                          <input type="hidden" name="client_latitude" id="latitud">
                          <input type="hidden" name="client_longitude" id="longitud">
                          <input type="hidden" name="client_system" id="sistema">
                          <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Inicio" />
                             
                           <button type="submit" class="w-full text-white text-center text-lg px-6 py-3 font-aceh rounded-xl bg-gradient-to-r from-[#EB6C2D] to-[#F4B17D] flex flex-row gap-2 justify-center">
                                Enviar formulario
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                                    <rect x="0.5" width="24" height="24" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_2002_48)">
                                    <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                                    </g>
                                </svg>
                            </button>

                            <p class="col-span-4 -mb-2 text-[#013250] font-aceh text-base 2xl:text-xl">Al enviar el formulario estoy aceptando<span class="text-[#EB6C2D]"><a id="linkTerminos2" class="underline"> Términos y Condiciones</a> y <a id="linkPoliticasDatos2" class="underline">Políticas de privacidad</a></span></p>

                        </form>

                    </div>
                </div>
            </div>
        </section>


        {{-- @if ($testimonie->count() > 0)
            <section class="bg-center bg-cover" style="background-image: url({{ asset('images/img/textura_testimonios.png') }})">
                <div data-aos="fade-down" class="grid grid-cols-1 md:grid-cols-2 w-full gap-12 px-[5%]">
        
                <div class="flex flex-col justify-end items-center px-0 lg:px-[5%] order-2 md:order-1">
                    <div class="w-full max-h-[560px] 2xl:max-h-[1000px] flex flex-col justify-end -mt-20  2xl:mt-0">
                        <img class="w-full h-full object-contain object-bottom"  src="{{ asset('images/img/testimonios_AP.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                    </div>
                </div>
        
                <div class="flex flex-col justify-center gap-5 text-textWhite lg:pr-[5%] py-10 xl:py-12 order-1 md:order-2">
                    <h1 class="tracking-tighter text-2xl  lg:text-4xl 2xl:text-5xl font-Montserrat_Bold font-bold text-[#09262A] leading-none">
                        Lo que dicen las familias
                    </h1>
                    <div class="w-full">
                        <div class="swiper testimonios">
                            <div class="swiper-wrapper">
                                @foreach ($testimonie as $testimony)
                                    <div class="swiper-slide">
                                        <div class="bg-[#FFFFFF] relative p-5 lg:p-8 gap-3 flex flex-col rounded-xl h-auto">
                                            <div>
                                                <p class="text-[#1B4146] text-base lg:text-[17px] 2xl:text-xl font-Montserrat_Regular">
                                                    {{$testimony->testimonie}}
                                                </p>
                                            </div>
                                            <div class="flex flex-row gap-3 items-center">
                                                <img class="w-12 h-12 rounded-full object-contain"  src="{{ asset($testimony->ocupation)}}" />
                                                <div class="flex flex-col gap-0">
                                                    <h3 class="text-[#09262A] font-Montserrat_SemiBold leading-none">{{$testimony->name}}</h3>
                                                    <span class="text-[#1B4146] text-sm font-Montserrat_Regular leading-none">{{$testimony->email}}</span>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="flex flex-row justify-start ml-10">
                                <div class="swiper-testimonios !flex justify-center py-3 mt-3 "></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-2 justify-center items-end">
                        <h2 class="text-[#1B4146] text-base xl:text-lg 2xl:text-xl font-Montserrat_Regular">
                            Haz tu consulta
                        </h2>
                        <p class="text-[#1B4146] text-base xl:text-lg 2xl:text-xl font-Montserrat_Bold">
                            (+51) 945 064 691
                        </p>
                    </div>
                </div>

                </div>
            </section>    
        @endif     --}}

    </main>


@section('scripts_importados')
    <script>
        const servicios = document.querySelectorAll('.grilla .servicio');

        // Añade event listeners para el hover
        servicios.forEach(servicio => {
            servicio.addEventListener('mouseenter', () => {
                servicio.style.transform = 'scale(1.05)'; // Aplica el zoom
                servicio.style.transition = 'transform 0.3s ease'; // Suaviza la transición
            });

            servicio.addEventListener('mouseleave', () => {
                servicio.style.transform = 'scale(1)'; // Vuelve al tamaño original
            });
        });
    </script>

    <script>
        document.getElementById('paracaspr').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#paracasllegada', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('vellavistapr').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#villallegada', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('canetepr').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#canetellegada', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('paracaspr2').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#paracasllegada', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('villavistapr2').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#villallegada', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('cenetepr2').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#canetellegada', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('iraform').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#form1', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('iraform2').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#form2', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('masinfoparacas').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#form1', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('masinfoparacas2').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#form2', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('masinfovilla').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#form1', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('masinfovilla2').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#form2', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('masinfocanete').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#form1', 800); // 800ms de duración del desplazamiento
        });

        document.getElementById('masinfocanete2').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace
            smoothScroll('#form2', 800); // 800ms de duración del desplazamiento
        });

        // Función para desplazamiento suave
        function smoothScroll(target, duration) {
            const targetElement = document.querySelector(target);
            const targetPosition = targetElement.getBoundingClientRect().top;
            const startPosition = window.pageYOffset;
            let startTime = null;

            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const run = easeInOutQuad(timeElapsed, startPosition, targetPosition, duration);
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animation);
            }

            // Función de easing para suavizar el desplazamiento
            function easeInOutQuad(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }

            requestAnimationFrame(animation);
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    
        const whatsappNumber = {{ $general[0]->whatsapp }};
        const servicios = document.querySelectorAll(".servicio");
   
                servicios.forEach((servicio) => {
                    
                    const nombreServicio = servicio.querySelector(".nombreServicio").textContent;
                    const mensaje = encodeURIComponent(`Estoy interesad@ en el servicio de tratamiento: *${nombreServicio}*`);
                    const whatsappLink = `https://wa.me/${whatsappNumber}?text=${mensaje}`;
                    const botonAgendar = servicio.querySelector("a");
                    botonAgendar.setAttribute("href", whatsappLink);
                });
        });
    </script>

    <script>   
        $('#modalformcotizar').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();

            if (!validarTelefono($('#phone').val())) {
                return;
            };

            Swal.fire({

                title: 'Procesando información',
                html: `Enviando...
                    <p class=" text-text12">Revise su correo de Span</p>
                            <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
                                <div role="status">
                                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                    </svg>
                                    
                                </div>
                                
                            </div>

            `,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

           
            $.ajax({
                url: '{{ route('cotizar') }}',
                method: 'POST',
                data: formDataArray,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').val() // Incluye el token CSRF
                },
                success: function(response) {
                
                    Swal.close();

                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });

                    $('#modalformcotizar')[0].reset();
                },
                error: function(error) {
                    Swal.close();
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: "Ha ocurrido un error",
                                icon: "warning",
                            });
                            flag = true; 
                        }
                    });
                }
            });
        })
    </script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-cotizar', function () {
                const id = $(this).data('id');

                $.ajax({
                    url: '{{ route('obtenerdata') }}',
                    method: 'POST',
                    data: {
                        id: id, 
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        $('#nombreplan').text(response.producto.producto);
                        $('#caracteristicas').text(response.producto.extract);
                        $('#name').val(response.producto.producto);
                        $('#extract').val(response.producto.extract);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });


                $(`#modalcotizar`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });

            $(document).on('click', '.botoncanales', function () {
                const id = $(this).data('id');
                $(`#modaldetalleplan-${id}`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.swiper-slide .flex');
            const mainImage = document.getElementById('imagen-zona');

            items.forEach(item => {
                item.addEventListener('click', function () {
                    const newImageSrc = this.getAttribute('data-image');
                    
                    // Aplicar efecto fade-out
                    mainImage.style.opacity = 0;

                    // Cambiar la imagen después del fade-out
                    setTimeout(() => {
                        mainImage.src = newImageSrc;

                        // Aplicar efecto fade-in
                        mainImage.style.opacity = 1;
                    }, 300); // Coincide con la duración de la transición CSS
                });
            });
        });

        var swiper = new Swiper(".slider", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
            },
            pagination: {
                el: ".slider-pagination",
                clickable: true,
            },
        });



        var swiper = new Swiper(".ofertas", {
            slidesPerView: 2.2,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 1.2,

                  
                },
                850: {
                    slidesPerView: 1.3,

                  
                },
                920: {
                    slidesPerView: 1.4,

                  
                },
                1024: {
                    slidesPerView: 1.6,
                  
                },
                1280: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1300: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1500: {
                    slidesPerView: 2.4,
                    spaceBetween: 20,
                  
                },
                1600: {
                    slidesPerView: 2.9,
                    spaceBetween: 20,
                  
                },
            },
        });

        var swiper = new Swiper(".servicios", {
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
            },
            pagination: {
                    el: ".swiper-servicios",
                    clickable: true,
                    dynamicBullets: true,
            },
        });

        var swiper = new Swiper(".lugares", {
            slidesPerView: 3,
            direction: 'vertical',
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
        });

        var swiper = new Swiper(".slider_blog", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            grabCursor: true,
            loop: true,
             autoplay: {
                delay: 2500, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                750: {
                    slidesPerView: 2,
                   
                },
                1250: {
                    slidesPerView: 3,
                   
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });

        var swiper = new Swiper(".categorias", {
            slidesPerView: 4,
            spaceBetween: 15,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 2,
                  
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1500: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });


        var swiper = new Swiper(".beneficios", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2000, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                600: {
                    slidesPerView: 2,
                   
                },
                950: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
                1600: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });


        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            pagination: {
                el: ".swiper-pagination-testimonios",
                clickable: true,
            },
            breakpoints: {
                0: {
                slidesPerView: 1,
                spaceBetween: 10,
                },
                768: {
                slidesPerView: 1,
                spaceBetween: 10,
                },
                1024: {
                slidesPerView: 1,
                spaceBetween: 10,

                },
            },
            on: {
                slideChange: function() {
                    // Detener el video cuando se desliza a otro slide
                    let iframes = document.querySelectorAll('.videoIframe');
                    iframes.forEach(iframe => {
                        let src = iframe.src;
                        iframe.src = src.replace("?autoplay=1", ""); // Remueve el autoplay
                        iframe.classList.add('hidden');
                    });
                    // Mostrar los botones de play
                    let playButtons = document.querySelectorAll('.disparo');
                    playButtons.forEach(button => {
                        button.style.display = 'flex';
                    });
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.customselect').select2();
            
        });
        $.fn.select2.defaults.set('language', 'es');
        function showVideo(element) {
        const slide = element.closest('.swiper-slide');
        const videoIframe = slide.querySelector('.videoIframe');
        videoIframe.classList.remove('hidden');
        videoIframe.src += "?autoplay=1";
        element.style.display = 'none';
        }
    </script>

    <script>
        // Obtener información del navegador y del sistema operativo
        const platform = navigator.platform;
        document.getElementById('sistema').value = platform;

        // Obtener la geolocalización del usuario (si se permite)
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('latitud').value = position.coords.latitude;
                document.getElementById('longitud').value = position.coords.longitude;
            });
        }

        // Obtener la página de referencia
        const referrer = document.referrer;
        document.getElementById('llegade').value = referrer;


        // Obtener la resolución de la pantalla
        const screenWidth = window.screen.width;
        const screenHeight = window.screen.height;
        document.getElementById('anchodispositivo').value = screenWidth;
        document.getElementById('largodispositivo').value = screenHeight;
    </script>
    <script>
            function formatState(state) {
                if (!state.id) return state.text;
                
                // CDN de banderas (flag-icon-css)
                const baseUrl = "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/4x3";
                const phoneCode = $(state.element).data('phone-code') || '';
                const countryName = state.text || '';
                
                return $(
                    `<span class="flex flex-row font-aceh">
                        <img src="${baseUrl}/${state.id.toLowerCase()}.svg" 
                            class="img-flag w-5 mr-2 object-contain" 
                            alt="${countryName}" 
                            onerror="this.src='https://via.placeholder.com/20x15?text=flag'"/>
                        <span class="text-base">${phoneCode}</span>
                    </span>`
                );
            }

            // Inicialización mejorada de Select2
            function initCountrySelect() {
                const $select = $(".js-phone-select");
                
                $select.select2({
                    templateResult: formatState,
                    templateSelection: formatState,
                    placeholder: "Selecciona un país",
                    width: '100%',
                    dropdownAutoWidth: true,
                    escapeMarkup: function(m) { return m; },
                    language: {
                        noResults: function() {
                            return "No se encontraron países";
                        }
                    }
                });

                // Auto-seleccionar país local
                detectLocalCountry().then(countryCode => {
                    if (countryCode && $select.find(`option[value="${countryCode}"]`).length) {
                        $select.val(countryCode).trigger('change');
                    }
                });
            }

            // Función para detectar país local (versión mejorada)
            async function detectLocalCountry() {
                try {
                    // 1. Primero intentar con API IP simple
                    const ipResponse = await fetch('https://ipapi.co/json/');
                    if (ipResponse.ok) {
                        const { country_code } = await ipResponse.json();
                        if (country_code) return country_code;
                    }
                    
                    // 2. Fallback a geolocalización del navegador
                    if (navigator.geolocation) {
                        const position = await new Promise((res, rej) => 
                            navigator.geolocation.getCurrentPosition(res, rej));
                        const geoResponse = await fetch(
                            `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${position.coords.latitude}&longitude=${position.coords.longitude}&localityLanguage=es`
                        );
                        const { countryCode } = await geoResponse.json();
                        return countryCode;
                    }
                    
                    // 3. Fallback a idioma del navegador
                    const lang = navigator.language || navigator.userLanguage || 'es-PE';
                    return lang.includes('es') ? 'PE' : 'US';

                } catch (error) {
                    console.error('Error detecting country:', error);
                    return 'PE'; // Valor por defecto (Peru)
                }
            }

            // Inicializar cuando el DOM esté listo
            $(document).ready(function() {
                initCountrySelect();
                
                // Opcional: Actualizar campo de teléfono al cambiar país
                $('.js-phone-select').on('change', function() {
                    const phoneCode = $(this).find(':selected').data('phone-code') || '';
                    $('#phone_number').val(phoneCode ? `${phoneCode} ` : '').focus();
                });
            });

    </script>

    <script>
        // Registrar el plugin ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);
        // Esperar a que el DOM esté listo
        document.addEventListener("DOMContentLoaded", () => {
        // Seleccionar todas las palabras
        const words = document.querySelectorAll("#animated-text .word");
        const words_second = document.querySelectorAll("#animated-second-text .word");
        const words_third = document.querySelectorAll("#animated-third-text .word");
        const words_four = document.querySelectorAll("#animated-four-text .word");
        // Animación palabra por palabra
        gsap.to(words, {
            opacity: 1,
            x: 0, // Posición final (0 = sin desplazamiento)
            stagger: 0.1, // Retraso entre cada palabra (0.1s)
            duration: 0.5, // Duración de cada animación
            ease: "power2.out", // Efecto de aceleración
            scrollTrigger: {
            trigger: "#animated-text", // Elemento que activa la animación
            start: "top 80%", // Cuando el 80% del elemento esté visible
            toggleActions: "play restart restart reset", // Solo se reproduce una vez
            },
            // Posición inicial (fuera de la pantalla a la izquierda)
            x: -20, 
        });

        gsap.to(words_second, {
            opacity: 1,
            x: 0, // Posición final (0 = sin desplazamiento)
            stagger: 0.1, // Retraso entre cada palabra (0.1s)
            duration: 0.5, // Duración de cada animación
            ease: "power2.out", // Efecto de aceleración
            scrollTrigger: {
            trigger: "#animated-second-text", // Elemento que activa la animación
            start: "top 80%", // Cuando el 80% del elemento esté visible
            toggleActions: "play restart restart reset", // Solo se reproduce una vez
            },
            // Posición inicial (fuera de la pantalla a la izquierda)
            x: 20, 
        });

        gsap.to(words_third, {
            opacity: 1,
            x: 0, // Posición final (0 = sin desplazamiento)
            stagger: 0.1, // Retraso entre cada palabra (0.1s)
            duration: 0.5, // Duración de cada animación
            ease: "power2.out", // Efecto de aceleración
            scrollTrigger: {
            trigger: "#animated-third-text", // Elemento que activa la animación
            start: "top 80%", // Cuando el 80% del elemento esté visible
            toggleActions: "play restart restart reset", // Solo se reproduce una vez
            },
            // Posición inicial (fuera de la pantalla a la izquierda)
            x: 20, 
        });

        gsap.to(words_four, {
            opacity: 1,
            x: 0, // Posición final (0 = sin desplazamiento)
            stagger: 0.1, // Retraso entre cada palabra (0.1s)
            duration: 0.5, // Duración de cada animación
            ease: "power2.out", // Efecto de aceleración
            scrollTrigger: {
            trigger: "#animated-four-text", // Elemento que activa la animación
            start: "top 80%", // Cuando el 80% del elemento esté visible
            toggleActions: "play restart restart reset", // Solo se reproduce una vez
            },
            // Posición inicial (fuera de la pantalla a la izquierda)
            x: 20, 
        });

        gsap.from(".imagenportada", {
            x: -200, // Comienza 200px a la izquierda
            scale: 0.8, // Zoom inicial (80% del tamaño)
            opacity: 0, // Empieza invisible
            duration: 1.5,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".imagenportada", // Elemento que activa la animación
                start: "top 80%", // Cuando el 80% del contenedor entre en la vista
                toggleActions: "play restart restart reset", // Solo se reproduce una vez
                markers: false // Cambia a true para ver el punto de activación (debug)
            }
        });

        gsap.from(".formulariocontacto", {
            x: 200, // Comienza 200px a la izquierda
            scale: 0.8, // Zoom inicial (80% del tamaño)
            opacity: 0, // Empieza invisible
            duration: 1.5,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".formulariocontacto", // Elemento que activa la animación
                start: "top 80%", // Cuando el 80% del contenedor entre en la vista
                toggleActions: "play restart restart reset", // Solo se reproduce una vez
                markers: false // Cambia a true para ver el punto de activación (debug)
            }
        });

        gsap.from(".precios1derecha", {
            y: 100, // Comienza 200px a la izquierda
            scale: 0.8, // Zoom inicial (80% del tamaño)
            opacity: 0, // Empieza invisible
            duration: 1.5,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".precios1derecha", // Elemento que activa la animación
                start: "top 80%", // Cuando el 80% del contenedor entre en la vista
                toggleActions: "play restart restart reset", // Solo se reproduce una vez
                markers: false // Cambia a true para ver el punto de activación (debug)
            }
        });

        gsap.from(".precios2izquierda", {
            y: 100, // Comienza 200px a la izquierda
            scale: 0.8, // Zoom inicial (80% del tamaño)
            opacity: 0, // Empieza invisible
            duration: 1.5,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".precios2izquierda", // Elemento que activa la animación
                start: "top 80%", // Cuando el 80% del contenedor entre en la vista
                toggleActions: "play restart restart reset", // Solo se reproduce una vez
                markers: false // Cambia a true para ver el punto de activación (debug)
            }
        });

        gsap.from(".precios3derecha", {
            y: 100, // Comienza 200px a la izquierda
            scale: 0.8, // Zoom inicial (80% del tamaño)
            opacity: 0, // Empieza invisible
            duration: 1.5,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".precios3derecha", // Elemento que activa la animación
                start: "top 80%", // Cuando el 80% del contenedor entre en la vista
                toggleActions: "play restart restart reset", // Solo se reproduce una vez
                markers: false // Cambia a true para ver el punto de activación (debug)
            }
        });
       
        gsap.from(".imagentestimonio", {
            x: 30, // Comienza 200px a la izquierda
            scale: 1, // Zoom inicial (80% del tamaño)
            opacity: 0, // Empieza invisible
            duration: 1.5,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".imagentestimonio", // Elemento que activa la animación
                start: "top 80%", // Cuando el 80% del contenedor entre en la vista
                toggleActions: "play restart restart reset", // Solo se reproduce una vez
                markers: false // Cambia a true para ver el punto de activación (debug)
            }
        });


        });
    </script>
@stop

@stop
