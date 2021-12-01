<script src="public/js/offerForm.js"></script>

<?php /** @var Array $data */ ?>

<div class="row justify-content-center" >
    <div class="col-md-8">
<h4 style="text-align: center; font-size: larger">Pridajte vlastnú ponuku:</h4>
<form method="post" action="?c=home&a=shareOffer">
    <div class="form-group">
        <p>Prosím zadajte o čo žiadate:</p>
         <input type="radio" id="one" name="type" value="one" checked>
         <label for="one">Doučím</label><br>
         <input type="radio" id="two" name="type" value="two">
         <label for="two">Hľadám doučovanie</label><br>
    </div>
    <div class="form-group">



        <label for="comment">Nadpis:</label>
        <input type = "text" name="title" class="form-control" rows="1" id="title" required>
        <small id="emailHelp" class="form-text text-muted">Zadajte nadpis, názov predmetu a podobne.</small>
    </div>
    <br>

    <div class="form-group">
        <label for="info">Stručné informácie:</label>
        <input type = "text" name="info" class="form-control" value="" id="info" required>
        <small id="emailHelp" class="form-text text-muted">Zadajte základné informácie k doučovaniu, ktoré budú zobrazené na hlavnej stránke.</small>

    </div>
    <br>
    <div class="form-group">
        <label for="info">Informácie:</label>
        <input type = "text" name="moreinfo" class="form-control" rows="5" id="moreinfo" required>
        <small id="emailHelp" class="form-text text-muted">Zadajte ďalšie potrebné informácie, vaše požiadavky a podobne.</small>

    </div>
    <br>

    <div class="form-group">
        <label for="place">Miesto:</label>
        <input type = "text" name="place"  class="form-control" rows="1" id="place" required>
        <small id="emailHelp" class="form-text text-muted">Zadajte požiadavku na miesto doučovania. Môže to byť online, konkrétne mesto...</small>
    </div>
    <br>
    <div class="form-group">
        <label for="place">Plat:</label>
        <input type = "text" name="pay"  class="form-control" rows="1" id="pay" required>
        <small id="emailHelp" class="form-text text-muted">Zadajte požiadavku na plat/bez platu.</small>
    </div>
    <br>
    <div class="form-group">
        <label for="category">Dosiahnuté vzdelanie :</label>
        <select class="form-select mt-3" name="education" id="education">
            <option>Základné vzdelanie</option>
            <option>Stredoškolské s maturitou</option>
            <option>Stredoškolské bez maturity</option>
            <option>Nadstavbové/vyššie odborné</option>
            <option>Vysokoškolské I. stupňa</option>
            <option>Vysokoškolské II. stupňa</option>
            <option>Vysokoškolské III. stupňa</option>
        </select>

    </div>

    <br>
    <div class="form-group">
        <label for="place">Kurzy,certifikáty:</label>
        <input type = "text"  name="courses"  class="form-control" rows="1" id="courses" >
        <small id="emailHelp" class="form-text text-muted">Tu môžete zadať svoje kurzy a certikáty.</small>
    </div>
    <br>
    <div class="form-group">
        <label for="exampleInputEmail1">Emailová addresa: </label>
        <input type="email" id="email" name="contact" class="form-control"  aria-describedby="emailHelp" placeholder="a@a.sk" required>
        <small id="emailHelp" class="form-text text-muted">Zadajte e-mailovú adresu, na ktorú chcete, aby vás záujemci kontaktovali.
        Nemusí sa zhodovať s adresou prihlásenia.</small>
    </div>
    <br>
    <div id="submit-info">
        Zadajte všetky údaje v správnom tvare!
    </div>
    <div class="d-grid">
        <button class="btn btn-primary btn-login text-uppercase fw-bold" id="submit" type="submit">Pridaj ponuku
        </button>
    </div>
</form>
    </div></div>