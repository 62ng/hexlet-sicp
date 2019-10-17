@extends('layouts.app')

@section('content')
<h1 class="my-4">Hexlet SICP
</h1>
<p>Осилятор СИКП &mdash; сервис, в котором есть рейтинг тех, кто проходит сикп, и каждый отмечает что он прошел.</p>
<div class="row">

    <div class="col-md-8">
        <a href="https://mitpress.mit.edu/sites/default/files/sicp/index.html">
            <img class="img-fluid" src="{{ asset('img/Patchouli_Gives_SICP.jpg') }}" alt="Начать изучать sicp">
        </a>
    </div>

    <div class="col-md-4">

        <h3 class="my-3">Что здесь</h3>

        <p>СИКП — книга об информатике (computer science).
            Восприятии компьютеров как абстрактных машин, используемых для манипулирования данными.
            Несмотря на то, что книга впервые опубликована в 1979, она до сих пор не потеряла свою актуальность и
            не потеряет в будущем. СИКП неизменно находится в топе лучших книг по обучению программированию на
            протяжении десятков лет.</p>

        <a href="https://guides.hexlet.io/how-to-learn-sicp/">Читать далее как изучать SICP</a>

        <h3 class="my-3">Здесь можно</h3>

        <ul>
            <li>Отмечать главы прочитанными</li>
            <li>Смотреть рейтинг, кто сколько прочитал</li>
        </ul>

        <h3 class="my-3">Скоро</h3>

        <ul>
            <li>Обсуждать главы и задачки</li>
            <li>Привязывать репозиторий с решёнными упражнениями</li>
            <li>Активность пользователей</li>
        </ul>
    </div>

</div>
<!-- /.row -->
@endsection
