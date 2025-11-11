<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Qurban') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h3 class="text-2xl font-bold mb-6">Pilih Hewan Qurban Anda</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        
                        {{-- Kambing --}}
                        <a href="{{ route('qurban.show', ['jenis' => 'kambing']) }}" 
                           class="block bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
                            <img src="{{ asset('images/kambing.jpg') }}" alt="Kambing" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                            <div class="p-4 text-center">
                                <h2 class="text-xl font-semibold mb-2">Kambing</h2>
                                <p class="text-gray-600 mb-2">Mulai Rp 15.000.000</p>
                                <span class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg mt-2">Lihat Detail</span>
                            </div>
                        </a>

                        {{-- Sapi --}}
                        <a href="{{ route('qurban.show', ['jenis' => 'sapi']) }}" 
                           class="block bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
                            <img src="{{ asset('images/sapi.jpg') }}" alt="Sapi" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                            <div class="p-4 text-center">
                                <h2 class="text-xl font-semibold mb-2">Sapi</h2>
                                <p class="text-gray-600 mb-2">Mulai Rp 100.000.000</p>
                                <span class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg mt-2">Lihat Detail</span>
                            </div>
                        </a>

                        {{-- Domba --}}
                        <a href="{{ route('qurban.show', ['jenis' => 'domba']) }}" 
                           class="block bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
                            <img src="{{ asset('images/domba.jpg') }}" alt="Domba" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                            <div class="p-4 text-center">
                                <h2 class="text-xl font-semibold mb-2">Domba</h2>
                                <p class="text-gray-600 mb-2">Mulai Rp 10.000.000</p>
                                <span class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg mt-2">Lihat Detail</span>
                            </div>
                        </a>

                        {{-- Unta --}}
                        <a href="{{ route('qurban.show', ['jenis' => 'unta']) }}" 
                           class="block bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1">
                            <img src="{{ asset('images/unta.jpg') }}" alt="Unta" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                            <div class="p-4 text-center">
                                <h2 class="text-xl font-semibold mb-2">Unta</h2>
                                <p class="text-gray-600 mb-2">Mulai Rp 150.000.000</p>
                                <span class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg mt-2">Lihat Detail</span>
                            </div>
                        </a>

                    </div>

                    <p class="text-gray-500 text-sm mt-8">
                        *Harga dapat berubah sewaktu-waktu sesuai ketersediaan hewan qurban.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
