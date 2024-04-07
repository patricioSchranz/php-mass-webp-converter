<header>
    <img src="./assets/mass-converter-svg.svg" alt="mass converter logo">
    <h1>Webp Mass Converter</h1>
</header>

<main>
    <?php if( !isset($_GET['convert']) ) : ?>
        <p class="info">
            <strong><?= count($source_files) ?> files</strong> were found with a <strong>total data size</strong> of
            <strong><?= $source_file_size ?>MB</strong>
        </p>

        <form type="get" action="">

            <fieldset>
                <legend>Create additional image sizes :</legend>
                <input type="checkbox" name="small" value="true" id="small">
                <label for="small">Bild mit einer Breite von 750px erzeugen</label>

                <input type="checkbox" name="medium" value="true" id="medium">
                <label for="medium">Bild mit einer Breite von 1500px erzeugen</label>
            </fieldset>
        
            <input type="checkbox" value="true" name="convert" checked hidden>
            <button type="submit" class="mass-converter-btn">Convert</button>
        </form>

        <?php else: ?>
            <p class="info">
                <strong><?= count($source_files) ?> files</strong> were converted 
                <strong>with 

                    <?php if($additonal_sizes_count === 1) : ?>
                        <?= $additonal_sizes_count ?> additional size

                        <?php else :?>
                            <?= $additonal_sizes_count ?> additonal sizes
                    <?php endif; ?>

                </strong>
            </p>
            <p class="additional-info">With the original size you saved <?= $saved_storage_space ?> MB of storage space</p>

            <a href="./index.php" class="reset-button">Reset</a>
    <?php endif; ?> 

    <p class="viewport-info">
        You need a viewport larger than 1120px
    </p>
</main>