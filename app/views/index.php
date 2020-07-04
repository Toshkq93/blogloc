<table class="table table-bordered text-center">
    <thead>
    <tr>
        <th scope="row">ФИО</th>
        <th>День рождения</th>
        <th>Возраст</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($students)): ?>
    <?php foreach ($students as $student): ?>
        <tr scope="row">
            <td><?= getFIO($student['lastname'], $student['firstname'], $student['patronymic']);?></td>
            <td><?= formatDate($student['birthday'], 'd.m.Y');?></td>
            <td><?= getYear($student['birthday']);?></td>
            <td><a class="btn btn-primary" href="<?= PATH;?>/edit/<?= $student['id'];?>">Редактировать</a></td>
            <td><a class="btn btn-primary" href="<?= PATH;?>/delete/<?= $student['id'];?>">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
<a class="btn btn-primary float-right" href="add">Добавить</a>