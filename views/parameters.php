<main class="d-flex align-items-center container mt-3 mb-3">
    <div class="row centered">
        <div class="col d-flex flex-column glassMorph">
            <div class="form-check mx-auto form-switch mt-3 mb-3">
                <input class="form-check-input" type="checkbox" id="modeChoice">
                <label class="form-check-label" for="modeChoice">Thème</label>
            </div>
            <form class="d-flex flex-column mx-auto" action="#" method="POST">
                <p class="mt-4 mb-4">Sélectionnez 3 flux RSS pour les afficher sur votre page d'accueil :</p>
                <div class="d-grid gap-3">
                    <?php foreach (CHECKBOXVALUES as $key => $value) {?>
                        <div class="form-check custom-control-inline">
                            <input name="checkBox[]" value="<?=$value?>" class="form-check-input" type="checkbox" id="checkbox<?=$key?>"  <?=$formGenerator->isChecked($value)?>>
                            <label class="form-check-label" for="checkBox"><?=$value?></label>
                        </div>
                    <?php } ?>
                </div>
                <p class="mt-4 mb-4">Choisissez le nombre d'articles a afficher par sujet :</p>
                    <div class="d-flex">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio" id="inlineRadio1" value="3">
                            <label class="form-check-label" for="inlineRadio">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio" id="inlineRadio2" value="6">
                            <label class="form-check-label" for="inlineRadio">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio" id="inlineRadio3" value="9">
                            <label class="form-check-label" for="inlineRadio">9</label>
                        </div>
                    </div>
                <button class="btn buttonColor mt-4 mb-4" type="submit">VALIDER</button>
                <?php if($_COOKIE) { ?>
                    <a href="../controllers/homeCtrl.php"><button class="btn buttonColor mt-4 mb-4" type="button">ACCUEIL</button></a>
                    <?php } ?>
            </form>
        </div>
    </div>
</main>

