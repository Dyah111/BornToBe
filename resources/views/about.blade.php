<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col md:flex-row items-center md:items-start">
                    <img src="{{ asset('img/gambar about.png') }}" alt="About Image" class="w-1/2 md:w-1/2">
                    
                    <div class="text-content md:w-1/2 ">
                        <h1 class="text-4xl font-bold mb-4">About</h1>
                        <h2 class="text-xl font-semibold text-green-400 mt-10 mb-5">Together we can advance education</h2>
                        <p class="mb-4">Pendidikan adalah kunci untuk membuka pintu pengetahuan dan kemajuan. Melalui pendidikan, kita memperoleh keterampilan, wawasan, dan pemahaman yang memungkinkan kita untuk berkontribusi secara positif dalam masyarakat.</p>
                        <p>Pendidikan bukan hanya tentang menghafal fakta, tetapi juga tentang mengembangkan kreativitas, kritis berpikir, dan etika. Dengan pendidikan yang baik, kita dapat membentuk masa depan yang lebih baik bagi diri kita sendiri dan generasi mendatang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
