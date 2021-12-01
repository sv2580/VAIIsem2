<?php /** @var Array $data */ ?>
<script src="public/js/editProfile.js"></script>
<div class="main">

    <h4 style="text-align: left; font-size: larger">Môj účet:</h4>

    <?php if ($data['error'] != "") {?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Chyba!</strong> Nesprávne heslo.
        </div>
    <?php } ?>
    <?php foreach ($data['logins'] as $user) {
        if ($user->getEmail() == $_SESSION["name"]) { ?>
            <p><strong>Meno: </strong> <?= $user->getName() ?></p>
            <p><strong>Priezvisko: </strong> <?= $user->getSurname() ?></p>
            <p><strong>E-mail: </strong> <?= $user->getEmail() ?></p>
            <p><strong>Rok narodenia: </strong> <?= $user->getBirthyear() ?></p>
            <br>


            <form method="post" action="?c=auth&a=changePassword" >

                <strong>Nastavenie nového hesla</strong>
                <div class="form-group">
                    <label>Pokiaľ chcete zmeniť heslo, zadajte nové heslo </label>
                    <input class="form-control" name="newpassword" id="newpassword" type="password" placeholder="Nové heslo" required>
                </div>
                <div class="form-group">
                    <label>Pre zmenu hesla zadajte pôvodné heslo</label>
                    <input class="form-control" id="oldpassword" name="oldpassword" type="password" placeholder="Heslo" required>

                </div>

                <button class="btn btn-primary  text-uppercase fw-bold" id="submit" style="background-color:darkviolet; display:unset; margin-top: 10px; margin-bottom: 10px" class="floated" type="submit">
                    Zmeň heslo
                </button>
                <br>
            </form>
            <br>
            <form method="post" action="?c=auth&a=deleteProfile">


                <p><strong style="margin-top: 10px">Zmazanie účtu</strong></p>

                <div class="form-group">
                    <label>Pre zmazanie účtu zadajte pôvodné heslo</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Heslo" required>

                </div>

                <button class="btn btn-primary text-uppercase fw-bold" id="submit" style="background-color:red; margin-top: 10px;display: unset" class="floated" type="submit"
                        onclick="return confirm('Ste si istý že chcete zmazať svoj účet?');">
                    Zmaž profil
                </button>

            </form>
            <p>Pri zmazaní profilu budú zmazané aj všetky vaše ponuky! </p>

        <?php }} ?>
    <br>



</div>

