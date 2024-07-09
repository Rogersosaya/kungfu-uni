<div>
    <x-selects :firsts="$judges" :seconds="$performances" modelfirst="judge_id" modelsecond="performance_id" title1="Jueces"
        title2="Actuaciones">
    </x-selects>

    <div class="grid grid-cols-2 my-6">
        <div class="col-span-2  flex justify-center items-center ">
            <div class="flex flex-col text-center text-3xl">
                <span class="font-bold">Puntaje: {{ $puntaje }}</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12">
        <div class="border  flex items center items-center justify-center col-span-6">NIVEL</div>
        <div class="border  flex items center items-center justify-center col-span-2">GRADO</div>
        <div class="border  flex items center items-center justify-center col-span-4">PUNTOS</div>
    </div>


    <div class="grid grid-cols-12 " wire:ignore>

        <div id="superior" class="row-span-3 border  flex items center items-center justify-center col-span-3">EXCELENTE
        </div>
        <div id="1" class="border   items center items-center justify-center col-span-5 grid grid-cols-5 ">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Alto</div>
            <div class="flex items center items-center justify-center col-span-2">1</div>

        </div>
        <div class="border  flex items center items-center justify-center col-span-4">
            <button data-grado="1" data-nivel="superior" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-1">9.50-10.00</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="9.50"
                max="10.00" step="0.01" placeholder="9.50-10.00" id="input-1"></x-input>
        </div>

        <div id="2" class="border   items center items-center justify-center col-span-5 grid grid-cols-5">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Medio</div>
            <div class="flex items center items-center justify-center col-span-2">2</div>
        </div>

        <div class="border  flex items center items-center justify-center col-span-4">
            <button data-nivel="superior" data-grado="2" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-2">9.00-9.49</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="9.00"
                max="9.49" step="0.01" placeholder="9.00-9.49" id="input-2"></x-input>
        </div>

        <div id="3" class="border   items center items-center justify-center col-span-5 grid grid-cols-5">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Bajo</div>
            <div class="flex items center items-center justify-center col-span-2">3</div>
        </div>
        <div class="border  flex items center items-center justify-center col-span-4">
            <button data-nivel="superior" data-grado="3" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-3">8.50-8.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="8.50"
                max="8.99" step="0.01" placeholder="8.50-8.99" id="input-3"></x-input>
        </div>
        <div id="medio" class="row-span-3 border  flex items center items-center justify-center col-span-3">BUENO
        </div>
        <div id="4" class="border   items center items-center justify-center col-span-5 grid grid-cols-5">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Alto</div>
            <div class="flex items center items-center justify-center col-span-2">4</div>
        </div>
        <div class="border  flex items center items-center justify-center col-span-4">
            <button data-nivel="medio" data-grado="4" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-4">8.00-8.49</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="8.00"
                max="8.49" step="0.01" placeholder="8.49-8.00" id="input-4"></x-input>
        </div>
        <div id="5" class="border   items center items-center justify-center col-span-5 grid grid-cols-5">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Medio</div>
            <div class="flex items center items-center justify-center col-span-2">5</div>
        </div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="medio" data-grado="5" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-5">7.50-7.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="7.50"
                max="7.99" step="0.01" placeholder="7.99-7.50" id="input-5"></x-input>
        </div>
        <div id="6" class=" border   items center items-center justify-center col-span-5 grid grid-cols-5">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Bajo</div>
            <div class="flex items center items-center justify-center col-span-2">6</div>
        </div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="medio" data-grado="6" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-6">7.00-7.49</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="7.00"
                max="7.49" step="0.01" placeholder="7.49-7.00" id="input-6"></x-input>
        </div>
        <div id="inferior" class="row-span-3 border  flex items center items-center justify-center col-span-3">
            INFERIOR</div>
        <div id="7" class=" border   items center items-center justify-center col-span-5 grid grid-cols-5">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Alto</div>
            <div class="flex items center items-center justify-center col-span-2">7</div>
        </div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="inferior" data-grado="7" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-7">6.50-6.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="6.50"
                max="6.99" step="0.01" placeholder="7.99-7.50" id="input-7"></x-input>
        </div>
        <div id="8" class=" border items center items-center justify-center col-span-5 grid grid-cols-5">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Medio</div>
            <div class="flex items center items-center justify-center col-span-2">8</div>
        </div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="inferior" data-grado="8" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-8">6.00-6.49</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="6.00"
                max="6.49" step="0.01" placeholder="6.49-6.00" id="input-8"></x-input>
        </div>
        <div id="9" class=" border items center items-center justify-center col-span-5 grid grid-cols-5">
            <div class="flex items center items-center justify-center border-r col-span-3 h-full">Bajo</div>
            <div class="flex items center items-center justify-center col-span-2">9</div>
        </div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="inferior" data-grado="9" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-9">5.00-5.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="5.00"
                max="5.99" step="0.01" placeholder="5.99-5.00" id="input-9"></x-input>
        </div>

    </div>

    <div class="grid grid-cols-2 mt-4">
        <div class="col-span-2 flex justify-center items-center">
            <button wire:click="$emit('confirmar')" wire:ignore class="btn btn-success" id="submit"
                disabled>Enviar
                Puntuacion</button>
        </div>
    </div>
    {{-- @push('js')
        <script>
            Livewire.on('confirmar', () => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás cambiar esto después de confirmar.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, asignar puntuación'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('taolu-moderno-juezb', 'saveScore')
                        Swal.fire(
                            'Puntuación asignada!',
                            'La puntuación ha sido registrada correctamente.',
                            'success'
                        )
                        $('button[name="boton"]').show();
                        $("#submit").prop("disabled", true);
                        $('.input').hide();
                        $('div[id^="superior"], div[id^="medio"], div[id^="inferior"], div[id^="1"], div[id^="2"], div[id^="3"], div[id^="4"], div[id^="5"], div[id^="6"], div[id^="7"], div[id^="8"], div[id^="9"]')
                            .css('background-color', '');
                    }

                })
            })
        </script>
        <script>
            $(document).ready(function() {


                // Maneja el clic en los botones
                $('button[name="boton"]').click(function() {
                    // Oculta todos los botones
                    $('button[name="boton"]').show();

                    // Oculta el botón actual
                    $(this).hide();
                    // Oculta todos los inputs
                    $('.input').hide();

                    // Muestra el input correspondiente
                    $('#' + $(this).data('toggle-input')).show();
                    var nivel = $(this).data('nivel');
                    var grado = $(this).data('grado');

                    // Restablece el color de fondo de todos los divs
                    $('div[id^="superior"], div[id^="medio"], div[id^="inferior"], div[id^="1"], div[id^="2"], div[id^="3"], div[id^="4"], div[id^="5"], div[id^="6"], div[id^="7"], div[id^="8"], div[id^="9"]')
                        .css('background-color', '');

                    // Establece el color de fondo para el div específico
                    $('#' + nivel).css('background-color', '#D6EAF8');
                    $('#' + grado).css('background-color', '#D6EAF8');
                });

                function updateSubmitButton() {
                    var select1Val = $("#select1").val();
                    var select2Val = $("#select2").val();

                    if (select1Val !== "" && select2Val !== "") {
                        $("#submit").prop("disabled", false);
                    } else {
                        $("#submit").prop("disabled", true);
                    }
                }

                $("#select1").change(function() {
                    updateSubmitButton();
                });

                $("#select2").change(function() {
                    updateSubmitButton();
                });
                $("#submit2").click(function() {

                    $("#submit").prop("disabled", true);

                });

            });
        </script>
    @endpush --}}
    {{-- <div class="grid grid-cols-12 " wire:ignore>
        
        <div id="superior" class="row-span-3 border  flex items center items-center justify-center col-span-3">EXCELENTE
        </div>
        <div class="col-span-3 border  flex items center items-center justify-center">Alto</div>
        <div id="1" class="border  flex items center items-center justify-center col-span-2">1</div>
        <div class="border  flex items center items-center justify-center col-span-4">
            <button data-grado="1" data-nivel="superior" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-1">4.81-5.00</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="4.81"
                max="5.00" step="0.01" placeholder="5.00-4.81" id="input-1"></x-input>
        </div>
        <div class="col-span-3 border  flex items center items-center justify-center">Medio</div>
        <div id="2" class="border  flex items center items-center justify-center col-span-2">2</div>

        <div class="border  flex items center items-center justify-center col-span-4">
            <button data-nivel="superior" data-grado="2" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-2">9.50-10.00</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="9.50"
                max="10.00" step="0.01" placeholder="10.00-9.50" id="input-2"></x-input>
        </div>
        <div class="col-span-3 border  flex items center items-center justify-center">Bajo</div>
        <div id="3" class="border  flex items center items-center justify-center col-span-2" >3</div>
        <div class="border  flex items center items-center justify-center col-span-4">
            <button data-nivel="superior" data-grado="3" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-3">8.50-8.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="8.50"
                max="8.99" step="0.01" placeholder="8.99-8.50" id="input-3"></x-input>
        </div>
        <div id="medio" class="row-span-3 border  flex items center items-center justify-center col-span-3">BUENO</div>
        <div class="col-span-3 border  flex items center items-center justify-center">Alto</div>
        <div id="4" class="border  flex items center items-center justify-center col-span-2">4</div>
        <div class="border  flex items center items-center justify-center col-span-4">
            <button data-nivel="medio" data-grado="4" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-4">8.00-8.49</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="8.00"
                max="8.49" step="0.01" placeholder="8.49-8.00" id="input-4"></x-input>
        </div>
        <div class="col-span-3 border  flex items center items-center justify-center">Medio</div>
        <div id="5" class="border  flex items center items-center justify-center col-span-2">5</div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="medio" data-grado="5" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-5">7.50-7.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="7.50"
                max="7.99" step="0.01" placeholder="7.99-7.50" id="input-5"></x-input>
        </div>
        <div class="col-span-3 border  flex items center items-center justify-center">Bajo</div>
        <div id="6" class=" border  flex items center items-center justify-center col-span-2">6</div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="medio" data-grado="6" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-6">7.00-7.49</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="7.00"
                max="7.49" step="0.01" placeholder="7.49-7.00" id="input-6"></x-input>
        </div>
        <div id="inferior" class="row-span-3 border  flex items center items-center justify-center col-span-3">INFERIOR</div>
        <div class="col-span-3 border  flex items center items-center justify-center">Alto</div>
        <div id="7" class=" border  flex items center items-center justify-center col-span-2">7</div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="inferior" data-grado="7" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-7">7.50-7.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="7.50"
                max="7.99" step="0.01" placeholder="7.99-7.50" id="input-7"></x-input>
        </div>
        <div class="col-span-3 border  flex items center items-center justify-center">Medio</div>
        <div id="8" class=" border  flex items center items-center justify-center col-span-2">8</div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="inferior" data-grado="8" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-8">6.00-6.49</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="6.00"
                max="6.49" step="0.01" placeholder="6.49-6.00" id="input-8"></x-input>
        </div>
        <div class="col-span-3 border  flex items center items-center justify-center">Bajo</div>
        <div id="9" class=" border  flex items center items-center justify-center col-span-2">9</div>
        <div class=" border  flex items center items-center justify-center col-span-4">
            <button data-nivel="inferior" data-grado="9" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-9">5.00-5.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="5.00"
                max="5.99" step="0.01" placeholder="5.99-5.00" id="input-9"></x-input>
        </div>

    </div> --}}



    {{-- <div class="grid grid-cols-2 mt-4">
        <div class="col-span-2 flex justify-center items-center">
            <button wire:click="$emit('confirmar')" wire:ignore class="btn btn-success" id="submit"
                disabled>Enviar
                Puntuacion</button>
        </div>
    </div>
    @push('js')
        <script>
            Livewire.on('confirmar', () => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás cambiar esto después de confirmar.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, asignar puntuación'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('taolu-moderno-juezb', 'saveScore')
                        Swal.fire(
                            'Puntuación asignada!',
                            'La puntuación ha sido registrada correctamente.',
                            'success'
                        )
                        $('button[name="boton"]').show();
                        $("#submit").prop("disabled", true);
                        $('.input').hide();
                        $('div[id^="superior"], div[id^="medio"], div[id^="inferior"], div[id^="1"], div[id^="2"], div[id^="3"], div[id^="4"], div[id^="5"], div[id^="6"], div[id^="7"], div[id^="8"], div[id^="9"]')
                            .css('background-color', '');
                    }

                })
            })
        </script>
        <script>
            $(document).ready(function() {


                // Maneja el clic en los botones
                $('button[name="boton"]').click(function() {
                    // Oculta todos los botones
                    $('button[name="boton"]').show();

                    // Oculta el botón actual
                    $(this).hide();
                    // Oculta todos los inputs
                    $('.input').hide();

                    // Muestra el input correspondiente
                    $('#' + $(this).data('toggle-input')).show();
                    var nivel = $(this).data('nivel');
                    var grado = $(this).data('grado');

                    // Restablece el color de fondo de todos los divs
                    $('div[id^="superior"], div[id^="medio"], div[id^="inferior"], div[id^="1"], div[id^="2"], div[id^="3"], div[id^="4"], div[id^="5"], div[id^="6"], div[id^="7"], div[id^="8"], div[id^="9"]')
                        .css('background-color', '');

                    // Establece el color de fondo para el div específico
                    $('#' + nivel).css('background-color', '#D6EAF8');
                    $('#' + nivel2).css('background-color', '#D6EAF8');
                    $('#' + grado).css('background-color', '#D6EAF8');
                });

                function updateSubmitButton() {
                    var select1Val = $("#select1").val();
                    var select2Val = $("#select2").val();

                    if (select1Val !== "" && select2Val !== "") {
                        $("#submit").prop("disabled", false);
                    } else {
                        $("#submit").prop("disabled", true);
                    }
                }

                $("#select1").change(function() {
                    updateSubmitButton();
                });

                $("#select2").change(function() {
                    updateSubmitButton();
                });
                $("#submit2").click(function() {

                    $("#submit").prop("disabled", true);

                });

            });
        </script>
    @endpush --}}

    {{-- <div class="grid grid-cols-2 my-6">
        <div class="col-span-2  flex justify-center items-center ">
            <div class="flex flex-col text-center text-3xl">
                <span class="font-bold">Puntaje: {{ $puntaje }}</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-5" wire:ignore>
        <div class="border  flex items center items-center justify-center">NIVEL</div>
        <div class="border  flex items center items-center justify-center">PUNTOS</div>
        <div id="noveles" class=" border  flex items center items-center justify-center">NOVELES</div>
        <div class="border  flex items center items-center justify-center">
            <button data-nivel="noveles" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-1">5.00-7.00</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="5.00"
                max="7.00" step="0.01" placeholder="5.00-7.00" id="input-1"></x-input>
        </div>


        <div id="intermedios" class=" border  flex items center items-center justify-center">INTERMEDIOS</div>

        <div class="border  flex items center items-center justify-center">
            <button data-nivel="intermedios" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-4">6.50-8.00</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="6.50"
                max="8.00" step="0.01" placeholder="6.50-8.00" id="input-4"></x-input>
        </div>

        <div id="avanzados" class=" border  flex items center items-center justify-center">AVANZADOS</div>
        <div class=" border  flex items center items-center justify-center">
            <button data-nivel="avanzados" data-grado="9" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-9">7.00-8.99</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="7.00"
                max="8.99" step="0.01" placeholder="7.00-8-99" id="input-9"></x-input>
        </div>

    </div>
    <div class="grid grid-cols-2 mt-4">
        <div class="col-span-2 flex justify-center items-center">
            <button wire:click="$emit('confirmar')" wire:ignore class="btn btn-success" id="submit" disabled>Enviar
                Puntuacion</button>
        </div>
    </div>
    --}}
    @push('js')
        <script>
            Livewire.on('confirmar', () => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás cambiar esto después de confirmar.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, asignar puntuación'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('taolu-tradicional-juezb', 'saveScore')
                        Swal.fire(
                            'Puntuación asignada!',
                            'La puntuación ha sido registrada correctamente.',
                            'success'
                        )
                        $('button[name="boton"]').show();
                        $("#submit").prop("disabled", true);
                        $('.input').hide();
                        $('div[id^="noveles"], div[id^="intermedios"], div[id^="avanzados"]')
                            .css('background-color', '');
                    }

                })
            })
        </script>
        <script>
            $(document).ready(function() {


                // Maneja el clic en los botones
                $('button[name="boton"]').click(function() {
                    // Oculta todos los botones
                    $('button[name="boton"]').show();

                    // Oculta el botón actual
                    $(this).hide();
                    // Oculta todos los inputs
                    $('.input').hide();

                    // Muestra el input correspondiente
                    $('#' + $(this).data('toggle-input')).show();
                    var nivel = $(this).data('nivel');
                    var grado = $(this).data('grado');

                    // Restablece el color de fondo de todos los divs
                    $('div[id^="superior"], div[id^="medio"], div[id^="inferior"], div[id^="1"], div[id^="2"], div[id^="3"], div[id^="4"], div[id^="5"], div[id^="6"], div[id^="7"], div[id^="8"], div[id^="9"]')
                        .css('background-color', '');

                    // Establece el color de fondo para el div específico
                    $('#' + nivel).css('background-color', '#D6EAF8');
                    $('#' + grado).css('background-color', '#D6EAF8');

                });

                function updateSubmitButton() {
                    var select1Val = $("#select1").val();
                    var select2Val = $("#select2").val();

                    if (select1Val !== "" && select2Val !== "") {
                        $("#submit").prop("disabled", false);
                    } else {
                        $("#submit").prop("disabled", true);
                    }
                }

                $("#select1").change(function() {
                    updateSubmitButton();
                });

                $("#select2").change(function() {
                    updateSubmitButton();
                });
                $("#submit2").click(function() {

                    $("#submit").prop("disabled", true);

                });

            });
        </script>
    @endpush

</div>
