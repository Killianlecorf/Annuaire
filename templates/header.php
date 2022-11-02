<header>
    <section class="header-part">
        <div class="header-content">
            <div class="logo-content">
                <img class="logo" src="Assets/img/logo_nws-1.jpg" alt="Logo-annuaire-NWS">
            </div>
        </div>
        <div class="nav-content">
            <button onclick="displayBlockForm()" id="button-insert">Ajouter</button>
            <button onclick="displayBlockForm()" id="button-insert2">Ajouter</button>
        </div>
    </section>
    <section class="filter-part">
        <div class="filter-content">

        </div>
        <div class="search-content">
                <h2>Rechercher par le prenom</h2>
            <form action="index.php" method="get">
                <input class="search-header" type="search" name="q" placeholder="Rechercher un étudiant" value="<?= htmlentities($_GET['q'] ?? null) ?>">
                <button class="submit-header">Rechercher</button> 
            </form>
        </div>
        <!-- <div class="button-content-filter">
            <button>trier par lettre</button>
        </div> -->
    </section>
</header>