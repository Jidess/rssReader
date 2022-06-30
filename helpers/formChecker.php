<?php
    // namespace

    // classe pour vérifier les données d'un formulaire
    class CheckDataForm {

        // chercher la méthode 
        // constantes de regex
        public const REGEX_LASTNAME = "^[a-zA-Z ,.'-]{2,30}$";
        public const REGEX_POSTAL_CODE = "\d{2}[ ]?\d{3}";
        public const REGEX_DATE = "^\d{4}-(0?[1-9]|1[012])-(0?[1-9]|[12][0-9]|3[01])$";
        public const REGEX_TEXT = "";
        // tableau des messages d'erreur;
        public const ERRORS = [
            'error_empty' => 'Le champ est vide', 
            'error_data' => 'Veuillez entrer une donnée valide',
            'error_name' => 'Veuillez renseigner un nom valide',
            'error_date' => 'Veuillez renseigner une date valide',
            'error_postal_code' => 'Code postal incorrect',
            'error_url' => 'Veuillez entrer une adresse URL valide',
            
        ];
        
        // méthodes (~fonctions)

        /**
         * méthode qui vérifie l'intégrité des données entrées dans le champ de name="$anyName"
         * @param $genericName
         * @return 'Le champ est vide' dans le cas ou un champ est vide
         * @return 'Veuillez entrer un nom valide' dans le cas ou les données vérifiée ne sont pas valides
         */
        public function isLastNameValid($anyName) {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $anyName = trim(filter_input(INPUT_POST, $anyName, FILTER_SANITIZE_SPECIAL_CHARS));
                // $this->anyName = $anyName;
                if(empty($anyName)) {
                    return self::ERRORS['error_empty'];
                } else {
                    $anyName = filter_var($anyName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>'/'.self::REGEX_LASTNAME.'/')));
                    if(!$anyName){
                        return self::ERRORS['error_name'];
                    }
                }
            }
        }

        /**
         * fonction qui vérifie l'intégrité des données entrées dans le champ de name="$email"
         * @return 'Le champ est vide' dans le cas ou un champ est vide
         * @return 'Veuillez entrer une donnée valide' dans le cas ou les données vérifiée ne sont pas valides
         */
        public function isEmailValid($email) {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email = trim(filter_input(INPUT_POST, $email, FILTER_SANITIZE_EMAIL));
                if(empty($email)) {
                    return self::ERRORS['error_empty'];
                } else {
                    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                    if(!$email){
                        return self::ERRORS['error_data'];
                    }
                }
            }
        }

        /**
         * fonction qui vérifie l'intégrité des données entrées dans le champ de name="$date"
         * @return 'Le champ est vide' dans le cas ou un champ est vide
         * @return 'Veuillez entrer une date valide' dans le cas ou les données vérifiée ne sont pas valides
         */
        public function isDateValid($date) {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $date = trim(filter_input(INPUT_POST, $date, FILTER_SANITIZE_NUMBER_INT));
                if(empty($date)) {
                    return self::ERRORS['error_empty'];
                } elseif(!$date){
                    return self::ERRORS['error_data'];
                } elseif ($date < "1900-01-01" || $date > date('Y-m-d')){
                            return self::ERRORS['error_date'];
                } else $date = filter_var($date, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        
        /**
         * fonction qui vérifie l'intégrité des données entrées dans le champ de name="$date"
         * @return 'Le champ est vide' dans le cas ou un champ est vide
         * @return 'Veuillez entrer un code postal valide' dans le cas ou les données vérifiée ne sont pas valides
         */
        public function isPostalCodeValid($postalCode){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $postalCode = intval(trim(filter_input(INPUT_POST, $postalCode, FILTER_SANITIZE_NUMBER_INT)));
                if(empty($postalCode)) {
                    return self::ERRORS['error_empty'];
                }
                elseif ($postalCode > 95880 || $postalCode <= 0 || strlen($postalCode) != 5){
                            return self::ERRORS['error_postal_code'];
                } else {
                    $postalCode = filter_var($postalCode, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>'/'.self::REGEX_POSTAL_CODE.'/')));
                    if(!$postalCode){
                        return self::ERRORS['error_data'];
                    } 
                }
            }
        }
            


            /**
             * fonction qui vérifie la validité du format de fichier
             * @param $file: attend n'importe quel fichier
             * @return 'error' message dans plusieurs cas 
             */
        public function isFileValid($file) {

            $filepath = null;

            if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES[$file]['tmp_name'])){

                // on stocke le chemin du fichier
                $filepath = $_FILES[$file]['tmp_name'];
                // on obtient la taille du fichier en mettant le chemin en argument
                $fileSize = filesize($filepath);
                // on ouvre une base de données magique avec finfo_open et le type mime
                // permettant d'indiquer la nature et le format du document
                $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
                // on stocke le type et l'extension du fichier, en l'occurence "image/extension_du_fichier" 
                $filetype = finfo_file($fileinfo, $filepath);
                // on crée un tableau contenant les formats autorisés
                $allowedTypes = [
                    'image/jpg' => 'jpg',
                    'image/jpeg' => 'jpeg',
                    'image/JPEG' => 'JPEG',
                    'image/JPG' => 'JPG',
                    ];
                // on stocke le nom de la dernière composante du chemin d'un fichier ou d'un répertoire 
                $filename = basename($filepath);
                $extension = $allowedTypes[$filetype];
                $targetDirectory = __DIR__ . "/"; // __DIR__ est le dossier parent du fichier PHP

                $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;
                
                if ($fileSize === 0) {
                    die("Le fichier est vide.");
                }
                if ($fileSize > 3145728) { // 3 MB (1 byte * 1024 * 1024 * 3)
                    die("Fichier trop volumineux");
                }
                if (!in_array($filetype, array_keys($allowedTypes))) {
                    return "Type de fichier non autorisé.";
                }
                if (!copy($filepath, $newFilepath)) {
                    die("Je peux pas manipuler le fichier !");
                }
                unlink($filepath); // supprime le fichier stocké
                echo "Fichier envoyé avec succès.";
                }
                if (($_SERVER['REQUEST_METHOD'] == 'POST' && $filepath == null)) {
                    return self::ERRORS['error_empty'];
                } 
        }


        /** fonction qui vérifie l'intégrité des données entrées dans le champ de name="$url" 
         * @param $url (une url quelquonque)
         * @return $error message en fonction de l'erreur
         */
        public function isUrlValid($url){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $url = trim(filter_input(INPUT_POST, $url, FILTER_SANITIZE_URL));
                if(empty($url)) {
                    return self::ERRORS['error_empty'];
                } else {
                    $url = filter_var($url, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>'/'.self::REGEX_LASTNAME.'/')));
                    if(!$url){  
                        return self::ERRORS['error_url'];
                    }
                }
            }
        }

        /**
         * fonction qui vérifie l'intégrité des données entrées dans le champ de name="$textarea" 
         * @param $textarea n'importe quel chaîne de caractère
         * @return 'error' message si le champ est vide
         */
        public function isTextAreaValid($textarea){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $textarea = trim(filter_input(INPUT_POST, $textarea, FILTER_SANITIZE_SPECIAL_CHARS));
                if(empty($textarea)) {
                    return self::ERRORS['error_empty'];
                } else {
                    $textarea = filter_var($textarea, FILTER_SANITIZE_SPECIAL_CHARS, array("options"=>array("regexp"=>'/'.self::REGEX_LASTNAME.'/')));
                    if(!$textarea){
                        return self::ERRORS['error_data'];
                    }
                }
            }
        }

        /**
         * fonction qui vérifie l'intégrité des données entrées dans le champ de name="$textarea" 
         * @param $textarea n'importe quel chaîne de caractère
         * @return 'error' message si le champ est vide
         */
        public function isCheckBoxValid($checkBox){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $checkBox = filter_input(INPUT_POST, $checkBox, FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
                if(empty($checkBox)) {
                    return self::ERRORS['error_empty'];
                } else {
                    $checkBox = filter_var($checkBox, FILTER_SANITIZE_SPECIAL_CHARS, array("options"=>array("regexp"=>'/'.self::REGEX_LASTNAME.'/')));
                    if(!$checkBox){
                        return self::ERRORS['error_data'];
                    }
                }
            }
        }
            
        /** fonction qui permet de sauvegarder l'entrée utilisateur d'un input et de la retourner
         * @param $anyData
         * @return $anyData filtrée
         */
        public function setValue($anyData) {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $anyData = trim(filter_input(INPUT_POST, $anyData, FILTER_SANITIZE_SPECIAL_CHARS));
                return $anyData;
            } else return '';
        } 

        /**
             * fonction qui vérifie le nombre de checkbox checked (il faut quand même choisir le nombre de box checked)
             * @return 'checked' ou 'error'
             */
            public function howMuchChecked() {
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["checkBox"])){
                    $checkedElements = $_POST["checkBox"]; 
                    if(count($checkedElements) == 3){
                        return 'OK';
                    } else return 'ERROR';
                }
            }
}
    
    
