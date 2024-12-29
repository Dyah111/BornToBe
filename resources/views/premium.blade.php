<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Premium') }}
        </h2>
    </x-slot>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script>
        @if (isset($snapToken))

        snap.pay("{{ $snapToken }}", {
                    onSuccess: function (result) {
                        alert("Pembayaran berhasil!");
                    },
                    onPending: function (result) {
                        alert("Menunggu pembayaran.");
                    },
                    onError: function (result) {
                        alert("Pembayaran gagal.");
                    }
                });
        @endif
        </script>
    <div class="py-11">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-gray-100 border-b border-gray-200 font-semibold text-center text-3xl flex flex-col gap-2 justify-center ">
                    <p class="text-4xl font-extrabold py-2">Upgrade To Premium</p>
                    <div class="w-full flex flex-row justify-center gap 2">
                        <div class="p-3 flex justify-center items-center">
                            <x-card-premium
                                title="Paket Premium 1" 
                                description="Nikmati berbagai fitur premium dengan harga terjangkau." 
                                duration="1 Bulan" 
                                price="IDR 49,999"
                                :id=1
                                :benefits="[
                                    'Akses ke semua fitur',
                                    '6 Webinar gratis',
                                    
                                ]"
                            />
                        </div>
                        {{-- <div class="p-3 flex justify-center items-center">
                            <x-card-premium 
                                title="Paket Premium 2" 
                                description="Nikmati berbagai fitur premium dengan harga terjangkau." 
                                duration="1 Bulan" 
                                price="IDR 49,999"
                                :id=2
                                :benefits="[
                                    'Akses ke semua fitur',
                                    '2 Webinar gratis',
                                    'Tanpa iklan',
                                    
                                ]"
                            />
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
