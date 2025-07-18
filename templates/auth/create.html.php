<?php $title = 'Mes Comptes'; ?>

<div class="flex flex-col min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 dark:from-gray-900 dark:via-blue-900 dark:to-indigo-900">
  <?php include __DIR__ . '/../layout/partial/dashboard-header.php'; ?>
  
  <main class="flex-1 p-6 md:p-10">
    <div class="max-w-7xl mx-auto">
      <!-- Header avec animation -->
      <div class="flex items-center justify-between mb-8 animate-fade-in">
        <div class="space-y-2">
          <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
            Mes Comptes
          </h1>
          <p class="text-gray-600 dark:text-gray-300">Gérez vos comptes bancaires en toute simplicité</p>
        </div>
        
        <button class="group relative inline-flex items-center justify-center px-6 py-3 overflow-hidden font-medium text-white transition-all duration-300 ease-out border-2 border-blue-500 rounded-full hover:bg-blue-500 hover:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transform hover:scale-105 hover:shadow-lg">
          <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
          <span class="absolute inset-0 w-full h-full bg-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
          <span class="relative flex items-center gap-2 text-blue-600 group-hover:text-white">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Ajouter un compte
          </span>
        </button>
      </div>

      <!-- Statistiques rapides -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total des comptes</p>
              <p class="text-3xl font-bold text-gray-900 dark:text-white">0</p>
            </div>
            <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-full">
              <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v4"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 1v4"></path>
              </svg>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Solde total</p>
              <p class="text-3xl font-bold text-green-600 dark:text-green-400">0 €</p>
            </div>
            <div class="p-3 bg-green-100 dark:bg-green-900 rounded-full">
              <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
              </svg>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Dernière activité</p>
              <p class="text-3xl font-bold text-gray-900 dark:text-white">--</p>
            </div>
            <div class="p-3 bg-purple-100 dark:bg-purple-900 rounded-full">
              <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <!-- Section des comptes -->
      <div class="space-y-6">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Vos comptes</h2>
        
        <!-- État vide moderne -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl border-2 border-dashed border-gray-300 dark:border-gray-600 p-12 text-center hover:border-blue-400 dark:hover:border-blue-500 transition-all duration-300">
          <div class="mx-auto w-24 h-24 bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-900 dark:to-purple-900 rounded-full flex items-center justify-center mb-6">
            <svg class="w-12 h-12 text-blue-500 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
            </svg>
          </div>
          
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
            Aucun compte trouvé
          </h3>
          <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-md mx-auto">
            Vous n'avez pas encore ajouté de compte bancaire. Commencez par en ajouter un pour suivre vos finances.
          </p>
          
          <button class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium rounded-full hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Créer mon premier compte
          </button>
        </div>

        <!-- Template de carte de compte (pour référence future) -->
        <div class="hidden group bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
          <div class="p-6">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="p-2 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Compte Courant</h3>
                  <p class="text-sm text-gray-500 dark:text-gray-400">Banque Populaire</p>
                </div>
              </div>
              <div class="text-right">
                <div class="text-2xl font-bold text-gray-900 dark:text-white">1 234,56 €</div>
                <div class="text-sm text-green-600 dark:text-green-400 flex items-center justify-end">
                  <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l9.2-9.2M17 17V7H7"></path>
                  </svg>
                  +2.3%
                </div>
              </div>
            </div>
            
            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-3 mb-4">
              <p class="text-sm text-gray-600 dark:text-gray-300">
                <span class="font-medium">N° de compte:</span> •••• •••• •••• 1234
              </p>
            </div>
            
            <div class="flex space-x-2">
              <button class="flex-1 bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400 font-medium py-2 px-4 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-800 transition-colors duration-200">
                Voir détails
              </button>
              <button class="flex-1 bg-gray-50 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-medium py-2 px-4 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors duration-200">
                Historique
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<style>
@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in {
  animation: fade-in 0.6s ease-out;
}

/* Effet de glassmorphisme pour les cartes */
.glass-card {
  backdrop-filter: blur(10px);
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

/* Animation pour les boutons */
.btn-animate {
  position: relative;
  overflow: hidden;
}

.btn-animate::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: left 0.5s;
}

.btn-animate:hover::before {
  left: 100%;
}
</style>