<!-- resources/views/Admin/Acara/edit.blade.php -->
@extends('layouts.adminLayout')

@section('content')
    <div class="mt-16 flex">
        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            href="{{ route('admin.acara.index') }}">Back to List</a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <form action="{{ route('admin.acara.update', $acara->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="pb-4 bg-white dark:bg-gray-900 p-6">
                <div class="mb-4">
                    <label for="judul" class="block text-sm font-medium text-gray-900 dark:text-white">Judul Acara</label>
                    <input type="text" name="judul" id="judul" value="{{ $acara->judul }}"
                        class="block w-full mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4"
                        class="block w-full mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>{{ $acara->deskripsi }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                    @if ($acara->image)
                        <div class="mb-4">
                            <img src="{{ asset($acara->image) }}" alt="{{ $acara->judul }}"
                                class="max-w-xs rounded-lg mb-2">
                        </div>
                    @endif
                    <input type="file" name="image" id="image"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        accept="image/*">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Upload gambar baru jika ingin mengganti.</p>
                </div>
            </div>
            <div class="flex justify-end px-6 pb-4 bg-gray-50 dark:bg-gray-700">
                <button type="submit"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                    Update Acara
                </button>
            </div>
        </form>
    </div>
@endsection
