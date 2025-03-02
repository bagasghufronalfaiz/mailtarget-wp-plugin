<?php
$setting = $row['setting'];

?>
<div class="mt-c-form__wrap">
    <div div class="mt-c-form__radio">
        <?php if ($setting['showTitle']) { ?>
        <label class="mt-o-label" v-if="setting.showTitle"><?php echo $setting['title'] ?></label>
        <?php } ?>
        <div class="<?php echo ($setting['showImage'] and $setting['styleOption'] == 'grid') ? 'mt-c-radio__wrap--grid' : 'mt-c-radio__wrap' ?>">
            <?php
            foreach ($setting['options'] as $item) { ?>
                <label class="mt-c-radio">
                    <input type="radio" class="mt-o-checkbox"
                           name="mtin__<?php echo $setting['name']; ?>"
                           value="<?php echo $item['name'] ?>"><?php
                    if ($setting['showImage'] === false) {
                        ?><div class="mt-c-checkbox__text"><p><?php echo $item['name'] ?></p></div><?php
                    } else {
                        ?>
                        <div v-else class="mt-c-checkbox__image">
                            <?php if ($item['image'] !== '') {
                                ?><img src="<?php echo $item['image'] ?>" alt=""><?php
                            } else {
                                ?><img src="https://mailtarget.co/static/assets/images/image-placeholder.svg" alt=""><?php
                            } ?>
                            <?php if ($setting['showImage']) {
                                ?><p style="font-weight: normal;"><?php echo $item['name'] ?></p><?php
                            } ?>
                        </div>
                        <?php
                    } ?>
                </label>
                <?php
            }
            ?>
            <?php
            if ($setting['showOtherOption']) {
                ?>
                <div class="mt-c-radio">
                    <input type="radio" class="mt-o-radio" name="mtin__<?php echo $setting['name']; ?>" value="mtiot__<?php echo $setting['name']; ?>">
                    <div class="mt-c-radio__input">
                        <input type="text" class="mt-o-input" placeholder="Other" name="mtino__<?php echo $setting['name']; ?>">
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>