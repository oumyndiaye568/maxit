
    <div class="min-h-screen flex items-center justify-center p-6 ">
        <div class="max-w-md w-full">
            <!-- Header -->
            <div class="text-center mb-8 animate-fade-in">
                <h1 class="text-3xl font-bold bg-gradient-to-r from-orange-600 to-orange-500 bg-clip-text text-transparent mb-2">
                    Ajouter un compte
                </h1>
                <p class="text-gray-600">Créez un  compte secondaire</p>
            </div>

            <!-- Formulaire -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden animate-fade-in">
                <div class="p-8">
                    <form class="space-y-6">
                        <!-- Numéro de téléphone -->
                        <div>
                            <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">
                                Numéro de téléphone
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <input type="tel" id="telephone" name="telephone" 
                                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors duration-200"
                                       placeholder="tel: +221  "
                                       required>
                            </div>
                        </div>

                        <!-- Solde initial -->
                        <div>
                            <label for="solde" class="block text-sm font-medium text-gray-700 mb-2">
                                Solde initial
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    
                                </div>
                                <input type="text" id="solde" name="solde" 
                                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors duration-200"
                                       placeholder=""
                                       required>
                                <!-- <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 text-sm">€</span>
                                </div> -->
                            </div>
                        </div>

                        <!-- Boutons -->
                        <div class="flex space-x-4 pt-4">
                            <button type="button" 
                                    class="flex-1 bg-gray-50 text-gray-600 font-medium py-3 px-4 rounded-lg hover:bg-gray-100 transition-colors duration-200 border border-gray-300">
                                Annuler
                            </button>
                            <button type="submit" 
                                    class="flex-1 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-medium py-3 px-4 rounded-lg hover:from-orange-600 hover:to-orange-700 transition-all duration-200 transform hover:scale-105 hover:shadow-lg">
                                Créer le compte
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Message d'information -->
            

            <!-- Lien retour -->
           
        </div>
    </div>
