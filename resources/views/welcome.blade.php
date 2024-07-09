<x-app-layout>
    <div class="grid grid-cols-3">
        <form class="md:col-span-1 col-span-3 text-center shadow-lg mb-4" method="post"
            action="{{ route('store-judge') }}">
            @csrf
            <div class="w-full overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                        Jurado
                    </h1>
                </div>

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10 ">

                    <!-- Title -->
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="nombrejudge">
                            Nombre
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="nombrejudge" id="nombrejudge" />
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="categoriajudge">
                            Categoria
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="categoriajudge" id="categoriajudge">
                            <option value="">Seleccionar</option>
                            <option value="1">Taolu</option>
                            <option value="2">Sanda</option>
                        </select>

                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="estilojudge">
                            Estilo
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="estilojudge" id="estilojudge">
                            <option value="">Seleccionar</option>
                            <option value="1">Moderno</option>
                            <option value="2">Tradicional</option>
                        </select>

                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="tipojudge">
                            Tipo
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="tipojudge" id="tipojudge">
                            <option value="">Seleccionar</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                        </select>

                    </div>
                    @if (session('error_messagejudge'))
                        <div class="alert alert-danger text-red-700">
                            {{ session('error_messagejudge') }}
                        </div>
                    @endif
                    @if (session('successjudge'))
                        <div class="alert alert-danger text-green-500 font-bold">
                            {{ session('successjudge') }}
                        </div>
                    @endif
                    <div class="w-full text-center">
                        <button class="btn btn-primary">Crear Jurado</button>
                    </div>



                </div>
            </div>
        </form>
        <form class="md:col-span-1 col-span-3 text-center shadow-lg mb-4" method="post"
            action="{{ route('store-participant') }}">
            @csrf
            <div class="w-full overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                        Participante
                    </h1>
                </div>

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10 ">

                    <!-- Title -->
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="nombreparticipant">
                            Nombre
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="nombreparticipant" id="nombreparticipant" />
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="institucionparticipant">
                            Intitución
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="institucionparticipant" id="institucionparticipant" />
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="acronimoparticipant">
                            Acrónimo de la Intitución
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="acronimoparticipant" id="acronimoparticipant" />
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="urlparticipant">
                            URL imagen de la institución
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="urlparticipant" id="urlparticipant" />
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="categoriaparticipant">
                            Categoria
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="categoriaparticipant" id="categoriaparticipant">
                            <option value="">Seleccionar</option>
                            <option value="1">Taolu</option>
                            <option value="2">Sanda</option>
                        </select>

                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="estiloparticipant">
                            Estilo
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="estiloparticipant" id="estiloparticipant">
                            <option value="">Seleccionar</option>
                            <option value="1">Moderno</option>
                            <option value="2">Tradicional</option>
                        </select>

                    </div>
                    @if (session('error_messageparticipant'))
                        <div class="alert alert-danger text-red-700">
                            {{ session('error_messageparticipant') }}
                        </div>
                    @endif
                    @if (session('successparticipant'))
                        <div class="alert alert-danger text-green-500 font-bold">
                            {{ session('successparticipant') }}
                        </div>
                    @endif
                    <div class="w-full text-center">
                        <button class="btn btn-primary">Crear Participante</button>
                    </div>



                </div>
            </div>
        </form>
        <form class="md:col-span-1 col-span-3 text-center shadow-lg mb-4" method="post"
            action="{{ route('store-performance') }}">
            @csrf
            <div class="w-full overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                        Actuacion
                    </h1>
                </div>

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10 ">

                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="nombreperformance">
                            Titulo
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="nombreperformance" id="nombreperformance" />
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="pesoperformance">
                            Peso
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="pesoperformance" id="pesoperformance" />
                    </div>


                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="categoriaperformance">
                            Categoria
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="categoriaperformance" id="categoriaperformance">
                            <option value="">Seleccionar</option>
                            <option value="1">Taolu</option>
                            <option value="2">Sanda</option>
                        </select>

                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="estiloperformance">
                            Estilo
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="estiloperformance" id="estiloperformance">
                            <option value="">Seleccionar</option>
                            <option value="1">Moderno</option>
                            <option value="2">Tradicional</option>
                        </select>

                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="participante1performance">
                            Participante 1
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="participante1performance" id="participante1performance">
                            <option value="">Seleccionar</option>
                            @foreach ($participants as $participant)
                                <option value="{{ $participant->id }}">{{ $participant->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-bold text-gray-700" for="participante2performance">
                            Participante 2
                        </label>
                        <select
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="participante2performance" id="participante2performance">
                            <option value="">Seleccionar</option>
                            @foreach ($participants as $participant)
                                <option value="{{ $participant->id }}">{{ $participant->name }}</option>
                            @endforeach

                        </select>

                    </div>
                    @if (session('error_messageperformance'))
                        <div class="alert alert-danger text-red-700">
                            {{ session('error_messageperformance') }}
                        </div>
                    @endif
                    @if (session('successperformance'))
                        <div class="alert alert-danger text-green-500 font-bold">
                            {{ session('successperformance') }}
                        </div>
                    @endif
                    <div class="w-full text-center">
                        <button class="btn btn-primary">Crear Actuación</button>
                    </div>



                </div>
            </div>
        </form>
    </div>
</x-app-layout>
