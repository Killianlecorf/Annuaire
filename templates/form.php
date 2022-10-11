<section class="form-part">
    <div class="form-content">
        <h1>Ajouter</h1>
        <form id="form-add" action="/annuaire/controller/controller.php" method="POST">
            <label for="">Nom</label>
            <input name="user_name" type="text" placeholder="Nom" required>
            <label for="">prenom</label>
            <input name="user_lname" type="text" placeholder="Prénom" required>
            <label for="">E-mail</label>
            <input name="user_email" type="text" placeholder="Email" required>
            <label for="">Numéro</label>
            <input name="user_number" type="text" placeholder="Numéro" required>
            <label for="">Spécialité</label>
            <input name="user_spe" type="text" placeholder="Spécialité" required>
            <input id="submit-button" type="submit">
        </form>
    </div>
</section>
