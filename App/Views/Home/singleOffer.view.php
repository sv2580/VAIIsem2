<?php /** @var Array $data */ ?>

    <div class="container mt-5">
        <div class="row" style="justify-content: center">
            <?php foreach($data['offers'] as $post) {
                if ($post->getId() == $data['parid']) {?>

            <div class="container-fluid" style="background-color: #cbc0d5">
                <h2 style="text-align: center; text-shadow: 0 0 2px white"><?=$post->getTitle() ?></h2>
            </div>

            <div class="empty_pp" style="border-color: #f1f1f1; border-style: solid; border-width: 1px  " ></div>

            <h4>Niečo o mne:</h4>
            <p><?= $post->getInfo() ?></p>
            <h4> Dosiahnuté vzdelanie: </h4>
            <p><?=$post->getEducation() ?></p>
            <h4> Kurzy, certifikáty: </h4> <p> <?= $post->getCourses() ?> </p>
            <h4> Požadované platobné ohodnotenie: </h4> <p>  <?= $post->getPay() ?> </p>
            <h4> Miesto: </h4> <p>  <?= $post->getPlace() ?> </p>
            <h4> Ďalšie informacie: </h4> <p>   <?= $post->getMoreinfo() ?> </p>
            <h4> Kontakt: </h4> <p>  <?= $post->getContact() ?> </p>
        </div>

            <?php } }?>


        </div>

