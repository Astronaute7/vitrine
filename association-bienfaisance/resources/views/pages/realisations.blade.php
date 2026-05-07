@extends('layouts.app')

@section('title', 'Nos Réalisations - Association de Bienfaisance')
@section('meta_description', 'Découvrez nos projets accomplis et l\'impact de nos actions humanitaires')

@section('content')
<section class="bg-gradient-to-r from-green-600 to-green-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Nos Réalisations</h1>
        <p class="text-xl max-w-3xl mx-auto">
            Grâce à votre soutien, nous avons accompli de grandes choses
        </p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($realisations as $realisation)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale">
                <div class="h-48 bg-gradient-to-r from-red-400 to-red-600 flex items-center justify-center">
                    <div class="text-white text-center">
                        <div class="text-5xl mb-2">
                            @if($loop->iteration == 1) 🍲
                            @elseif($loop->iteration == 2) 📚
                            @elseif($loop->iteration == 3) 💉
                            @elseif($loop->iteration == 4) 🌱
                            @elseif($loop->iteration == 5) 💻
                            @else 🎉
                            @endif
                        </div>
                        <div class="text-3xl font-bold">{{ $realisation['chiffre'] }}</div>
                        <div class="text-sm">{{ $realisation['unite'] }}</div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-sm text-red-600 mb-2">{{ $realisation['date'] }}</div>
                    <h3 class="text-xl font-bold mb-3">{{ $realisation['titre'] }}</h3>
                    <p class="text-gray-600 mb-3">{{ $realisation['description'] }}</p>
                    <div class="bg-green-50 p-3 rounded-lg mt-4">
                        <p class="text-green-800 text-sm font-semibold">
                            ✓ {{ $realisation['impact'] }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-8">Notre Impact Global</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-6">
                <div class="text-4xl font-bold text-green-600 mb-2">+5000</div>
                <p class="text-gray-600">Vies transformées</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-green-600 mb-2">+200</div>
                <p class="text-gray-600">Bénévoles formés</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-green-600 mb-2">10</div>
                <p class="text-gray-600">Villes couvertes</p>
            </div>
        </div>
    </div>
</section>
@endsection
