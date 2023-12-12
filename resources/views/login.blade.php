@extends('layout')

@section('title')login~~vepvep.com @endsection

@section('main_content')
<div class="form-container">
    <form action="./login" method="post" class="account-form">
        @csrf
        <h3 class="form-title">Вход</h3>
        <label for="login" class="form-uptitle">Логин</label>
        <input name="login" id="login" class="form-input" autocomplete="off">
        <label id="pass_show" for="login" class="form-uptitle">Пароль <a class="show-hide-btw">
                <svg class="show-hide-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path
                        d="m31.7 26.4-3.85-3.8q1.05-2.2-.625-3.45t-3.125-.3l-3.5-3.55q.75-.4 1.65-.6.9-.2 1.75-.2 3.55 0 6.025 2.475Q32.5 19.45 32.5 23q0 .8-.2 1.8t-.6 1.6Zm7.4 7.5-2.75-2.8q2.2-1.75 3.825-3.85T42.8 23q-2.6-5.5-7.525-8.75Q30.35 11 24.5 11q-2.1 0-4.1.35-2 .35-2.95.8l-3.3-3.3q1.75-.8 4.625-1.4 2.875-.6 5.475-.6 6.85 0 12.825 3.75t9.275 10.5q.2.4.275.9.075.5.075 1t-.075 1.025q-.075.525-.275.875-1.35 2.7-3.2 5t-4.05 4Zm-.05 10.05-6.4-6.3q-1.75.7-4 1.1-2.25.4-4.65.4-7.05 0-13.025-3.775Q5 31.6 1.65 24.85q-.2-.4-.275-.875Q1.3 23.5 1.3 23t.1-1.05q.1-.55.25-.9 1.05-2.1 2.625-4.175Q5.85 14.8 7.9 12.85L3.05 8q-.55-.5-.55-1.225 0-.725.55-1.225Q3.55 5 4.3 5t1.3.55L41.55 41.5q.5.5.45 1.2-.05.7-.45 1.2-.5.6-1.25.6t-1.25-.55ZM10.8 15.7Q9 17.15 7.5 19.125 6 21.1 5.2 23q2.6 5.55 7.65 8.775Q17.9 35 24.4 35q1.35 0 2.775-.15 1.425-.15 2.225-.55l-3.2-3.2q-.4.2-1.025.3-.625.1-1.175.1-3.5 0-6-2.45T15.5 23q0-.55.075-1.15.075-.6.225-1.05Zm16.15 6.4Zm-6.85 3.45Z">
                    </path>
                </svg>
                Показать
            </a>
        </label>
        <label id="pass_hide" for="login" class="form-uptitle hidden">Пароль <a class="show-hide-btw">
                <svg class="show-hide-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path
                        d="m31.7 26.4-3.85-3.8q1.05-2.2-.625-3.45t-3.125-.3l-3.5-3.55q.75-.4 1.65-.6.9-.2 1.75-.2 3.55 0 6.025 2.475Q32.5 19.45 32.5 23q0 .8-.2 1.8t-.6 1.6Zm7.4 7.5-2.75-2.8q2.2-1.75 3.825-3.85T42.8 23q-2.6-5.5-7.525-8.75Q30.35 11 24.5 11q-2.1 0-4.1.35-2 .35-2.95.8l-3.3-3.3q1.75-.8 4.625-1.4 2.875-.6 5.475-.6 6.85 0 12.825 3.75t9.275 10.5q.2.4.275.9.075.5.075 1t-.075 1.025q-.075.525-.275.875-1.35 2.7-3.2 5t-4.05 4Zm-.05 10.05-6.4-6.3q-1.75.7-4 1.1-2.25.4-4.65.4-7.05 0-13.025-3.775Q5 31.6 1.65 24.85q-.2-.4-.275-.875Q1.3 23.5 1.3 23t.1-1.05q.1-.55.25-.9 1.05-2.1 2.625-4.175Q5.85 14.8 7.9 12.85L3.05 8q-.55-.5-.55-1.225 0-.725.55-1.225Q3.55 5 4.3 5t1.3.55L41.55 41.5q.5.5.45 1.2-.05.7-.45 1.2-.5.6-1.25.6t-1.25-.55ZM10.8 15.7Q9 17.15 7.5 19.125 6 21.1 5.2 23q2.6 5.55 7.65 8.775Q17.9 35 24.4 35q1.35 0 2.775-.15 1.425-.15 2.225-.55l-3.2-3.2q-.4.2-1.025.3-.625.1-1.175.1-3.5 0-6-2.45T15.5 23q0-.55.075-1.15.075-.6.225-1.05Zm16.15 6.4Zm-6.85 3.45Z">
                    </path>
                </svg>
                Скрыть
            </a></label>
        <input name="password" id="password_show" type="text" class="form-input hidden" autocomplete="off">
        <input name="password" id="password_hide" type="password" class="form-input" autocomplete="off">
        <div class="form-btw-ct">
            <button class="form-login">Войти</button>
        </div>
        <label for="recovery" class="form-uptitle">
            <a class="form-link rs-link" href="{{ url('/register') }}">Нет аккаунта? Создать</a>
            <span class="recovery-slash">/</span>
            <a class="form-link rs-link" href="#">Я забыл(а) пароль</a>
        </label>

    </form>
</div>
<script src="{{ asset('js/login.js') }}"></script>
@endsection