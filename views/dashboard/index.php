<div class="grid-container">

    <div class="item1"></div>
    <div id="dashboard" class="dashboard">
        <div class="header">
            <img src="/MageBitPHP/public/images/logo.png" alt="Logo">
            <hr class="solid">
        </div>
        <div>
            <form action="dashboard/editUser" method="post">
                <?php foreach ($data as $attribute): ?>
                    <?php if ($attribute['type'] == 'option'): ?>
                    <div>
                        <select style="width: 50%; padding: 12px 20px; margin-top: 10px" name="attributes[]" class="form">
                            <?php foreach ($attribute[0] as $option): ?>
                                <option  class="form" value="<?= $option['attribute_option']; ?>"><?= $option['attribute_option']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php else: ?>
                        <input type="<?= $attribute['type']; ?>" name="attributes[]" class="form"
                               placeholder="<?= $attribute['name']?>">
                    <?php endif; ?>
                <?php endforeach; ?>
                <input id="dashboardSubmit" type="submit" value="SAVE">
            </form>
            <input type="button" onclick="window.location.href = '<?php echo URL; ?>dashboard/logout';" value="LOGOUT"/>
        </div>
    </div>
