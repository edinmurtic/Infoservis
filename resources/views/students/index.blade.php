
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight bg-gray ">
            {{__('Lista studenata' ) }}
        </h2>
    </x-slot>


<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <a href="\add_student" class="m-2 p-2 w-max text-xl font-serif flex items-center justify-center  rounded-md bg-sky-600 hover:bg-sky-700 text-white">DODAJ studenta</a>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <h1 class="font-xl mb-4 text-left  ">Lista studenata:</h1>
                <hr />
                @foreach ($students as $student)
                <div class="flex space-x-4">
                    <div class="flex-1"><p class="p-2"> {{ $student->name }} - {{ $student->lastName }}

                    </div>
                     <div lcass="flex-1">
                        <form method="POST" action="{{ route('delete_student') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$student->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 hover:bg-sky-700  border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Obrisi') }}
                                </button>
                            </div>
                        </form>
                    </div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_student') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 hover:bg-sky-700  border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                      {{__('Uredi') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                </div>
           @endforeach
            </div>
        </div>
    </div>
</div>
</x-app-layout>
