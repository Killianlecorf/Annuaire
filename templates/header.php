<header>
    <section class="header-part">
        <div class="header-content">
            <div class="logo-content">
                <img class="logo" src="Assets/img/logo_nws-1.jpg" alt="Logo-annuaire-NWS">
            </div>
        </div>
        <div class="nav-content">
            <button onclick="displayBlockForm()" id="button-insert">Ajouter</button>
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
        <div class="button-content-filter">
            <div class="button-filter">
                <form action="index.php" method="POST">
                    <input type="hidden" name="dev" value="dev">
                    <button type="submit" id="filterDev" >Trier par développeur</button>
                </form>
                <form action="index.php" method="POST">
                    <input type="hidden" name="com" value="com">
                    <button type="submit" id="filterCom">Trier par community manager</button>
                </form>
                <form action="index.php" method="POST">
                    <input type="hidden" name="cg" value="cg">
                    <button type="submit" id="filterCg">Trier par com-graph</button>
                </form>
                <form action="index.php" method="POST">
                    <input type="hidden" name="mark" value="mark">
                    <button type="submit" id="filterMark">Trier par marketing</button>
                </form>
                <form action="index.php" method="POST">
                    <input type="hidden" name="reset" value="reset">
                    <button type="submit" id="filterReset">Reset les filtres</button>
                </form>
            </div>
        </div>
    </section>
</header>