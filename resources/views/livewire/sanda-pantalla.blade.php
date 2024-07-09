<div>
    @php
        $rounds = [(object) ['id' => 1, 'name' => 'Round 1'], (object) ['id' => 2, 'name' => 'Round 2'], (object) ['id' => 3, 'name' => 'Round 3']];
    @endphp
    <x-selects :firsts="$rounds" :seconds="$performances" modelfirst="round_value" modelsecond="performance_id" title1="Rounds"
        title2="Actuaciones">
    </x-selects>


    <div class="grid grid-cols-12 mt-4">
        {{-- <div class="col-span-12 flex items-center justify-center text-3xl font-bold h-16">{{ optional($performance)->weight }}
        </div> --}}
        <div class="col-span-4 row-span-2 flex text-center text-8xl bg-red-600 text-white font-mono font-black justify-center items-center">
            <span >{{ optional($participant1_current)->acronym }}</span>
            
        </div>
        <div class="col-span-4  flex  justify-center text-3xl  h-auto font-black">{{ optional($performance)->weight }}</div>
        <div class=" col-span-4 row-span-2 flex text-center  text-8xl bg-blue-600 text-white font-mono font-black justify-center items-center ">
            {{ optional($participant2_current)->acronym }}
        </div>
        <div class="h-auto col-span-4 flex  justify-center text-3xl font-bold ">Round {{ $round_value }}</div>
        <div class="col-span-4 text-center flex-col">
            <div class="h-64 flex justify-center my-10">
                <img class="h-full" src="{{ optional($participant1_current)->url }}" alt="">
            </div>
            <div class="font-bold text-2xl">{{ optional($participant1_current)->name }}</div>

        </div>
        <div class="col-span-4 flex flex-col">

            @foreach ($jurados as $key => $jurado)
                <div class="flex justify-evenly">
                    <div class=" col-span-1   justify-center text-5xl bg-red-600 text-white w-16 text-center my-2 py-1 font-bold">
                        {{ $jurado['puntajeparticipante1'] }}</div>
                    <div class="col-span-2  justify-center text-5xl w-16 text-center my-2 py-1 font-bold">{{ $key + 1 }}</div>
                    <div class="col-span-1  justify-center text-5xl bg-blue-600 text-white w-16 text-center my-2 py-1 font-bold">
                        {{ $jurado['puntajeparticipante2'] }}</div>
                </div>
            @endforeach


        </div>
        <div class="col-span-4 text-center flex-col ">
            <div class="h-64 flex justify-center my-10">
                <img class="h-full " src="{{ optional($participant2_current)->url }}" alt="">
            </div>
            <div class="font-bold text-2xl">{{ optional($participant2_current)->name }}</div>
        </div>







    </div>


</div>
