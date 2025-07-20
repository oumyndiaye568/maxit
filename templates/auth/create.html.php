

    <!-- Formulaire principal avec glassmorphism -->
    <div class="w-2/3 bg-white flex items-center justify-center p-8 relative">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50/30 to-orange-100/20"></div>
        
        <div class="w-full max-w-2xl relative z-10">
            <div class="form-container rounded-2xl shadow-2xl p-8">
                <h2 class="text-4xl font-light text-gray-800 mb-8 text-center animate-fade-in">
                    Inscription
                </h2>
                
                <form class="space-y-6">
                    <!-- Nom et Prénom -->
                    <div class="grid grid-cols-2 gap-6 form-group">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Nom</label>
                            <input type="text" placeholder="Entrez votre nom" class="input-field w-full px-4 py-4 rounded-xl text-gray-700 placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Prénom</label>
                            <input type="text" placeholder="Entrez votre prénom" class="input-field w-full px-4 py-4 rounded-xl text-gray-700 placeholder-gray-400">
                        </div>
                    </div>

                    <!-- Numéro de téléphone -->
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Numéro de téléphone</label>
                        <input type="tel" placeholder="Entrez votre numéro de téléphone" class="input-field w-full px-4 py-4 rounded-xl text-gray-700 placeholder-gray-400">
                    </div>

                    <!-- Adresse -->
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Adresse</label>
                        <input type="text" placeholder="Entrez votre adresse" class="input-field w-full px-4 py-4 rounded-xl text-gray-700 placeholder-gray-400">
                    </div>

                    <!-- Numéro Carte d'identité -->
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Numéro Carte d'identité</label>
                        <input type="text" placeholder="Entrez votre numéro de carte nationale d'identité" class="input-field w-full px-4 py-4 rounded-xl text-gray-700 placeholder-gray-400">
                    </div>

                    <!-- Upload de fichiers amélioré -->
                    <div class="grid grid-cols-2 gap-6 form-group">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Carte d'identité Recto</label>
                            <div class="file-upload rounded-xl py-8 px-4 text-center cursor-pointer">
                                <svg class="w-12 h-12 text-orange-400 mx-auto mb-4 icon-hover" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="text-sm text-gray-600">Cliquez pour télécharger</p>
                                <p class="text-xs text-gray-400 mt-1">JPG, PNG, PDF (max. 10MB)</p>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Carte d'identité Verso</label>
                            <div class="file-upload rounded-xl py-8 px-4 text-center cursor-pointer">
                                <svg class="w-12 h-12 text-orange-400 mx-auto mb-4 icon-hover" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="text-sm text-gray-600">Cliquez pour télécharger</p>
                                <p class="text-xs text-gray-400 mt-1">JPG, PNG, PDF (max. 10MB)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Photo -->
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Photo de profil</label>
                        <div class="file-upload rounded-xl py-8 px-4 text-center cursor-pointer">
                            <svg class="w-12 h-12 text-orange-400 mx-auto mb-4 icon-hover" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-sm text-gray-600">Ajoutez votre photo</p>
                            <p class="text-xs text-gray-400 mt-1">JPG, PNG (max. 5MB)</p>
                        </div>
                    </div>

                    <!-- Bouton d'inscription amélioré -->
                    <div class="form-group">
                        <button type="submit" class="btn-primary w-full text-white font-semibold py-4 px-6 rounded-xl text-lg relative overflow-hidden">
                            <span class="relative z-10">Créer mon compte</span>
                        </button>
                    </div>

                    <!-- Liens du bas avec animations -->
                    <div class="flex justify-center items-center space-x-4 text-sm text-gray-500 mt-8 form-group">
                        <a href="#" class="hover:text-orange-500 transition-colors duration-300 font-medium">Déjà un compte ?</a>
                        <div class="w-1 h-1 bg-gray-300 rounded-full"></div>
                        <a href="#" class="hover:text-orange-500 transition-colors duration-300 font-medium">Se connecter</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

   