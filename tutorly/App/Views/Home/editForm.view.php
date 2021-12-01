<?php /** @var Array $data */ ?>
<?php foreach($data['offers'] as $post) {
if ($post->getId() == $data['postid']) {
    $offer = $post;
}}?>

<script src="public/js/editForm.js"></script>


<div class="row justify-content-center" >
    <div class="col-md-8">

        <h4 style="text-align: center; font-size: larger">Upravenie ponuky:  "<?= $offer->getTitle()?>"</h4>

        <form method="post" action="?c=home&a=editOffer">
            <div class="form-group">
                <input type="hidden" name="parid" value="<?=$offer->getId()?>">

                <label for="comment">Nadpis:</label>
                <input type = "text" name="title" class="form-control" rows="1" id="title" value="<?= $offer->getTitle()?>" required>
                <small id="emailHelp" class="form-text text-muted">Zadajte nadpis vašej ponuky, napríklad "Doučím: Jazyk PHP"</small>
            </div>
            <br>

            <div class="form-group">
                <label for="info">Stručné informácie:</label>
                <input type = "text" name="info" class="form-control" rows="5" id="info" value="<?= $offer->getInfo()?>" required>
                <small id="emailHelp" class="form-text text-muted">Zadajte základné informácie k doučovaniu, ktoré budú zobrazené na hlavnej stránke.</small>

            </div>
            <br>
            <div class="form-group">
                <label for="info">Informácie:</label>
                <input type = "text" name="moreinfo" class="form-control" rows="5" id="moreinfo" value="<?= $offer->getMoreinfo()?>" required>
                <small id="emailHelp" class="form-text text-muted">Zadajte ďalšie potrebné informácie, vaše požiadavky a podobne.</small>

            </div>
            <br>

            <div class="form-group">
                <label for="place">Miesto:</label>
                <input type = "text" name="place"  class="form-control" rows="1" id="place" value="<?= $offer->getPlace()?>" required>
                <small id="emailHelp" value="<?= $offer->getPlace()?>" class="form-text text-muted">Zadajte požiadavku na miesto doučovania. Môže to byť online, konkrétne mesto...</small>
            </div>
            <br>
            <div class="form-group">
                <label for="place">Plat:</label>
                <input type = "text" name="pay"  class="form-control" rows="1" id="pay" value="<?= $offer->getPay()?>" required>
                <small id="emailHelp" class="form-text text-muted">Zadajte požiadavku na plat/bez platu.</small>
            </div>
            <br>
            <div class="form-group">
                <label for="category">Dosiahnuté vzdelanie :</label>
                <select class="form-select mt-3" name="education" id="education" value="<?= $offer->getEducation()?>">
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
                <input type = "text"  value="<?= $offer->getCourses()?>" name="courses"  class="form-control" rows="1" id="courses" required>
                <small id="emailHelp" class="form-text text-muted">Tu môžete zadať svoje kurzy a certikáty.</small>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Emailová addresa: </label>
                <input type="email" value="<?= $offer->getContact() ?> "  name="contact" class="form-control" id="email" aria-describedby="emailHelp" placeholder="<?= $offer->getContact() ?> " required>
                <small id="emailHelp" class="form-text text-muted">Zadajte e-mailovú adresu, na ktorú chcete, aby vás záujemcovia kontaktovali.
                    Nemusí sa zhodovať s adresou prihlásenia.</small>
            </div>
            <br>
            <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Upravte ponuku
                </button>
            </div>
        </form>
    </div></div>