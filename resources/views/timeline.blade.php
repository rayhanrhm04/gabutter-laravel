<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gabutter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-white">
                <div class="card-body">
                    <form action="{{route('tweets.store')}}" method="post">
                        @csrf
                        <textarea name="content" class="textarea textarea-bordered w-full" placeholder="Apa yang kamu pikirkan?" id="" cols="30" rows="5"></textarea>
                    <input type="submit" value="Tweet" class="btn btn-primary">
                    </form>
                </div>
            </div>
            @foreach ($tweets as $tweet)
            <div class="card my-4 bg-white ">
                    <div class="card-body">
                        <h2 class="text-xl font-bold">{{$tweet->user->name}}</h2>
                        <p>{{$tweet->content}}</p>
                        <div class="text-end">
                            <a href="{{route('tweets.edit', $tweet->id)}}" class="link link-hover text-blue-400">Edit</a>

                            <span class="text-sm">{{$tweet->created_at->diffForHumans()}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
