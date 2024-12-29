<x-app-layout>
    
    <div class="flex justify-center items-center mt-16 py-6 ">
        <h1 class="text-5xl font-bold text-center">Webinar</h1>
    </div>
    <div class="grid grid-cols-3 gap-3 mt-10 p-2">
        <x-card-webinar :poster="asset('img/pp.png')" :link="'https://www.instagram.com/p/DEBuuhevnhS/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=='">
            
        </x-card-webinar>          
        <x-card-webinar :poster="asset('img/Webinar.png')" :link="'https://www.example.com'">
            
        </x-card-webinar>          
        <x-card-webinar :poster="asset('img/Webinar.png')" :link="'https://www.example.com'">
            
        </x-card-webinar>          
        <x-card-webinar :poster="asset('img/Webinar.png')" :link="'https://www.example.com'">
            
        </x-card-webinar>          
        <x-card-webinar :poster="asset('img/Webinar.png')" :link="'https://www.example.com'">
            
        </x-card-webinar>          
        <x-card-webinar :poster="asset('img/Webinar.png')" :link="'https://www.example.com'">
            
        </x-card-webinar>    
        
    </div>
</x-app-layout>
