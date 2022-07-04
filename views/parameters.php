<main class="d-flex align-items-center justify-content-center container mt-3 mb-3">
    <div class="row  align-item-center bg-secondary">
        <div class="col d-flex flex-column">
            <div class="form-check mx-auto form-switch mt-3 mb-3">
                <input class="form-check-input" type="checkbox" id="modeChoice">
                <label class="form-check-label" for="modeChoice">Thème</label>
            </div>
            <form class="d-flex flex-column mx-auto" action="#" method="POST">
                <p class="mt-4 mb-4">Sélectionnez 3 flux RSS pour les afficher sur votre page d'accueil :</p>
                <div class="d-grid gap-3">
                    <?php foreach (CHECKBOXVALUES as $key => $value) {?>
                        <div class="form-check custom-control-inline">
                            <input name="checkBox[]" value="<?=$value?>" class="form-check-input" type="checkbox" id="checkbox<?=$key?>" <?=$formGenerator->isChecked($value)?>>
                            <label class="form-check-label" for="checkBox"><?=$value?></label>
                        </div>
                    <?php } ?>
                    <?=$error ?? "" ?>
                </div>
                <p class="mt-4 mb-4">Choisissez le nombre d'articles a afficher par sujet :</p>
                    <div class="d-flex justify-content-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio" id="inlineRadio1" value="3"<?=(isset($_COOKIE['user_radio_choice']) && $_COOKIE['user_radio_choice'] == 3) || !isset($_COOKIE['user_radio_choice'])  ? "checked" : "" ?>>
                            <label class="form-check-label" for="inlineRadio">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio" id="inlineRadio2" value="6"<?=isset($_COOKIE['user_radio_choice']) && $_COOKIE['user_radio_choice'] == 6 ? "checked" : "" ?>>
                            <label class="form-check-label" for="inlineRadio">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio" id="inlineRadio3" value="9"<?=isset($_COOKIE['user_radio_choice']) && $_COOKIE['user_radio_choice'] == 9 ? "checked" : "" ?>>
                            <label class="form-check-label" for="inlineRadio">9</label>
                        </div>
                    </div>
                <button class="btn btn-danger mt-4 mb-4" type="submit">VALIDER</button>
                <?php if($_COOKIE) { ?>
                    <a class="align-self-center" href="../controllers/home.html"><button class="btn btn-danger  mt-4 mb-4" type="button">ACCUEIL</button></a>
                <?php } ?>
            </form>
        </div>
    </div>
</main>

