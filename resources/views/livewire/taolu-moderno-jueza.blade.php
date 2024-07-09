<div>



    <x-selects :firsts="$judges" :seconds="$performances" modelfirst="judge_id" modelsecond="performance_id" title1="Jueces"
        title2="Actuaciones">
    </x-selects>
    <div class="grid grid-cols-2 gap-2 ">

        <div class="col-span-2  flex justify-center items-center my-6">
            <div class="flex flex-col text-center text-3xl">
                <span class="font-bold">Puntaje: {{ $puntaje }}</span>

            </div>
        </div>

        <div class="col-span-2  flex justify-center items-center">Opciones de restar Puntaje</div>
        <div class="col-span-2 flex justify-center items-center">
            <button class="btn btn-secondary text-2xl font-bold" wire:click="change('-0.1')">-0.1</button>
        </div>
        <div class="col-span-2 flex justify-center items-center">
            <button class="btn btn-secondary text-2xl font-bold" wire:click="change('-0.2')">-0.2</button>
        </div>
        <div class="col-span-2 flex justify-center items-center">
            <button class="btn btn-secondary text-2xl font-bold" wire:click="change('-0.3')">-0.3</button>
        </div>


    </div>
    <div class="grid grid-cols-2 mt-4">
        <div class="col-span-2 flex justify-center items-center">
            <button wire:click="$emit('confirmar')" wire:ignore class="btn btn-success" id="submit" disabled>Enviar
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
                        Livewire.emitTo('taolu-moderno-jueza', 'saveScore')
                        Swal.fire(
                            'Puntuación asignada!',
                            'La puntuación ha sido registrada correctamente.',
                            'success'
                        )
                        $("#submit").prop("disabled", true);
                    }

                })
            })
        </script>

        <script>
            $(document).ready(function() {
                console.log('aaa')

                function updateSubmitButton() {
                    var select1Val = $("#select1").val();
                    var select2Val = $("#select2").val();
                    console.log(select1Val, select2Val);
                    if (select1Val !== "" && select2Val !== "") {
                        $("#submit").prop("disabled", false);
                    } else {
                        $("#submit").prop("disabled", true);
                    }
                }

                $("#select1").change(function() {
                    var select1Val = $("#select1").val();
                    console.log(select1Val);
                    updateSubmitButton();
                });

                $("#select2").change(function() {
                    updateSubmitButton();
                });
                // $("#submit2").click(function() {

                //     $("#submit").prop("disabled", true);

                // });
            });
        </script>
    @endpush




</div>
