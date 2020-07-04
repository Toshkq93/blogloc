<div class="container container-fluid">
    <?php if (isset($student)) :?>
    <?php foreach ($student as $value): ?>
        <h1 class="text-center">Редактирование ученика<br>
        </h1><h2 class="text-center"><?= $value['lastname'] . ' ' . $value['firstname'] . ' ' . $value['patronymic'];?></h2>
        <h2 class="text-center"></h2>
        <form id="form" role="form" action="" method="post">
            <div class="row">
                <div class="form-group text-center">
                    <div class="control-group">
                        <div class="controls" style="margin-bottom: 10px">
                            <input class="form-control" placeholder="фамилия" id="lastname" name="lastname" type="text" value="<?= $value['lastname'];?>"/>
                        </div>
                        <div class="controls" style="margin-bottom: 10px">
                            <input class="form-control" placeholder="имя" id="firstname" name="firstname" type="text" value="<?= $value['firstname'];?>" />
                        </div>
                        <div class="controls" style="margin-bottom: 10px">
                            <input class="form-control" placeholder="отчетсво" id="patronymic" name="patronymic" type="text" value="<?= $value['patronymic'];?>" />
                        </div>
                        <div class="controls" style="margin-bottom: 10px">
                            <input class="form-control" placeholder="дата рождения" id="birthday" name="birthday" type="text" value="<?= formatDate($value['birthday'], 'd.m.Y'); ?>"/>
                        </div>
                        <input class="btn btn-success" type="submit" class="button" value="Редактировать" />
                    </div>
                </div>
            </div>
        </form>
</div>
<?php endforeach; ?>
<?php endif;?>