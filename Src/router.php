<?php

    require_once '../Config/routes.php';

    class Router {

        static $routes = array();

        static function parse($url, $request) {
            //var_dump($url);
            $url    = trim($url, '/');
            //var_dump($url);
            $url    = self::redir($url);
            //var_dump($url);
            $params = explode('/', $url);
            //var_dump($url);

            // récupère le nom du controller à appeler dans l'url (ici: 'users/controlregister' -> récupère 'users')
            $request->controller = $params[0];
            // récupère le nom de l'action à appeler dans l'url (ici: 'users/controlregister' -> recupère 'controlregister')
            $request->action     = isset($params[1]) ? $params[1] : '';
            // recupère les paramètres s'il y en a dans l'url
            $request->params     = array_slice($params, 2);

            // s'il n'y a pas de paramètre dans l'url et qu'il y a des posts (set dans request.php)
            if (count($request->params) == 0 && count($request->posts) != 0){
              // pour chaque post, créé un nouvel élément dans le tableau $request->params avec comme $value la valeur du post
              // exemple : on a un $_POST['name'] qui vaut "Jean-Charles" et un $_POST['age'] qui vaut 54
              //           on aura donc $request->params[0] = "Jean-Charles" et $request->params[1] = 54
                foreach ($request->posts as $key => $value){
                    array_push($request->params, $value);
                }
            }
            return true;
        }

        // appelé dans le fichier routes.php pour instancier toutes les routes et leur controller/action associé
        static function addRoute($origine, $redir){
            self::$routes[$origine] = $redir;
            //var_dump(self::$routes);
        }

        // vérifie si la route est valide
        static function redir($url){
            if ( ! array_key_exists($url, self::$routes)) {
                //echo "toto";
                return $url;
                
                $regurl = preg_replace('/([0-9]+)/', ':id', $url);
                if ($regurl != $url && self::$routes[$regurl] != ""){
                    //echo "toto";
                    return $url;
                }
            }
            else {
                return self::$routes[$url];
            }
        }
    }

?>
