<div>
    <x-selects :firsts="$judges" :seconds="$performances" modelfirst="judge_id" modelsecond="performance_id" title1="Jueces"
        title2="Actuaciones">
    </x-selects>
    
    {{-- {{ optional($participant1_current)->name }} --}}
    <div wire:ignore>
        <div class="grid grid-cols-4 ">
            <div class="col-span-4  flex  items-center justify-center text-8xl">2:00</div>
            <div class="col-span-4 grid grid-cols-3" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <div class=" flex items-center justify-center text-4xl" role="presentation">


                    <button
                        class="w-full text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="true">ROUND 1</button>


                </div>
                <div class=" flex items-center justify-center text-4xl" role="presentation"><button
                        class="w-full  text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                        id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">ROUND 2</button></div>

                <div class=" flex items-center justify-center text-4xl" role="presentation"><button
                        class="w-full text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">ROUND 3</button></div>

            </div>

            <div id="myTabContent" class="col-span-4 grid grid-cols-4">

                <div class="col-span-4 grid grid-cols-4 " id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <div class="col-span-2 flex items-center justify-center text-8xl bg-red-600 text-white">
                        <div class="flex flex-col text-center w-full ">
                            <button wire:click="disminuir(1,1)"
                                class=" bg-red-300 text-red-600 hover:text-red-700 hover:bg-red-400 h-full w-full rounded-l cursor-pointer outline-none">
                                <span class="m-auto  font-thin text-8xl">−</span>
                            </button>
                            <input type="number"
                                class="outline-none focus:outline-none text-center w-full bg-red-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-red-700  outline-none text-8xl cursor-default"
                                name="custom-input-number" wire:model="puntajes.1.1" readonly></input>
                            <button wire:click="aumentar(1,1)"
                                class="bg-red-300 text-red-600 hover:text-red-700 hover:bg-red-400 h-full w-full rounded-r cursor-pointer ">
                                <span class="m-auto  font-thin text-8xl">+</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-center text-8xl bg-blue-600 text-white">
                        <div class="flex flex-col text-center w-full">
                            <button wire:click="disminuir(1,2)"
                                class=" bg-blue-300 text-blue-600 hover:text-blue-700 hover:bg-blue-400 h-full w-full rounded-l cursor-pointer outline-none">
                                <span class="m-auto  font-thin text-8xl">−</span>
                            </button>
                            <input type="number"
                                class="outline-none focus:outline-none text-center w-full bg-blue-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-blue-700  outline-none text-8xl"
                                name="custom-input-number" wire:model="puntajes.1.2"></input>
                            <button wire:click="aumentar(1,2)"
                                class="bg-blue-300 text-blue-600 hover:text-blue-700 hover:bg-blue-400 h-full w-full rounded-r cursor-pointer ">
                                <span class="m-auto  font-thin text-8xl">+</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-4 text-center">
                        <button id="submit1" wire:click="$emit('confirmar',1)" wire:ignore class="btn btn-primary submit mt-4"
                            disabled>
                            Enviar Puntuación
                        </button>
                    </div>
                </div>
                <div class="col-span-4 grid grid-cols-4 hidden" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <div class="col-span-2 flex items-center justify-center text-8xl bg-red-600 text-white">
                        <div class="flex flex-col text-center w-full ">
                            <button wire:click="disminuir(2,1)"
                                class=" bg-red-300 text-red-600 hover:text-red-700 hover:bg-red-400 h-full w-full rounded-l cursor-pointer outline-none">
                                <span class="m-auto  font-thin text-8xl">−</span>
                            </button>
                            <input type="number"
                                class="outline-none focus:outline-none text-center w-full bg-red-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-red-700  outline-none text-8xl cursor-default"
                                name="custom-input-number" wire:model="puntajes.2.1" readonly></input>
                            <button wire:click="aumentar(2,1)"
                                class="bg-red-300 text-red-600 hover:text-red-700 hover:bg-red-400 h-full w-full rounded-r cursor-pointer ">
                                <span class="m-auto  font-thin text-8xl">+</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-center text-8xl bg-blue-600 text-white">
                        <div class="flex flex-col text-center w-full">
                            <button wire:click="disminuir(2,2)"
                                class=" bg-blue-300 text-blue-600 hover:text-blue-700 hover:bg-blue-400 h-full w-full rounded-l cursor-pointer outline-none">
                                <span class="m-auto  font-thin text-8xl">−</span>
                            </button>
                            <input type="number"
                                class="outline-none focus:outline-none text-center w-full bg-blue-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-blue-700  outline-none text-8xl"
                                name="custom-input-number" wire:model="puntajes.2.2"></input>
                            <button wire:click="aumentar(2,2)"
                                class="bg-blue-300 text-blue-600 hover:text-blue-700 hover:bg-blue-400 h-full w-full rounded-r cursor-pointer ">
                                <span class="m-auto  font-thin text-8xl">+</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-4 text-center">
                        <button id="submit2" wire:click="$emit('confirmar',2)" wire:ignore class="btn btn-primary submit mt-4"
                            disabled>
                            Enviar Puntuación
                        </button>
                    </div>
                </div>
                <div class="col-span-4 grid grid-cols-4 hidden" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    <div class="col-span-2 flex items-center justify-center text-8xl bg-red-600 text-white">
                        <div class="flex flex-col text-center w-full ">
                            <button wire:click="disminuir(3,1)"
                                class=" bg-red-300 text-red-600 hover:text-red-700 hover:bg-red-400 h-full w-full rounded-l cursor-pointer outline-none">
                                <span class="m-auto  font-thin text-8xl">−</span>
                            </button>
                            <input type="number"
                                class="outline-none focus:outline-none text-center w-full bg-red-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-red-700  outline-none text-8xl cursor-default"
                                name="custom-input-number" wire:model="puntajes.3.1" readonly></input>
                            <button wire:click="aumentar(3,1)"
                                class="bg-red-300 text-red-600 hover:text-red-700 hover:bg-red-400 h-full w-full rounded-r cursor-pointer ">
                                <span class="m-auto  font-thin text-8xl">+</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-center text-8xl bg-blue-600 text-white">
                        <div class="flex flex-col text-center w-full">
                            <button wire:click="disminuir(3,2)"
                                class=" bg-blue-300 text-blue-600 hover:text-blue-700 hover:bg-blue-400 h-full w-full rounded-l cursor-pointer outline-none">
                                <span class="m-auto  font-thin text-8xl">−</span>
                            </button>
                            <input type="number"
                                class="outline-none focus:outline-none text-center w-full bg-blue-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-blue-700  outline-none text-8xl"
                                name="custom-input-number" wire:model="puntajes.3.2"></input>
                            <button wire:click="aumentar(3,2)"
                                class="bg-blue-300 text-blue-600 hover:text-blue-700 hover:bg-blue-400 h-full w-full rounded-r cursor-pointer ">
                                <span class="m-auto  font-thin text-8xl">+</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-span-4 text-center">
                        <button id="submit3" wire:click="$emit('confirmar',3)" wire:ignore
                            class="btn btn-primary submit mt-4" disabled>
                            Enviar Puntuación
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @push('js')
        <script>
            Livewire.on('confirmar', (index) => {
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
                        Livewire.emitTo('sanda-aplicacion', 'saveScore',index)
                        Swal.fire(
                            'Puntuación asignada!',
                            'La puntuación ha sido registrada correctamente.',
                            'success'
                        )
                        $("#submit" + index).prop("disabled", true);
                    }

                })
            })
        </script>
        <script>
            $(document).ready(function() {

                function updateSubmitButton() {
                    var select1Val = $("#select1").val();
                    var select2Val = $("#select2").val();

                    if (select1Val !== "" && select2Val !== "") {
                        $(".submit").prop("disabled", false);
                    } else {
                        $(".submit").prop("disabled", true);
                    }
                }

                $("#select1").change(function() {
                    updateSubmitButton();
                });

                $("#select2").change(function() {
                    updateSubmitButton();
                });
                // $(".submit").click(function() {
                //     Swal.fire(
                //         'Votación registrada',
                //         'Ha registrado su puntuación con éxito.',
                //         'success'
                //     )
                    
                // });
                // $("#submit3").click(function() {

                //     $("#submit3").prop("disabled", true);
                // });
                // $("#submit2").click(function() {

                //     $("#submit2").prop("disabled", true);
                // });
                // $("#submit1").click(function() {

                //     $("#submit1").prop("disabled", true);
                // });
            });
        </script>
    @endpush
</div>
