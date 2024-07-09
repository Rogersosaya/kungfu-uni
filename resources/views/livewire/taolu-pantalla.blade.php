<div>
    @php
        $objetos = [(object) ['id' => 1, 'name' => 'Moderno'], (object) ['id' => 2, 'name' => 'Tradicional']];
    @endphp

    <x-selects :firsts="$objetos" :seconds="$performances" modelfirst="estilo" modelsecond="performance_id" title1="Estilos"
        title2="Actuaciones">
    </x-selects>
    <div class="grid grid-cols-12 mt-5">

        <div class="col-span-5 flex justify-center items-center">
            <div class="flex flex-col">
                <div class="text-8xl col-span-4 row-span-2 flex text-center   font-mono font-bold my-4 justify-center items-center ">

                    {{ optional($participant_current)->acronym }}
                </div>
                <div class="col-span-4 text-center flex-col">
                    <div class="h-72 flex justify-center my-6">
                        <img class="h-full" src="{{ optional($participant_current)->url }}" alt="">
                    </div>
                    <div class="font-bold text-2xl">{{ optional($participant_current)->name }}</div>

                </div>

            </div>
        </div>
        <div class="col-span-7">
            <div class="flex flex-col justify-between content-between h-full py-6">

                <div>
                    <div class="h-16 text-5xl font-bold mb-3">A) {{ $promedioPuntajeA }}</div>
                    <div class="h-16  text-5xl font-bold">B) {{ $promedioPuntajeB }}</div>
                </div>

                <div class="h-16  text-7xl font-bold">Puntuacion: {{ $total }}</div>
                

            </div>

        </div>

    </div>
</div>
