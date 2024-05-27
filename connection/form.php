<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Content-Type: application/json');
        include 'db_config.php';
    
        $name = trim($_POST['name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $errors = [];
    
        // Valida nombre
        if (empty($name)) {
            $errors[] = "El nombre es obligatorio.";
        }
        // Valida apellido
        if (empty($last_name)) {
            $errors[] = "El apellido es obligatorio.";
        }
    
        // Valida email
        if (empty($email)) {
            $errors[] = "El correo electrónico es obligatorio.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "El formato del correo electrónico no es válido.";
        }
    
        // Valida message
        if (empty($message)) {
            $errors[] = "El mensaje es obligatorio.";
        }
    
        if (count($errors) == 0) {
            try {
                $stmt = $pdo->prepare("INSERT INTO contactos (name, last_name, email, message) VALUES (:name, :last_name, :email, :message)");
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':last_name', $last_name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':message', $message);
    
                if ($stmt->execute()) {
                    echo json_encode(["success" => true, "message" => "¡Excelente!, hemos recibido tú mensaje, a la brevedad pondremos en contacto contigo."]);
                } else {
                    echo json_encode(["success" => false, "message" => "Error al crear el registro"]);
                }
            } catch (PDOException $e) {
                echo json_encode(["success" => false, "message" => "Error: " . $e->getMessage()]);
            }
        } else {
            echo json_encode(["success" => false, "errors" => $errors]);
        } 
    }



    




?>

 
