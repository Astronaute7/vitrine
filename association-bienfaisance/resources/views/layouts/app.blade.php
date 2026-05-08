<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Association de bienfaisance - Agissons ensemble pour un monde meilleur')">
    <title>@yield('title', 'Association de Bienfaisance')</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Header/Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('accueil') }}" class="text-2xl font-bold text-red-600">
                        ❤️ Association
                    </a>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('accueil') }}" class="text-gray-700 hover:text-red-600 transition font-medium">
                        Accueil
                    </a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-red-600 transition font-medium">
                        Services
                    </a>
                    <a href="{{ route('realisations') }}" class="text-gray-700 hover:text-red-600 transition font-medium">
                        Réalisations
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-red-600 transition font-medium">
                        Contact
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="{{ route('accueil') }}" class="block py-2 text-gray-700 hover:text-red-600">Accueil</a>
                <a href="{{ route('services') }}" class="block py-2 text-gray-700 hover:text-red-600">Services</a>
                <a href="{{ route('realisations') }}" class="block py-2 text-gray-700 hover:text-red-600">Réalisations</a>
                <a href="{{ route('contact') }}" class="block py-2 text-gray-700 hover:text-red-600">Contact</a>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="fade-in">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">❤️ Association</h3>
                    <p class="text-gray-400">Agissons ensemble pour un monde meilleur et plus solidaire.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('accueil') }}" class="hover:text-red-400">Accueil</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-red-400">Services</a></li>
                        <li><a href="{{ route('realisations') }}" class="hover:text-red-400">Réalisations</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-red-400">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Nous suivre</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-red-400 text-2xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-red-400 text-2xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-red-400 text-2xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-red-400 text-2xl"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> 00228 98 91 48 95</li>
                        <li><i class="fas fa-envelope mr-2"></i> contact@association.org</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> 123 Rue des Chamerops Lome, Adewii TOGO</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Association de Bienfaisance. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Mobile menu toggle
        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
