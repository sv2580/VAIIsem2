<?php /** @var Array $data */ ?>
    <div class="main">
        <p > <strong>Vitajte na našom webe!</strong> Tutorly je miestom pre každého študenta,
            ktorý sa túži zlepšiť v konkrétnom predmete, pomôcť druhým a poprípade si zarobiť. Doučovanie je možné online.
            Na hlavnej stránke
            nájdete najnovšie ponuky, na ktoré môžete reagovať a vyššie môžete vytvoriť vlastnú ponuku.
        </p>
        <h4 style="text-align: center; font-size: larger">Najnovšie ponuky:</h4>

        <div class="container mt-5">
            <div class="row" style="justify-content: center">
                <?php foreach($data['offers'] as $post) { ?>
                <div class="col-md-3">
                    <form method="post" action="?c=home&a=singleOffer">
                        <input type="hidden" name="parid" value="<?=$post->getId()?>">
                        <button class="btn btn-primary  text-uppercase fw-bold" style="background: none; color:#64496d; border-color: white" class="floated" type="submit">
                            <?= $post->getTitle() ?>
                        </button>
                    </form>
                    <div class="empty_pp"></div>
                    <p><?=$post->getInfo() ?></p>
                    <p><strong>Kontakt: </strong><?=$post->getContact() ?></p>
                    <form method="post" action="?c=home&a=singleOffer">
                        <input type="hidden" name="parid" value="<?=$post->getId()?>">
                        <button class="btn btn-primary" style="background: none; color:#64496d; border-color: white" type="submit">
                            Kliknite pre viac informácií..
                        </button>
                    </form>
                </div>
                <?php } ?>
                <div class="col-md-3">
                    <h3>Vaša ponuka</h3>
                    <?php if(\App\Auth::isLogged()){?>
                    <p>Tu môže byť vaša ponuka. Stačí kliknúť vyššie na "Pridať nový inzerát" a vyplniť krátky formulár vašich požiadaviek.</p>
                    <?php } else {?>
                    <p>Tu môže byť vaša ponuka. Stačí sa vyššie zaregistrovať, prihlásiť a vyplniť krátky formulár vašich požiadaviek.</p>
                    <?php }?>
                </div>

            </div>
        </div>
        <p></p>
        <!-- <div class = "separate"></div> -->
        <ul class="pagination justify-content-right">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
        </ul>

    </div>

