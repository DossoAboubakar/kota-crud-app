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

        <li class="menu-item  <?php echo ($title == 'Admin') ? 'active' : ''; ?>" id="menu-admin">
            <a href="admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-shield"></i>
                <div data-i18n="admin">Admin</div>
            </a>
        </li>
        <li class="menu-item <?php echo ($title == 'Addresses') ? 'active' : ''; ?>" id="menu-addresses">
            <a href="addresse" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-pin"></i>
                <div data-i18n="addresses">Addresses</div>
            </a>
        </li>
        

        <li class="menu-item  <?php echo ($title == 'Categories') ? 'active' : ''; ?>" id="menu-categories">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category-alt"></i>
                <div data-i18n="categories">Categories</div>
            </a>
        </li>

        <li class="menu-item  <?php echo ($title == 'Annonce') ? 'active' : ''; ?>" id="menu-annonce1">
            <a href="annonce" class="menu-link">
                <i class="menu-icon tf-icons bx bx-broadcast"></i>
                <div data-i18n="reinit">Annonce </div>
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
                <i class="menu-icon tf-icons bx bx-id-card"></i>
                <div data-i18n="categories">Clients</div>
            </a>
        </li>

        
        <li class="menu-item  <?php echo ($title == 'Communes') ? 'active' : ''; ?>" id="menu-communes">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div data-i18n="categories">Communes</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Equipements') ? 'active' : ''; ?>" id="menu-equipements">
            <a href="equipement" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cube"></i>
                <div data-i18n="categories">Equipements</div>
            </a>
        </li>
        
       
        <li class="menu-item  <?php echo ($title == 'Favoris') ? 'active' : ''; ?>" id="menu-favoris">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-heart"></i>
                <div data-i18n="categories">Favoris</div>
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

        <li class="menu-item  <?php echo ($title == 'Messages et contacts') ? 'active' : ''; ?>" id="menu-messagesContacts">
            <a href="contacts" class="menu-link">
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

        <!-- <li class="menu-item  <?php echo ($title == 'Recherches') ? 'active' : ''; ?>" id="menu-recherches">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-search"></i>
                <div data-i18n="categories">Recherches</div>
            </a>
        </li> -->
     
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
        <li class="menu-item  <?php echo ($title == 'Web users') ? 'active' : ''; ?>" id="menu-webUsers">
            <a href="webUser" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe-alt"></i>
                <div data-i18n="categories">Web users</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Web types') ? 'active' : ''; ?>" id="menu-webTypes">
            <a href="webType" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="categories">Web types</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Reinitialisations') ? 'active' : ''; ?>" id="menu-reinit">
            <a href="reinit" class="menu-link">
                <i class="menu-icon tf-icons bx bx-refresh"></i>
                <div data-i18n="reinit">Reinit</div>
            </a>
        </li>
        
        <li class="menu-item  <?php echo ($title == 'Categorie 1') ? 'active' : ''; ?>" id="menu-categorie1">
            <a href="categorie1" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder-open"></i>
                <div data-i18n="reinit">Categorie 1</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Categories services') ? 'active' : ''; ?>" id="menu-categorieService">
            <a href="categorie-service" class="menu-link">
                <i class="menu-icon tf-icons bx bx-briefcase-alt"></i>
                <div data-i18n="reinit">Categorie services</div>
            </a>
        </li>
        <li class="menu-item  <?php echo ($title == 'Categorie services liste') ? 'active' : ''; ?>" id="menu-categorieServiceListe">
            <a href="categorie-service-liste" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div data-i18n="reinit">Categorie services liste</div>
            </a>
        </li>
        
    </ul>
    </div>
   
</aside>