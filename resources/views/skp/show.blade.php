<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} skp
        </h2>
    </x-slot>
   <h1> show page</h1>
   <p>id : {{ $skp->id }}</p>
   <p>nama : {{ $skp->nama }}</p>
   <p>nip : {{ $skp->nip }}</p>
   <p>jabatan : {{ $skp->jabatan }}</p>
</x-app-layout>