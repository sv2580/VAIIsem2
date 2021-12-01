<?php /** @var Array $data */ ?>

<?php $pocetInzeratov=0?>

<div class="main">
    <h4 style="text-align: left; font-size: larger">Moje ponuky:</h4>

    <div class="container mt-5">
        <div class="row" style="justify-content: left">
            <?php foreach ($data['offers'] as $post) {
                if ($post->getLoginfk() == $_SESSION["name"]) { ?>
                    <div class="col-md-3">
                        <form method="post" action="?c=home&a=singleOffer">
                            <input type="hidden" name="parid" value="<?= $post->getId() ?>">
                            <button class="btn btn-primary  text-uppercase fw-bold"
                                    style="background: none; color:#64496d; border-color: white"
                                    type="submit">
                                <?= $post->getTitle() ?>
                            </button>
                        </form>
                        <div class="empty_pp"></div>
                        <p><?= $post->getInfo() ?></p>


                        <form method="post" action="?c=home&a=deleteOffer">
                            <input type="hidden" name="postid" value="<?= $post->getId() ?>">
                            <button class="btn btn-primary  text-uppercase fw-bold" type="submit" style="background-color: darkviolet; display: inline-block;"
                                    onclick="return confirm('Ste si istý že chcete zmazať tento inzerát?');">
                                Zmaž
                            </button>
                        </form>
                        <form method="post" action="?c=home&a=editForm">
                            <input type="hidden" name="postid" value="<?= $post->getId() ?>">
                            <button class="btn btn-primary text-uppercase fw-bold" type="submit" style="background-color: darkviolet; display: inline-block;">
                                Uprav
                            </button>
                        </form>


                    </div>

                <?php }
            } ?>


        </div>
    </div>
    <p></p>


</div>

