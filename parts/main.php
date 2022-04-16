<main>
    <div class="card-container"><?php
    foreach ($arr_dischi as $discho) { ?>
        <div class="card">
            <div class="img-holder">
                <img class="img-fluid" src="<?=$discho['poster'] ?>" alt="albmTitle">
            </div>
            <h1 class="mt-3"><?=$discho['title'] ?></h1>
            <p><?=$discho['author'] ?></p>
            <p><?=$discho['year'] ?></p>  
        </div> <?php
        } ?>
    </div>
</main>