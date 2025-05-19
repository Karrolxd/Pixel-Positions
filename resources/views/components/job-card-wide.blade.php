@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="mt-3 group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">{{ $job->title }}</h3>

        <p class="text-sm text-gray-400 mt-auto">{{$job->schedule}} - {{ $job->salary }}</p>
    </div>

    <div class="">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>

    </div>
</x-panel>
