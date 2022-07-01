<?php

    // namespace data;

    require_once (__DIR__.'/../config/data.php');;

    class FormGenerator {
            
            public $checked = CHECKBOXVALUES;
        
            /**
             * fonction qui génère une liste d'options pour un select du formulaire
             * @param $data (tableau) attendu en paramètre
             * @echo une une option incluant la $value à chaque itération
             */
            public function optionGenerator($data){
                foreach ($data as $value){    
                    echo '<option>'.$value.'</option>';
            };
            }


            /**
             * fonction qui vérifie si une checkbox est "checked" ou non
             * @param $value attendu en paramètre
             * @echo une une option incluant la $value à chaque itération
             */
            public function isChecked($value) {
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["checkBox"])){
                    $checkedElements = $_POST["checkBox"]; 
                    if(in_array($value, $checkedElements)){
                            return 'checked';
                        } 
                    }
            }

    }
        
