@extends('layout')

@section('title', 'Create Post')

@section('content')
    <div class="container mx-auto bg-gray-400 rounded-md flex items-center mt-10">
        <div class="text-gray-50 w-full text-center">
            <h2 class="m-2 text-3xl font-bold mb-4">Create Post</h2>
        </div>
    </div>

    <div class="flex justify-start md:justify-center">
        <div class="w-full p-6 md:px-16 md:py-10 overflow-hidden rounded-lg lg:max-w-4xl">

            @if ($errors->any())
                <div class="alert alert-danger mb-4" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <form method="post" action="{{ route('posts.store') }}">
                    @csrf
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="title">
                            Title
                            <input
                                class="block w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="title" value="{{ old('title') }}" placeholder="180" />
                        </label>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-bold text-gray-700" for="body">
                            Content
                            <textarea name="body"
                                  class="block w-full mt-1 p-2 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                  rows="4" placeholder="400">{{ old('body') }}</textarea>
                        </label>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm font-bold text-gray-700" for="published_at">
                            Publish On
                            <input
                                   class="w-full py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                   type="date" name="published_at" value="{{ old('published_at') }}" placeholder="Select date">
                        </label>
                    </div>

                    <div class="flex items-center justify-start mt-4 gap-x-2">
                        <button type="submit"
                                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                            Save
                        </button>
                        <a href="{{ route('posts.index') }}"
                                class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection