<main class="d-flex align-items-center container mt-3 mb-3">
    <div class="row centered">
        <div class="col d-flex flex-column glassMorph">
            <div class="form-check mx-auto form-switch mt-3 mb-3">
                <input class="form-check-input" type="checkbox" id="modeChoice">
                <label class="form-check-label" for="modeChoice">Thème</label>
            </div>
            <form class=" d-flex flex-column mx-auto" action="" method="POST">
                <p class="mt-4 mb-4">Sélectionnez 3 flux RSS pour les afficher sur votre page d'accueil :</p>
                <div class="d-grid gap-3">
                    <?php foreach (CHECKBOXVALUES as $key => $value) {?>
                        <div class="form-check custom-control-inline">
                            <input name="checkBox[]" value="<?=$value?>" class="form-check-input" type="checkbox" id="checkbox<?=$key?>"  <?=$formGenerator->isChecked($value)?>>
                            <label class="form-check-label" for="checkBox"><?=$value?></label>
                        </div>
                    <?php } ?>
                </div>
                <button class="btn buttonColor mt-4 mb-4" type="submit">VALIDER</button>
            </form>
        </div>
    </div>
</main>

