@php use Filament\Support\Facades\FilamentIcon; @endphp
<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-8 text-center">Timeline</h2>
    <ol class="relative border-l border-gray-200 dark:border-gray-700">
        @foreach ($timelineEvents as $event)
            <li class="mb-10 ml-6">
                <span
                    class="flex absolute -left-3 justify-center items-center w-6 h-6 {{ $event['color'] }} rounded-full ring-8 ring-white dark:ring-gray-900">
                    @if (isset($event['icon']))
                        <x-dynamic-component :component="FilamentIcon::resolve($event['icon']) ?? 'heroicon-o-clock'" class="w-4 h-4 text-white" />
                    @else
                        <x-heroicon-o-clock class="w-4 h-4 text-white" />
                    @endif
                </span>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <time class="mb-1 text-xs font-normal text-gray-400">{{ $event['date'] }}</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $event['title'] }}</h3>
                    <p class="mb-2 text-base font-normal text-gray-500 dark:text-gray-300">{{ $event['description'] }}
                    </p>
                </div>
            </li>
        @endforeach
    </ol>
</div>
