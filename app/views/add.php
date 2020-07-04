<div class="container container-fluid">
    <h1 class="text-center">Добавить ученика<br>
    </h1>
    <form id="form" role="form" action="/add" method="post">
        <div class="row">
            <div class="form-group text-center">
                <div class="control-group">
                    <div class="form-group has-feedback" style="margin-bottom: 10px">
                        <input class="form-control" placeholder="Фамилия" id="lastname" name="lastname" type="text" value=""/>
                    </div>
                    <div class="form-group has-feedback" style="margin-bottom: 10px">
                        <input class="form-control" placeholder="Имя" id="firstname"  name="firstname"  type="text" value=""/>
                    </div>
                    <div class="form-group has-feedback" style="margin-bottom: 10px">
                        <input class="form-control" placeholder="Отчетсво" id="patronymic" name="patronymic" type="text" value=""/>
                    </div>
                    <div class="controls" style="margin-bottom: 10px">
                        <input class="form-control" placeholder="День рождения" id="birthday" name="birthday" type="text"/>
                    </div>
                    <input class="btn btn-bd-primary" name="save" type="submit" class="button" value="Сохранить" />
                    <input class="btn btn-bd-primary" type="submit" class="button" name="cansel" value="Отмена" />
                </div>
            </div>
        </div>
    </form>
</div>