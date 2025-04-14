<x-app-layout title="Mostrar mensajes">
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div
            class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl">Enviado el
                    {{ $message->created_at->format('d-m-Y') }} por {{ $message->full_name }}</h2>
            </header>
            <div class="p-3">

                <div class="p-0 md:p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full bg-white border-collapse">
                            <tbody>
                                <!-- Fila 1 -->
                                <tr class="block md:table-row">
                                    <!-- Grupo 1 -->
                                    <td class="block md:table-cell border py-2 px-4 font-bold">Nombre completo:</td>
                                    <td class="block md:table-cell border py-2 px-4">{{ $message->full_name }}</td>
                                    
                                    <!-- Grupo 2 -->
                                    <td class="block md:table-cell border py-2 px-4 font-bold">Proyecto:</td>
                                    <td class="block md:table-cell border py-2 px-4">{{ $message->project }}</td>
                                    
                                    <!-- Grupo 3 -->
                                    <td class="block md:table-cell border py-2 px-4 font-bold">Teléfono:</td>
                                    <td class="block md:table-cell border py-2 px-4">{{ $message->phone }}</td>
                                </tr>
                                
                                <!-- Fila 2 -->
                                <tr class="block md:table-row">
                                    <!-- Grupo 1 -->
                                    <td class="block md:table-cell border py-2 px-4 font-bold">Monto:</td>
                                    <td class="block md:table-cell border py-2 px-4">{{ $message->amount }}</td>
                                    
                                    <!-- Grupo 2 -->
                                    <td class="block md:table-cell border py-2 px-4 font-bold">Cuota mensual:</td>
                                    <td class="block md:table-cell border py-2 px-4">{{ $message->quote }}</td>
                                    
                                    <!-- Grupo 3 -->
                                    <td class="block md:table-cell border py-2 px-4 font-bold">Fecha:</td>
                                    <td class="block md:table-cell border py-2 px-4">{{ $message->date_buy }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    

                    @if (count($message->answers) > 0)
                        <div class="mb-4">

                            <hr class="mb-2">
                            <span class="font-bold block mb-2">Respuestas</span>
                            @foreach ($message->answers as $answer)
                                <div
                                    class="block w-full py-2 px-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-2">

                                    <p class="font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $answer->subject }}</p>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">{!! $answer->content !!}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <form class="py-4" action="{{ route('replyMailing', $message->id) }}" method="POST">

                        <hr class="mb-2">
                        @csrf
                        <span class="font-bold block mb-2">Enviar una respuesta por correo</span>

                        <div class="md:col-span-5 mt-2">
                            <label for="subject">Asunto</label>
                            <div class="relative mb-2  mt-2">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="fa fa-pen"></i>
                                </div>
                                <input type="text" id="subject" name="subject" value=""
                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Asunto">
                            </div>
                        </div>

                        <div class="md:col-span-5">
                            <label for="content">Contenido</label>
                            <div class="relative mb-6 mt-2">
                                <textarea type="text" id="content" name="content"
                                    class="ckeditor mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Contenido"></textarea>
                            </div>
                        </div>

                        <button class="bg-green-500 px-4 py-2 rounded text-white" type="submit">
                            <i class="fa-solid fa-envelope mr-2"></i>
                            Responder
                        </button>

                        <a href="{{ route('mensajes.index') }}"
                            class="block bg-red-500 px-4 py-2 rounded text-white w-max float-end">
                            <i class="fa-solid fa-arrow-left mr-2"></i>
                            Volver
                        </a>
                        
                    </form>

                </div>
            </div>
        </div>

    </div>



</x-app-layout>

<script src="/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content', {
        toolbar: [{
                name: 'document',
                items: ['Source']
            }, // Código fuente
            {
                name: 'clipboard',
                items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo']
            },
            {
                name: 'styles',
                items: ['Styles', 'Format', 'FontSize']
            }, // Tamaño y fuente
            {
                name: 'colors',
                items: ['TextColor', 'BGColor']
            }, // Color de texto y fondo
            {
                name: 'basicstyles',
                items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']
            },
            {
                name: 'paragraph',
                items: ['NumberedList', 'BulletedList', '-', 'Blockquote']
            },
            {
                name: 'insert',
                items: ['Table', 'HorizontalRule']
            },
            {
                name: 'links',
                items: ['Link', 'Unlink']
            },
            {
                name: 'tools',
                items: ['Maximize']
            } // Maximizar
        ],
        extraPlugins: 'colorbutton,font', // Activa plugins para color y fuentes
        removePlugins: 'elementspath', // Elimina la ruta de elementos
        resize_enabled: true // Permite redimensionar el editor
    });
</script>
