<section>
    <div class="flex flex-wrap w-full justify-center ">
        <div class="flex gap-5 container  p-5 justify-between">
            <?php
            foreach ($data['cards'] as $cards) { ?>
                <div class="flex"><?php echo $cards["title"]; ?></div>
            <?php
            }
            ?>
        </div>
    </div>
</section>