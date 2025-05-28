<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="max-height: 100vh; overflow-y: auto;">
    <div class="app-brand demo">
        <a href="./" class="app-brand-link">
            <span class="app-brand-logo demo mt-1">
                <svg width="800px" height="800px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M896 192H128c-35.3 0-64 28.7-64 64v512c0 35.3 28.7 64 64 64h576.6l191.6 127.7L896 832c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64z"
                        fill="#3D5AFE" />
                    <path
                        d="M640 512c0-125.4-51.5-238.7-134.5-320H128c-35.3 0-64 28.7-64 64v512c0 35.3 28.7 64 64 64h377.5c83-81.3 134.5-194.6 134.5-320z"
                        fill="#536DFE" />
                    <path d="M256 512m-64 0a64 64 0 1 0 128 0 64 64 0 1 0-128 0Z" fill="#FFFF8D" />
                    <path d="M512 512m-64 0a64 64 0 1 0 128 0 64 64 0 1 0-128 0Z" fill="#FFFF00" />
                    <path d="M768 512m-64 0a64 64 0 1 0 128 0 64 64 0 1 0-128 0Z" fill="#FFEA00" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-3">back-office</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div>
    <ul class="menu-inner py-1">
    <!-- Dashboard -->
        <li class="menu-item  <?php echo ($title == 'Dashboard') ? 'active' : ''; ?>">
            <a href="./" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item <?php echo ($title == 'Abonnements') ? 'active open' : ''; ?>" id="menu-abonnement">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx-id-card"></i>
                <div data-i18n="abonnements">Abonnements</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Actualités') ? 'active' : ''; ?> " id="menu-actualités">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="alertes">Actualités</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Alertes') ? 'active' : ''; ?>" id= "menu-alertes">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bell"></i>
                <div data-i18n="alertes">Alertes</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($title == 'Alertes & Commandités') ? 'active' : ''; ?>" id="menu-alertesCmdt">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-notification"></i>
                <div data-i18n="alertes-commodités">Alertes & Commodités</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Alertes & Localités') ? 'active' : ''; ?>" id="menu-alertesLocalites">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="alertes-localités">Alertes & Localités</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Années') ? 'active' : ''; ?>" id="menu-années">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map"></i>
                <div data-i18n="reviews">Années</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($title == 'Annonces') ? 'active' : ''; ?>" id="menu-annonces">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Annonces">Annonces</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Annonces & Commodités') ? 'active' : ''; ?>" id="menu-annoncesCommodités">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="annonces-commodités">Annonces & Cmdts</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Categories') ? 'active' : ''; ?>" id="menu-categories">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category-alt"></i>
                <div data-i18n="categories">Categories</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Categories & Actualités') ? 'active' : ''; ?>" id="menu-categoriesActu">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category-alt"></i>
                <div data-i18n="categories">Categories & Actualités</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Categories & Clients') ? 'active' : ''; ?>" id="menu-categoriesClients">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="categories">Categories & Clients</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Clients') ? 'active' : ''; ?>" id="menu-clients">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="categories">Clients</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Commodités') ? 'active' : ''; ?>" id="menu-commodités">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cube"></i>
                <div data-i18n="categories">Commodités</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Communes') ? 'active' : ''; ?>" id="menu-communes">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div data-i18n="categories">Communes</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Contacts') ? 'active' : ''; ?>" id="menu-contacts">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-phone"></i>
                <div data-i18n="categories">Contacts</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Démenagements') ? 'active' : ''; ?>" id="menu-demenagements">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="categories">Démenagements</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Dossiers') ? 'active' : ''; ?>" id="menu-dossiers">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder"></i>
                <div data-i18n="categories">Dossiers</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Equipes') ? 'active' : ''; ?>" id="menu-equipes">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                <div data-i18n="categories">Equipes</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Equipements') ? 'active' : ''; ?>" id="menu-equipements">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="categories">Equipements</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Estimations') ? 'active' : ''; ?>" id="menu-estimations">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                <div data-i18n="categories">Estimations</div>
            </a>
        </li>
        
        <li class="menu-item  <?php echo ($title == 'Estimations & Commodités') ? 'active' : ''; ?>" id="menu-estimationsCmdt">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bar-chart-alt"></i>
                <div data-i18n="categories">Estimations & Commodités</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Favoris') ? 'active' : ''; ?>" id="menu-favoris">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-heart"></i>
                <div data-i18n="categories">Favoris</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Horaires') ? 'active' : ''; ?>" id="menu-horaires">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div data-i18n="categories">Horaires</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Images des agences') ? 'active' : ''; ?>" id="menu-imagesAgences">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="categories">Images des agences</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Liste des indicateurs') ? 'active' : ''; ?>" id="menu-indicateurs">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="categories">Liste des indicateurs</div>
            </a>
        </li>
         <li class="menu-item  <?php echo ($title == 'Liste des localisations') ? 'active' : ''; ?>" id="menu-localisations">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-pin"></i>
                <div data-i18n="categories">Liste des localisations</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Messages et contacts') ? 'active' : ''; ?>" id="menu-messagesContacts">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-detail"></i>
                <div data-i18n="categories">Messages et contacts</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Paiements') ? 'active' : ''; ?>" id="menu-paiements">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-credit-card"></i>
                <div data-i18n="categories">Paiements</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Pays') ? 'active' : ''; ?>" id="menu-pays">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe"></i>
                <div data-i18n="categories">Pays</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Recherches') ? 'active' : ''; ?>" id="menu-recherches">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-search"></i>
                <div data-i18n="categories">Recherches</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Relances') ? 'active' : ''; ?>" id="menu-relances">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-revision"></i>
                <div data-i18n="categories">Relances</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Saves') ? 'active' : ''; ?>" id="menu-saves">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-save"></i>
                <div data-i18n="categories">Saves</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Signalements') ? 'active' : ''; ?>" id="menu-signalements">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-error"></i>
                <div data-i18n="categories">Signalements</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Situations') ? 'active' : ''; ?>" id="menu-situations">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map"></i>
                <div data-i18n="categories">Situations</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Transactions') ? 'active' : ''; ?>" id="menu-transactions">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-transfer-alt"></i>
                <div data-i18n="categories">Transactions</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Types de bien & Details') ? 'active' : ''; ?>" id="menu-typesBienDetails">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-alt"></i>
                <div data-i18n="categories">Types Bien & Details</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Vendeurs') ? 'active' : ''; ?>" id="menu-vendeurs">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-voice"></i>
                <div data-i18n="categories">Vendeurs</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Villes') ? 'active' : ''; ?>" id="menu-villes">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building-house"></i>
                <div data-i18n="categories">Villes</div>
            </a>
        </li>
    </ul>
    </div>
   
</aside>