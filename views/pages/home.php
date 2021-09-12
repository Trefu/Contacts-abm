<?php
include_once('./models/Contacts.php');
?>
<div class=" p-5 bg-light">
    <h1 class="display-3">Inicio</h1>
    <?php
    $Instance = new Contacts();
    $contacts = $Instance->getAllContacts();
    ?>

    <p class="lead">Jumbo helper text</p>
    <hr class="my-2">
    <p>More info</p>
    <?php
    foreach ($contacts as $contact) {
        echo ($contact);
    };
    ?>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="?controller=contacts&action=alta" role="button">Add new contact</a>
    </p>
</div>