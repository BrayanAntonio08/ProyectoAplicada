<?php
require_once(MODEL_PATH . "User.model.php");
class AuthenticationController extends Controller
{

    public function login()
    {

        $this->render('none');
    }
    public function logUser()
    {
        $userModel = new UserModel();

        // Obtener todos los usuarios desde la base de datos
        $allUsers = $userModel->getAllUsers();

        // Suponiendo que has recibido los valores del formulario
        $formUsername = $_POST['username'];
        $formPassword = $_POST['password'];
        $encontrado = false;
        // Iterar a trav�s de los usuarios y verificar si coinciden los valores del formulario
        foreach ($allUsers as $user) {
            if ($user['nombre_usuario'] === $formUsername && $user['contrasenia'] === $formPassword) {
                $encontrado = true;

            }
        }
        if ($encontrado) {
            session_start();
            $_SESSION['user'] = $formUsername;
            //    echo "Nombre de usuario o contrase�a correctos.";
            $this->redirect('/Page/Home');

        } else {
            $info['mensaje'] = 'Datos incorrectos';
            $this->redirect('/Authentication/login', $info);
        }

    }
}