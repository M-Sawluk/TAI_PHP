<!DOCTYPE html>
<html data-wf-domain="michals-top-notch-site-41c23c.webflow.io" data-wf-page="589c33fa26e3bc615f48aab6"
      data-wf-site="589c33fa26e3bc615f48aab5" data-wf-status="1">
    <head>
        <meta charset="utf-8"/>
        <title>Michal&#x27;s Top-Notch Site</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Webflow" name="generator"/>
        <link rel="stylesheet" href="../static/cssy/navigation.css">
    </head>
    <body class="body">
        <?php
        include_once '../../src/service/impl/AuthenticationServiceImpl.php';
        include_once '../../src/repository/impl/UserRepositoryImpl.php';
        include_once '../../src/domain/User.php';
        include_once '../../src/db_config/DbProvider.php';
        $email = 'admin@gmail.com';
        $password = 'aaa1234';
        UserRepositoryImpl::getUser($email, $password);
        AuthenticationServiceImpl::processLogin($email, $password);
        $user = unserialize($_SESSION['user']);
        echo $user->toString();
//        $user->toString();
//        $connection = DbProvider::getDbConnection();
//        $stmt = $connection->prepare('SELECT * FROM user u '
//                . ' join role r on u.role_id = r.role_id'
//                . ' where u.email =? and u.password =? ');
//        $stmt->bind_param('ss', $email, $password);
//        $stmt->execute();
//        $result = $stmt->get_result();
//        $row = $result->fetch_assoc();
//       
//        $a = new User($row['name'], $row['secondName'], $row['email'], $row['telephone'], $row['address'], $row['role_name']);
//        $a->toString();
        ?>    
    </body>
</html>