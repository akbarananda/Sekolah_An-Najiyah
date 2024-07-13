@extends('layouts.userLayout')
@section('title')
    An-Najiyah
@endsection
@section('content')
    <div class="mt-10">
        <!-- Team Section: Circle Photos with Title -->
        <div class="bg-white dark:bg-gray-900 dark:text-gray-100">
            <div class="container mx-auto space-y-16 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-7xl">
                <!-- Heading -->
                <div class="text-center" data-aos="fade-down" data-aos-duration="2000">
                    <h2 class="mb-4 text-4xl font-black text-black dark:text-white">
                        Perkenalkan tim berbakat kami
                    </h2>
                    <h3 class="mx-auto text-xl font-medium leading-relaxed text-gray-700 lg:w-2/3 dark:text-gray-300">
                        Mereka bekerja tanpa henti di belakang layar untuk membantu Anda membangun karakter, kepribadian, dan sifat.
                    </h3>
                </div>
                <!-- END Heading -->

                <!-- Team -->
                <div class="grid grid-cols-1 gap-8 text-center sm:grid-cols-2 md:grid-cols-3 md:gap-16"  data-aos="zoom-in" data-aos-duration="2000">
                    <div>
                        <span
                            class="mb-5 inline-block rounded-full bg-white p-2 shadow-lg dark:bg-gray-700/75 dark:shadow-gray-950">
                            <img src="{{ asset('assets/akbar.png') }}"
                                alt="User Avatar" class="inline-block size-48 rounded-full" />
                        </span>
                        <h4 class="mb-0.5 text-xl font-bold">Akbar Ananda A</h4>
                        <p class="font-medium text-gray-600 dark:text-gray-400">
                            FrontEnd Developer
                        </p>
                    </div>
                </div>
                <!-- END Team -->
            </div>
        </div>
        <!-- END Team Section: Circle Photos with Title -->

    </div>
@endsection
