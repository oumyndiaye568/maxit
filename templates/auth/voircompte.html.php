
</head>
<body class="bg-white min-h-screen">
    <div class="">
        <main class="flex-1 p-6 md:p-10">
            <div class="max-w-7xl mx-auto">
                <!-- Header avec animation -->
                <div class="flex items-center justify-between mb-8 animate-fade-in">
                    <div class="space-y-2">
                        <h1 class="text-4xl font-bold bg-gradient-to-r from-orange-600 to-orange-500 bg-clip-text text-transparent">
                            Mes Comptes
                        </h1>
                        <p class="text-gray-600">Gérez vos comptes</p>
                    </div>
                    
                    <a href="/ajouter-compte" class="group relative inline-flex items-center justify-center px-6 py-3 overflow-hidden font-medium text-white transition-all duration-300 ease-out border-2 border-orange-500 rounded-full hover:bg-orange-500 hover:border-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2 transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-orange-500 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="absolute inset-0 w-full h-full bg-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <span class="relative flex items-center gap-2 text-orange-600 group-hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Ajouter un compte
                    </span>
                </a>
                </div>

                <!-- Section des comptes -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-semibold text-gray-900">Vos comptes</h2>
                    
                    <!-- Compte Principal -->
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <div class="p-2 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900">Compte principal</h3>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-gray-900">100.000</div>
                                    <div class="text-sm text-red-600 flex items-center justify-end">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-orange-50 rounded-lg p-3 mb-4">
                                <p class="text-sm text-gray-600">
                                    <span class="font-medium">N° de compte:</span> •••• •••• •••• 9156
                                </p>
                            </div>
                            
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-orange-50 text-orange-600 font-medium py-2 px-4 rounded-lg hover:bg-orange-100 transition-colors duration-200">
                                    Voir détails
                                </button>
                                <button class="flex-1 bg-gray-50 text-gray-600 font-medium py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                                    Historique
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Compte Secondaire -->
                    <div class="group bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <div class="p-2 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900">Compte secondaire</h3>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-gray-900">100.000</div>
                                    <div class="text-sm text-red-600 flex items-center justify-end">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-orange-50 rounded-lg p-3 mb-4">
                                <p class="text-sm text-gray-600">
                                    <span class="font-medium">N° de compte:</span> •••• •••• •••• 9156
                                </p>
                            </div>
                            
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-orange-50 text-orange-600 font-medium py-2 px-4 rounded-lg hover:bg-orange-100 transition-colors duration-200">
                                    Voir détails
                                </button>
                                <button class="flex-1 bg-gray-50 text-gray-600 font-medium py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                                    Historique
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>