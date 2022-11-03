<div onclick="displayNoneForm()" id="fond-form"></div>
<section id="form" class="form-part">
    <div class="form-content">
        <div class="close-popup-form">
            <button class="close-popup" onclick="displayNoneForm()"><i id="close-form-croix" class="fa-solid fa-xmark"></i></button>
        </div>
        <h1>Ajouter</h1>
        <form id="form-add" action="/annuaire/controller/usercontroller.php" method="POST">
            <label for="">Nom</label>
            <input name="user_name" type="text" placeholder="Nom" required>
            <label for="">prenom</label>
            <input name="user_lname" type="text" placeholder="Prénom" required>
            <label for="">E-mail</label>
            <input name="user_email" type="text" placeholder="Email" required>
            <label for="">Numéro</label>
            <input name="user_number" type="number" placeholder="Numéro" minlength="10" required>
            <label for="">Spécialité</label>
            <select name="user_spe" id="select-add">
            <option value="0">--Choisir une spécialité--</option>
                <option>developpement</option>
                <option>E-Marketing</option>
                <option>Communication graphique</option>
                <option>Community manager</option>
            </select>
            <input id="submit-button" type="submit">
        </form>
    </div>
</section>
<script src="../Annuaire/Assets/js/script.js"></script>
