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

    <div class="grid grid-cols-3 " wire:ignore>
        <div class="border  flex items center items-center justify-center">NIVEL</div>
        <div class="border  flex items center items-center justify-center">GRADO</div>
        <div class="border  flex items center items-center justify-center">PUNTOS</div>
        <div id="superior" class="row-span-3 border  flex items center items-center justify-center">SUPERIOR</div>
        <div id="1" class="border  flex items center items-center justify-center">1</div>
        <div class="border  flex items center items-center justify-center">
            <button data-grado="1" data-nivel="superior" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-1">4.81-5.00</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="4.81"
                max="5.00" step="0.01" placeholder="5.00-4.81" id="input-1"></x-input>
        </div>

        <div id="2" class="border  flex items center items-center justify-center">2</div>

        <div class="border  flex items center items-center justify-center">
            <button data-nivel="superior" data-grado="2" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-2">4.51-4.80</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="4.51"
                max="4.80" step="0.01" placeholder="4.80-4.51" id="input-2"></x-input>
        </div>

        <div id="3" class="border  flex items center items-center justify-center">3</div>
        <div class="border  flex items center items-center justify-center">
            <button data-nivel="superior" data-grado="3" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-3">4.21-4.50</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="4.21"
                max="4.50" step="0.01" placeholder="4.50-4.21" id="input-3"></x-input>
        </div>
        <div id="medio" class="row-span-3 border  flex items center items-center justify-center">MEDIO</div>
        <div id="4" class="border  flex items center items-center justify-center">4</div>
        <div class="border  flex items center items-center justify-center">
            <button data-nivel="medio" data-grado="4" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-4">3.81-4.20</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="3.81"
                max="4.20" step="0.01" placeholder="4.20-3.81" id="input-4"></x-input>
        </div>
        <div id="5" class="border  flex items center items-center justify-center">5</div>
        <div class=" border  flex items center items-center justify-center">
            <button data-nivel="medio" data-grado="5" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-5">3.41-3.80</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="3.41"
                max="3.80" step="0.01" placeholder="3.80-3.41" id="input-5"></x-input>
        </div>
        <div id="6" class=" border  flex items center items-center justify-center">6</div>
        <div class=" border  flex items center items-center justify-center">
            <button data-nivel="medio" data-grado="6" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-6">3.01-3.40</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="3.01"
                max="3.40" step="0.01" placeholder="3.40-3.01" id="input-6"></x-input>
        </div>
        <div id="inferior" class="row-span-3 border  flex items center items-center justify-center">INFERIOR</div>
        <div id="7" class=" border  flex items center items-center justify-center">7</div>
        <div class=" border  flex items center items-center justify-center">
            <button data-nivel="inferior" data-grado="7" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-7">2.51-3.00</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="2.51"
                max="3.00" step="0.01" placeholder="3.00-2.51" id="input-7"></x-input>
        </div>
        <div id="8" class=" border  flex items center items-center justify-center">8</div>
        <div class=" border  flex items center items-center justify-center">
            <button data-nivel="inferior" data-grado="8" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-8">2.01-2.50</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="2.01"
                max="2.50" step="0.01" placeholder="2.50-2.01" id="input-8"></x-input>
        </div>
        <div id="9" class=" border  flex items center items-center justify-center">9</div>
        <div class=" border  flex items center items-center justify-center">
            <button data-nivel="inferior" data-grado="9" wire:click="accion" name="boton" class="btn btn-info"
                data-toggle-input="input-9">1.51-2.00</button>
            <x-input wire:ignore wire:model="puntaje" class="w-28 input hidden" type="number" min="1.51"
                max="2.00" step="0.01" placeholder="2.00-1.51" id="input-9"></x-input>
        </div>

    </div>
    <div class="grid grid-cols-2 mt-4">
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
