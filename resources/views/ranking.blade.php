<x-app-layout>
    <x-slot name="header">
        <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
            Ranking
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-md shadow-sm overflow-hidden">

                {{-- Cabecera tabla --}}
                <div class="grid grid-cols-12 px-4 py-2 bg-gray-900 border-b border-gray-700">
                    <div class="col-span-1 font-barlow font-bold text-xs uppercase tracking-widest text-white">#</div>
                    <div class="col-span-9 font-barlow font-bold text-xs uppercase tracking-widest text-white">Jugador</div>
                    <div class="col-span-2 text-right font-barlow font-bold text-xs uppercase tracking-widest text-white">Pts</div>
                </div>

                {{-- Filas --}}
                @foreach($users as $user)
                @php
                    $pos       = $loop->iteration;
                    $isMe      = $user->id === auth()->id();
                    $isTop3    = $pos <= 3;
                    $medals    = [1 => '🥇', 2 => '🥈', 3 => '🥉'];
                @endphp

                <div class="grid grid-cols-12 items-center px-4 py-3 border-b border-gray-100
                    @if($isMe && $isTop3)    bg-blue-50
                    @elseif($isMe)           bg-blue-50
                    @elseif($isTop3)         bg-gray-50
                    @else                    bg-white
                    @endif
                    hover:bg-gray-50 transition duration-100">

                    {{-- Posición --}}
                    <div class="col-span-1">
                        @if($isTop3)
                            <span class="text-lg">{{ $medals[$pos] }}</span>
                        @else
                            <span class="font-barlow font-bold text-sm text-gray-400">{{ $pos }}</span>
                        @endif
                    </div>

                    {{-- Nombre --}}
                    <div class="col-span-9 flex items-center gap-2">
                        <span class="font-oswald font-semibold text-base uppercase tracking-wide
                            @if($isTop3) text-gray-900 @else text-gray-600 @endif">
                            {{ $user->name }}
                        </span>
                        @if($isMe)
                            <span class="font-barlow font-bold text-xs uppercase tracking-widest text-blue-800 bg-blue-100 px-2 py-0.5 rounded-full">Tú</span>
                        @endif
                        @if($pos === 1)
                            <span class="font-barlow font-bold text-xs uppercase tracking-widest text-yellow-600 bg-yellow-50 px-2 py-0.5 rounded-full">Líder</span>
                        @endif
                    </div>

                    {{-- Puntos --}}
                    <div class="col-span-2 text-right">
                        <span class="font-oswald font-semibold
                            @if($pos === 1)      text-xl text-yellow-500
                            @elseif($isTop3)     text-lg text-gray-700
                            @elseif($isMe)       text-base text-blue-800
                            @else                text-base text-gray-500
                            @endif">
                            {{ $user->total_points }}
                        </span>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>