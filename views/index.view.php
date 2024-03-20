<main>

    <p>Es wurden <?= count($source_files) ?> Bilder, mit einer Gesamtdatengröße von <?= $source_file_size ?>MB, zum Konvertieren gefunden</p>
    <a href="?convert=true">Convert</a>

    <?php if(isset($saved_storage_space)) :?>
        <p>With the original size you saved <?= $saved_storage_space ?> MB of storage space</p>
    <?php endif;?>


    <form type="get" action="">

        <fieldset>
            <legend>zusätzliche Größen</legend>
            <input type="checkbox" name="small" value="true" id="small">
            <label for="small">Bild mit einer Breite von 750px erzeugen</label>

            <input type="checkbox" name="medium" value="true" id="medium">
            <label for="medium">Bild mit einer Breite von 1500px erzeugen</label>
        </fieldset>
      
        <input type="checkbox" value="true" name="convert" checked hidden>
        <button type="submit">Convert</button>
    </form>
    
</main>