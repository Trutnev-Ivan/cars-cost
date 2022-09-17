<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Нейронка</title>
</head>
<body>
<div class="row container">
    <div class="mx-auto w-50">
        <div class="d-flex mt-5">
            <span>Пример текста</span>
            <input class="form-control form-control-sm" type="text">
        </div>
        <div class="d-flex mt-2">
            <span>Выпадашка</span>
            <select class="form-control form-control-sm">
                <option>[1] Один</option>
                <option>[2] Не один</option>
            </select>
        </div>

        <div class="form-check form-switch mt-3">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label ml-3" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
        </div>

        <div class="d-flex mt-3">
            <span>Цвет</span>
            <button type="button" class="btn rounded-circle bg-primary ml-3" data-toggle="tooltip" data-placement="top" title="Синий"></button>
            <button type="button" class="btn rounded-circle bg-danger ml-3" data-toggle="tooltip" data-placement="top" title="Красный"></button>
            <button type="button" class="btn rounded-circle bg-warning ml-3" data-toggle="tooltip" data-placement="top" title="Желтый"></button>
        </div>

        <div class="btn-group mt-3" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary">Сохранить</button>
        </div>


    </div>
</div>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<style>
    .form-switch .form-check-input{
        transform: rotate(180deg);
    }
</style>

</body>
</html>