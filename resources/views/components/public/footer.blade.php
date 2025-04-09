<footer class="bg-cover bg-top" style="background-image: url({{ asset('images/img/texturafe.png') }})">
    <style>
        #modalPoliticasDev #modalTerminosCondiciones #modallinkPoliticasDatos {
            height: 70vh;
            overflow-y: auto;
        }

        #modalPoliticasDev .prose,
        #modalTerminosCondiciones .prose,
        #modallinkPoliticasDatos .prose {
            max-width: 100%;
            text-align: justify;
        }

        .prose * {
            margin-bottom: 0% !important;
            margin-top: 0% !important;
        }
    </style>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-5 md:gap-10 md:justify-center w-full px-[5%] py-8 lg:py-16 ">

        <div class="lg:col-span-2 flex flex-col text-white text-base justify-start items-start gap-5">
            <img class="h-20 object-contain" src="{{ asset('images/svg/logoblancobaigorrea.svg') }}" />
            <p class="font-aceh text-lg leading-none">{{ $datosgenerales->aboutus }}</p>
            <div class="mt-3">
                <a id="iraform" class="hidden cursor-pointer lg:flex flex-row items-center gap-2 text-sm font-aceh !text-lg font-medium bg-[linear-gradient(90deg,#004469_-46.4%,#61C0E0_109.31%)] px-3 md:px-6 py-3.5 rounded-xl">
                    Enviar formulario
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                        <rect x="0.5" width="24" height="24" fill="white"/>
                        </mask>
                        <g mask="url(#mask0_2002_48)">
                        <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                        </g>
                    </svg>
                </a>
                <a id="iraform2" class="lg:hidden cursor-pointer flex flex-row items-center gap-2 text-sm font-aceh !text-lg font-medium bg-[linear-gradient(90deg,#004469_-46.4%,#61C0E0_109.31%)] px-3 md:px-6 py-3.5 rounded-xl">
                  Enviar formulario
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                      <mask id="mask0_2002_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                      <rect x="0.5" width="24" height="24" fill="white"/>
                      </mask>
                      <g mask="url(#mask0_2002_48)">
                      <path d="M16.675 13.001H4.5V11.001H16.675L11.075 5.40098L12.5 4.00098L20.5 12.001L12.5 20.001L11.075 18.601L16.675 13.001Z" fill="white"/>
                      </g>
                  </svg>
              </a>
            </div>
        </div>

        <div class="lg:col-span-1 xl:col-span-2 flex flex-col text-sm font-aceh text-white gap-2 pl-0 md:pl-[10%]">
        </div>

        <div class="flex flex-col text-lg font-aceh text-white gap-2">
            <h3 class="text-xl text-white font-aceh font-semibold tracking-wide pb-3">Enlaces Rápidos</h3>
            <a class="cursor-pointer" id="paracaspr2">Proyecto Paracas</a>
            <a class="cursor-pointer" id="villavistapr2">Proyecto Villa Vista</a>
            <a class="cursor-pointer" id="cenetepr2">Proyecto Cañete</a>
        </div>

        <div class="flex flex-col text-lg font-aceh text-white gap-2">
            <h3 class="text-xl text-white font-aceh font-semibold tracking-wide pb-3">Derechos y Legal</h3>
            <a id="linkTerminos">Términos y condiciones</a>
            <a id="linkPoliticasDatos">Políticas de privacidad</a>
        </div>

    </div>

    <div class="py-5 flex items-center justify-center w-11/12 mx-auto border-t">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-5 w-full">
          
          <div class="text-center">
            <p class="font-normal text-sm text-white font-aceh">
              Copyright &copy; 2023 {{ config('app.name') }}. Reservados todos los derechos. Powered by <a
                href="https://www.mundoweb.pe" target="_blank" class="text-white border-b border-white"> Mundo Web
              </a>
            </p>
          </div>
    
          <div class="flex flex-row gap-4 text-[#ccc]">
            @if ($datosgenerales->facebook)
              <a href="{{ $datosgenerales->facebook }}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM16 8C20.4 8 24 11.6 24 16C24 20 21.1 23.4 17.1 24V18.3H19L19.4 16H17.2V14.5C17.2 13.9 17.5 13.3 18.5 13.3H19.5V11.3C19.5 11.3 18.6 11.1 17.7 11.1C15.9 11.1 14.7 12.2 14.7 14.2V16H12.7V18.3H14.7V23.9C10.9 23.3 8 20 8 16C8 11.6 11.6 8 16 8Z" fill="white"/>
                </svg>
              </a>
            @endif
            @if ($datosgenerales->instagram)
              <a href="{{ $datosgenerales->instagram }}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="none">
                    <path d="M16 18.8C14.5 18.8 13.2 17.6 13.2 16C13.2 14.5 14.4 13.2 16 13.2C17.5 13.2 18.8 14.4 18.8 16C18.8 17.5 17.5 18.8 16 18.8Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4 9.2H12.6C11.8 9.3 11.4 9.4 11.1 9.5C10.7 9.6 10.4 9.8 10.1 10.1C9.86261 10.3374 9.75045 10.5748 9.61489 10.8617C9.57916 10.9373 9.5417 11.0166 9.5 11.1C9.48453 11.1464 9.46667 11.1952 9.44752 11.2475C9.34291 11.5333 9.2 11.9238 9.2 12.6V19.4C9.3 20.2 9.4 20.6 9.5 20.9C9.6 21.3 9.8 21.6 10.1 21.9C10.3374 22.1374 10.5748 22.2495 10.8617 22.3851C10.9374 22.4209 11.0165 22.4583 11.1 22.5C11.1464 22.5155 11.1952 22.5333 11.2475 22.5525C11.5333 22.6571 11.9238 22.8 12.6 22.8H19.4C20.2 22.7 20.6 22.6 20.9 22.5C21.3 22.4 21.6 22.2 21.9 21.9C22.1374 21.6626 22.2495 21.4252 22.3851 21.1383C22.4209 21.0626 22.4583 20.9835 22.5 20.9C22.5155 20.8536 22.5333 20.8048 22.5525 20.7525C22.6571 20.4667 22.8 20.0762 22.8 19.4V12.6C22.7 11.8 22.6 11.4 22.5 11.1C22.4 10.7 22.2 10.4 21.9 10.1C21.6626 9.86261 21.4252 9.75045 21.1383 9.61488C21.0627 9.57918 20.9833 9.54167 20.9 9.5C20.8536 9.48453 20.8048 9.46666 20.7525 9.44752C20.4667 9.3429 20.0762 9.2 19.4 9.2ZM16 11.7C13.6 11.7 11.7 13.6 11.7 16C11.7 18.4 13.6 20.3 16 20.3C18.4 20.3 20.3 18.4 20.3 16C20.3 13.6 18.4 11.7 16 11.7ZM21.4 11.6C21.4 12.1523 20.9523 12.6 20.4 12.6C19.8477 12.6 19.4 12.1523 19.4 11.6C19.4 11.0477 19.8477 10.6 20.4 10.6C20.9523 10.6 21.4 11.0477 21.4 11.6Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM12.6 7.7H19.4C20.3 7.8 20.9 7.9 21.4 8.1C22 8.4 22.4 8.6 22.9 9.1C23.4 9.6 23.7 10.1 23.9 10.6C24.1 11.1 24.3 11.7 24.3 12.6V19.4C24.2 20.3 24.1 20.9 23.9 21.4C23.6 22 23.4 22.4 22.9 22.9C22.4 23.4 21.9 23.7 21.4 23.9C20.9 24.1 20.3 24.3 19.4 24.3H12.6C11.7 24.2 11.1 24.1 10.6 23.9C10 23.6 9.6 23.4 9.1 22.9C8.6 22.4 8.3 21.9 8.1 21.4C7.9 20.9 7.7 20.3 7.7 19.4V12.6C7.8 11.7 7.9 11.1 8.1 10.6C8.4 10 8.6 9.6 9.1 9.1C9.6 8.6 10.1 8.3 10.6 8.1C11.1 7.9 11.7 7.7 12.6 7.7Z" fill="white"/>
                </svg>
              </a>
            @endif
            {{-- @if ($datosgenerales->linkedin)
              <a href="{{ $datosgenerales->linkedin }}">
                <img src="{{asset('images/svg/vt_linkedin.svg')}}" />
              </a>
            @endif --}}
            @if ($datosgenerales->tiktok)
              <a href="{{ $datosgenerales->tiktok }}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16345 0 0 7.16344 0 16C0 24.8366 7.16345 32 16 32C24.8365 32 32 24.8366 32 16C32 7.16344 24.8365 0 16 0ZM19.1182 8C19.1182 8.23775 19.1404 8.4719 19.1813 8.69851C19.3781 9.74606 19.998 10.645 20.8592 11.2059C21.4605 11.5997 22.1732 11.8263 22.9415 11.8263L22.9413 12.4393V14.5753C21.516 14.5753 20.1946 14.1184 19.1182 13.3457V18.9366C19.1182 21.7265 16.8466 24 14.0591 24C12.9827 24 11.9805 23.6581 11.1602 23.0824C9.85367 22.1648 9 20.6491 9 18.9366C9 16.143 11.2679 13.8732 14.0554 13.8769C14.2892 13.8769 14.5157 13.8955 14.7384 13.9252V14.5753L14.7302 14.5792L14.7383 14.579V16.7337C14.5231 16.6668 14.2929 16.6259 14.0554 16.6259C12.7823 16.6259 11.7467 17.6624 11.7467 18.9366C11.7467 19.8245 12.2515 20.5934 12.9864 20.9835C12.9933 20.9929 13.0002 21.0023 13.0072 21.0116L13.0195 21.0278C13.0111 21.0115 13.0013 20.9955 12.9901 20.9798C13.313 21.1507 13.6768 21.2473 14.0628 21.2473C15.3062 21.2473 16.3233 20.2554 16.3678 19.0221L16.3715 8H19.1182Z" fill="white"/>
                </svg>
              </a>
            @endif
            @if ($datosgenerales->twitter)
              <a href="{{ $datosgenerales->twitter }}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM22.1 11.5C22.8 11.4 23.4 11.3 24 11C23.6 11.7 23 12.3 22.3 12.7C22.5 17.4 19.1 22.5 13 22.5C11.2 22.5 9.5 21.9 8 21C9.7 21.2 11.5 20.7 12.7 19.8C11.2 19.8 10 18.8 9.6 17.5C10.1 17.6 10.6 17.5 11.1 17.4C9.6 17 8.5 15.6 8.5 14.1C9 14.3 9.5 14.5 10 14.5C8.6 13.5 8.1 11.6 9 10.1C10.7 12.1 13.1 13.4 15.8 13.5C15.3 11.5 16.9 9.5 19 9.5C19.9 9.5 20.8 9.9 21.4 10.5C22.2 10.3 22.9 10.1 23.5 9.7C23.3 10.5 22.8 11.1 22.1 11.5Z" fill="white"/>
                </svg>
              </a>
            @endif
            @if ($datosgenerales->youtube)
              <a href="{{ $datosgenerales->youtube }}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="none">
                    <path d="M18.6 16L14.4 13.6V18.4L18.6 16Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM22.2 10.7C22.9 10.9 23.4 11.4 23.6 12.1C24 13.4 24 16 24 16C24 16 24 18.6 23.7 19.9C23.5 20.6 23 21.1 22.3 21.3C21 21.6 16 21.6 16 21.6C16 21.6 10.9 21.6 9.7 21.3C9 21.1 8.5 20.6 8.3 19.9C8 18.6 8 16 8 16C8 16 8 13.4 8.2 12.1C8.4 11.4 8.90001 10.9 9.60001 10.7C10.9 10.4 15.9 10.4 15.9 10.4C15.9 10.4 21 10.4 22.2 10.7Z" fill="white"/>
                </svg>
              </a>
            @endif
          </div>
          
        </div>
    </div>

    <div id="modalTerminosCondiciones" class="modal" style="max-width: 900px !important;width: 100% !important;  ">
        <div class="p-4 ">
            <h1 class="font-tt_hoves_black text-center text-2xl">Términos y Condiciones</h1>
            <p class="font-aceh  prose grid grid-cols-1">{!! $terminos->content ?? '' !!}</p>
        </div>
    </div>

    <div id="modalPoliticasDev" class="modal" style="max-width: 900px !important; width: 100% !important;  ">
        <div class="p-4 ">
            <h1 class="font-tt_hoves_black text-center text-2xl">Políticas de devolucion</h1>
            <p class="font-aceh  prose grid grid-cols-1 ">{!! $politicas->content ?? '' !!}</p>
        </div>
    </div>

    <div id="modallinkPoliticasDatos" class="modal" style="max-width: 900px !important; width: 100% !important;  ">
        <div class="p-4 ">
            <h1 class="font-tt_hoves_black text-center text-2xl">Políticas de Privacidad</h1>
            <p class="font-aceh  prose grid grid-cols-1">{!! $politicaDatos->content ?? '' !!}</p>
        </div>
    </div>

</footer>

<script>
    $(document).ready(function() {
        $(document).on('click', '#linkTerminos', function() {
            $('#modalTerminosCondiciones').modal({
                show: true,
                fadeDuration: 400,
            })
        });

        $(document).on('click', '#linkPoliticasDatos', function() {
            $('#modallinkPoliticasDatos').modal({
                show: true,
                fadeDuration: 400,
            })
        });

        // $(document).on('click', '#linkTerminos2', function() {
        //     $('#modalTerminosCondiciones').modal({
        //         show: true,
        //         fadeDuration: 400,
        //     })
        // });
    });
</script>
