@props(['firsts', 'seconds','modelfirst','modelsecond','title1','title2'])
<div class="grid grid-cols-2 gap-6  ">
    <div class="col-span-1">
        
        <select
            class="px-4 py-3 w-full rounded-md bg-gray-200 border-transparent focus:border-gray-500  focus:ring-0 text-sm "
            wire:model='{{$modelfirst}}' id="select1">
            <option value="">{{ $title1 }}</option>
            @foreach ($firsts as $first)
                <option i value="{{ $first->id }}">{{ $first->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-span-1">
        
        <select id="select2" wire:model="{{$modelsecond}}" name="judge"
            class="px-4 py-3 w-full rounded-md bg-gray-200 border-transparent focus:border-gray-500  focus:ring-0 text-sm">
            <option value="">{{$title2}}</option>
            @foreach ($seconds as $second)
                <option value="{{ $second->id }}">
                    {{ $second->title }}

                </option>
            @endforeach
        </select>
    </div>
    
</div>
