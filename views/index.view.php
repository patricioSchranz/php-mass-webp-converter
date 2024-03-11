<main>
    <a href="?convert=true">Convert</a>

    <?php if(isset($saved_storage_space)) :?>
        <p>You save <?= $saved_storage_space ?> MB of storage space</p>
    <?php endif;?>
    

</main>