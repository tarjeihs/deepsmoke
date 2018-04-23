<?php

    include 'php/SPL.php';

    $dbInterface = new DBInterface();
    $userData = new UserData();

    $userData->setUUID(20);

    $session = new Session();

    $serializedData = serialize($userData);

    $dbInterface->insertUserData('23234', $serializedData);

    $recreatedUserData = unserialize($dbInterface->fetchUserData(array('steamid', '23234'))[0]);

    echo $recreatedUserData->getUUID();
