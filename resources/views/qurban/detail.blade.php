<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Qurban {{ $jenis }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <img src="{{ asset($gambar) }}" alt="{{ $jenis }}" class="w-full h-80 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-3xl font-bold mb-3">{{ $jenis }}</h3>
                    <p class="text-gray-600 mb-4">{{ $deskripsi }}</p>
                    <p class="text-lg font-semibold mb-6">Harga: Rp {{ number_format($harga, 0, ',', '.') }}</p>

                    <a href="{{ route('qurban.create', ['jenis' => strtolower($jenis)]) }}"
                       class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold">
                        Lanjutkan Qurban
                    </a>

                    <div class="mt-6">
                        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">
                            ← Kembali ke Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
