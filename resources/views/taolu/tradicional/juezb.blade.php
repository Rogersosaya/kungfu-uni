<x-app-layout>
    
    <div class="w-full h-screen flex justify-center items-center -my-20">
        <form class="text-center" method="get" action="{{ route('taolu-tradicional-juezb') }}">
            @csrf
            
            <div class="relative z-0  mb-6 group text-start">
                <input type="password" name="password" id="password"
                    class="block py-2.5 px-0  text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="password"
                    class="peer-focus:font-medium absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contraseña</label>
            </div>
            <button class="focus:bg-blue-700 active:bg-blue-700 btn btn-primary bg-blue-600" type="submit">Entrar</button>
            
        </form>
    </div>
    
</x-app-layout>
