<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} Pegawai
        </h2>
    </x-slot>
   <!-- <h1> edit skp</h1>
   <p>id : {{ $dashboard->id }}</p>
   <p>nama : {{ $dashboard->nama }}</p>
   <p>nip : {{ $dashboard->nip }}</p>
   <p>jabatan : {{ $dashboard->jabatan }}</p> -->
   <div class="m-12">

       <form action="{{ route('dashboard.update', $skp->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-6">
                <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Nama</label>
                <input type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Masukkan Nama" 
                    name="nama"
                    value="{{ $pegawai->nama }}"
                    >
            </div>
    
            <div class="form-group mb-6">
                <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">NIP</label>
                <input type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Masukkan NIP" 
                    name="nip"
                    value="{{ $pegawai->nip }}"
                    >
            </div>
    
            <div class="form-group mb-6">
                <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Jabatan</label>
                <input type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Masukkan Jabatan" 
                    name="jabatan"
                    value="{{ $pegawai->jabatan }}"
                    >
            </div>
            <button type="submit" class="
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Submit</button>
        </form>
   </div>

</x-app-layout>