<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight bg-gray  ">
            {{__('Unesi podatke o proizvodu' ) }}
        </h2>
    </x-slot>
    <div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-gray overflow-hidden shadow-xl sm:rounded-lg">
               <div class="p-2">
           <form method="POST" action="{{route('store_student')}}">
        @csrf
        <div>
            <x-jet-label for="index" value="{{ __('Index')}}"/>
            <x-jet-input id="index" class="block mt-1 w-full mb-4" type="text" name="index" :value="old('index')" required autofocus/>
                 </div>
                 <div>
            <x-jet-label for="name" value="{{ __('Ime')}}"/>
            <x-jet-input is_dir="name" class="block mt-1 w-full mb-4" type="text" name="name" :value="old('name')" required autofocus/>
</div>
<div>
            <x-jet-label for="lastName" value="{{ __('Prezime')}}"/>
            <x-jet-input is_dir="lastName" class="block mt-1 w-full mb-4" type="text" name="lastName" :value="old('lastName')" required autofocus/>
</div>

<div>
            <x-jet-label for="BDate" value="{{ __('Datum rođenja')}}"/>
            <x-jet-input is_dir="BDate" class="block mt-1 w-full mb-4" type="date" name="BDate" :value="old('BDate')" required autofocus/>
</div>
<div>
            <x-jet-label for="JMBG" value="{{ __('JMBG')}}"/>
            <x-jet-input is_dir="JMBG" class="block mt-1 w-full mb-4" type="text" name="JMBG" :value="old('JMBG')" required autofocus/>
</div>
<div>
            <x-jet-label for="address" value="{{ __('Adresa')}}"/>
            <x-jet-input is_dir="address" class="block mt-1 w-full mb-4" type="text" name="address" :value="old('address')" required autofocus/>
</div>
<div>
            <x-jet-label for="city" value="{{ __('Grad')}}"/>
            <x-jet-input is_dir="city" class="block mt-1 w-full mb-4" type="text" name="city" :value="old('city')" required autofocus/>
</div>

<div>
            <x-jet-label for="country" value="{{ __('Država')}}"/>
            <x-jet-input is_dir="country" class="block mt-1 w-full mb-4" type="text" name="country" :value="old('country')" required autofocus/>
</div>
<div>
            <x-jet-label for="phone" value="{{ __('Telefon')}}"/>
            <x-jet-input is_dir="phone" class="block mt-1 w-full mb-4" type="text" name="phone" :value="old('phone')" required autofocus/>
</div>
<div>
            <x-jet-label for="email" value="{{ __('email')}}"/>
            <x-jet-input is_dir="email" class="block mt-1 w-full mb-4" type="text" name="email" :value="old('email')" required autofocus/>
</div>
<div>
            <x-jet-label for="status" value="{{ __('Status')}}"/>
            <x-jet-input is_dir="status" class="block mt-1 w-full mb-4" type="text" name="status" :value="old('status')" required autofocus/>
</div>


<div class="flex items-center justify-end mt-4">
    <x-jet-button class="ml-4">
        {{__('Spremi')}}
</x-jet-button>
</div>
</form>
</div>
</div>
</div>
</x-app-layout>
