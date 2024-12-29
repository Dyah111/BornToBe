@props(['title' => '', 'description' => '', 'duration' => '', 'price' => '', 'id' => 1, 'benefits' => []])
<div class="w-72 bg-white rounded-xl shadow-md p-4">
    <!-- Header -->
    <div class="mb-4">
        <p class="text-3xl font-semibold">{{ $title }}</p>
        <p class="text-gray-600 text-sm">{{ $description }}</p>
    </div>

    <!-- Content Section -->
    <div class="bg-[#D2B48C] p-3 rounded-md">
        <p class="font-bold text-2xl">{{ $duration }}</p>
        <p class="font-bold text-lg mb-4">Harga: {{ $price }}</p>

        <!-- List of Benefits -->
        <div class="flex flex-col gap-2">
            <p class="font-semibold text">Benefits:</p>
            <ul class="list-none text-sm text-gray-700">
                @foreach ($benefits as $benefit)
                    <li class="flex text-left items-center space-x-2"> <!-- Flexbox untuk menyusun icon dan teks di samping -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e8eaed" class="h-6 w-6">
                            <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/>
                        </svg>
                        <span>{{ $benefit }}</span>
                    </li>
                @endforeach
            </ul>
            <script>

            </script>
            <div class="w-full">
                <a href="{{route('payment.createTransaction', $id)}}" class="text-lg p-2 rounded-md text-white bg-black">Berlangganan Sekarang</a>
            </div>
        </div>
    </div>
</div>
