<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'MAXITSA' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="MAX.webp" type="image/x-icon">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'maxitsa-orange': '#FF6B35',
                        'maxitsa-dark': '#2D2D2D'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b">
            <div class="flex items-center justify-between px-6 py-4">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-maxitsa-orange rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-lg">M</span>
                    </div>
                    <h1 class="text-xl font-semibold text-gray-800">Aperçu du compte</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">  <?php echo $name.' '.$prenon ?>  </span>
                    <button class="bg-maxitsa-orange text-white px-4 py-2 rounded-lg font-medium hover:bg-orange-600 transition-colors">
                        MAXITSA
                    </button>
                </div>
            </div>
        </header>

        <div class="flex">
           <aside class="w-28 bg-gradient-to-b from-maxitsa-orange via-red-500 to-maxitsa-orange-50 min-h-screen  relative overflow-hidden  border-white/20">
            <div class="absolute inset-0 bg-gradient-to-br from-white/10 via-transparent to-black/10 pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent pointer-events-none"></div>
            
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -skew-x-12 animate-shimmer pointer-events-none" style="background-size: 200% 100%;"></div>
            
            <div class="absolute top-0 left-0 w-full h-40 bg-gradient-to-b from-white/20 to-transparent pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
            
            <div class="flex justify-center pt-6 pb-8 relative z-10">
                <div class="w-12 h-12 bg-white/25 backdrop-blur-md rounded-2xl flex items-center justify-center shadow-xl border border-white/40 animate-glow">
                    <div class="w-6 h-6 bg-white rounded-lg shadow-inner"></div>
                </div>
            </div>
            
            <div class="flex flex-col items-center space-y-6 relative z-10 px-2">
                <div class="group relative icon-container">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center hover:bg-white/30 transition-all duration-500 cursor-pointer transform hover:scale-110 hover:rotate-6 shadow-xl border border-white/30 animate-float hover:animate-glow relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent rounded-2xl"></div>
                        <svg class="w-8 h-8 text-white group-hover:scale-110 transition-transform duration-300 relative z-10" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl animate-ripple"></div>
                        </div>
                    </div>
                    <div class="absolute left-24 top-1/2 transform -translate-y-1/2 bg-gray-900/95 backdrop-blur-sm text-white px-5 py-3 rounded-xl text-sm opacity-0 group-hover:opacity-100 transition-all duration-300 whitespace-nowrap pointer-events-none shadow-2xl border border-gray-700/50 animate-slide-in">
                        <span class="font-semibold">Dashboard</span>
                        <div class="text-xs text-gray-300 mt-1">Vue d'ensemble</div>
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1 w-2 h-2 bg-gray-900 rotate-45 border-l border-b border-gray-700/50"></div>
                    </div>
                </div>

                <div class="group relative icon-container">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center hover:bg-white/30 transition-all duration-500 cursor-pointer transform hover:scale-110 hover:rotate-6 shadow-xl border border-white/30 animate-float hover:animate-glow relative overflow-hidden" style="animation-delay: 0.8s;">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent rounded-2xl"></div>
                        <svg class="w-8 h-8 text-white group-hover:scale-110 transition-transform duration-300 relative z-10" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"/>
                        </svg>
                        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl animate-ripple"></div>
                        </div>
                    </div>
                    <div class="absolute left-24 top-1/2 transform -translate-y-1/2 bg-gray-900/95 backdrop-blur-sm text-white px-5 py-3 rounded-xl text-sm opacity-0 group-hover:opacity-100 transition-all duration-300 whitespace-nowrap pointer-events-none shadow-2xl border border-gray-700/50 animate-slide-in">
                        <span class="font-semibold">Portefeuille</span>
                        <div class="text-xs text-gray-300 mt-1">Gérer vos fonds</div>
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1 w-2 h-2 bg-gray-900 rotate-45 border-l border-b border-gray-700/50"></div>
                    </div>
                </div>

                <div class="group relative icon-container">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center hover:bg-white/30 transition-all duration-500 cursor-pointer transform hover:scale-110 hover:rotate-6 shadow-xl border border-white/30 animate-float hover:animate-glow relative overflow-hidden" style="animation-delay: 1.6s;">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent rounded-2xl"></div>
                        <svg class="w-8 h-8 text-white group-hover:scale-110 transition-transform duration-300 relative z-10" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414L2.586 7l3.707-3.707a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-white/20 rounded-2xl animate-ripple"></div>
                        </div>
                    </div>
                    <div class="absolute left-24 top-1/2 transform -translate-y-1/2 bg-gray-900/95 backdrop-blur-sm text-white px-5 py-3 rounded-xl text-sm opacity-0 group-hover:opacity-100 transition-all duration-300 whitespace-nowrap pointer-events-none shadow-2xl border border-gray-700/50 animate-slide-in">
                        <span class="font-semibold">Transfert</span>
                        <div class="text-xs text-gray-300 mt-1">Envoyer de l'argent</div>
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1 w-2 h-2 bg-gray-900 rotate-45 border-l border-b border-gray-700/50"></div>
                    </div>
                </div>

                
            </div>

            <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2">
                <a href="/logout" class="group relative icon-container">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center hover:bg-red-500/40 transition-all duration-500 cursor-pointer transform hover:scale-110 hover:rotate-6 shadow-xl border border-white/30 animate-float hover:animate-pulse-soft relative overflow-hidden" style="animation-delay: 3.2s;">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-red-500/10 rounded-2xl"></div>
                        <svg class="w-8 h-8 text-white group-hover:scale-110 transition-transform duration-300 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-red-500/30 rounded-2xl animate-ripple"></div>
                        </div>
                    </div>
                    <div class="absolute left-24 top-1/2 transform -translate-y-1/2 bg-red-600/95 backdrop-blur-sm text-white px-5 py-3 rounded-xl text-sm opacity-0 group-hover:opacity-100 transition-all duration-300 whitespace-nowrap pointer-events-none shadow-2xl border border-red-400/50 animate-slide-in">
                        <span class="font-semibold">Déconnexion</span>
                        <div class="text-xs text-red-200 mt-1">Quitter l'application</div>
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1 w-2 h-2 bg-red-600 rotate-45 border-l border-b border-red-400/50"></div>
                    </div>
                </a>
            </div>

           
        </aside>


            <main class="flex-1 p-6">
                <?php echo $content ?>
            </main>
        </div>
    </div>
</body>
</html>
