<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center items-center">
        <div class="max-w-lg w-full bg-white border border-gray-300 shadow-md rounded-lg p-6">
            <h1 class="text-4xl font-bold text-center mb-3">Contact Us</h1>
            <p class="text-lg text-center mb-6">Feel like contacting us? Submit your queries here and we will get back to you as soon as possible.</p>
            <h2 class="text-2xl font-bold text-center mb-6">Send Us a Message</h2>
            
            <form id="contactForm">
                <input type="text" name="name" placeholder="Name" class="w-full border border-gray-300 rounded-md p-2 mb-4">
                <input type="email" name="email" placeholder="Email" class="w-full border border-gray-300 rounded-md p-2 mb-4">
                <input type="number" name="phone" placeholder="Phone" class="w-full border border-gray-300 rounded-md p-2 mb-4">
                <textarea name="message" placeholder="Message" class="w-full border border-gray-300 rounded-md p-2 mb-4"></textarea>
                
                <div class="flex justify-center">
                    <button id="sendButton" class="bg-blue-500 text-white font-bold py-2 px-6 rounded-md hover:bg-blue-600 transition-all duration-300">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
