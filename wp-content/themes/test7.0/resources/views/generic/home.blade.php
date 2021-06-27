@extends('layouts.master')

@section('content')

<div class="flex flex-col h-screen bg-center bg-cover bg-no-repeat bg-gray-100">
    <div class="grid place-items-center w-4/5 mx-auto p-10 my-20 sm:my-auto bg-gray-600 bg-opacity-70 rounded-xl shadow-2xl space-y-5 text-center hover:bg-gray-600 cursor-pointer transition duration-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <h1 class="text-8xl text-yellow-400 font-semibold uppercase">Coming Soon</h1>
        <h2 class="text-2xl text-gray-300">We are almost there to introduce our new <a class="hover:underline" href="https://www.emojimania.org">emoji</a> website to the world, in the meantime, you can follow us on social networks to get the latest updates.</h2>
        <div class="flex flex-wrap mt-10 justify-center space-x-5">

            <a href="https://www.facebook.com/QuickToolz" title="Quicktoolz On Facebook" class="md:w-32 tracking-wide text-yellow-400 font-bold rounded border-2 border-yellow-400 hover:border-blue-600 hover:bg-blue-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center transition duration-300">
                <span class="mx-auto">Facebook</span>
            </a>


            <a href="https://twitter.com/quicktoolz" title="Quicktoolz On Twitter" class="md:w-32 tracking-wide text-yellow-400 font-bold rounded border-2 border-yellow-400 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center transition duration-300">
                <span class="mx-auto">Twitter</span>
            </a>


            <a href="https://pinterest.com/quicktoolz/" title="Quicktoolz On Pinterest" class="md:w-32 tracking-wide text-yellow-400 font-bold rounded border-2 border-yellow-400 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center transition duration-300">
                <span class="mx-auto">Pintrest</span>
            </a>


            <a href="https://www.reddit.com/user/quicktoolz/" title="Quicktoolz On Facebook" class="md:w-32 tracking-wide text-yellow-400 font-bold rounded border-2 border-yellow-400 hover:border-orange-500 hover:bg-orange-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center transition duration-300">
                <span class="mx-auto">Reddit</span>
            </a>

        </div>
    </div>
</div>
@overwrite
