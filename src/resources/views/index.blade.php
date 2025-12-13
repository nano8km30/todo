@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="todo__alert">
    <div class="todo__alert--success">
        Todoを作成しました。
    </div>
</div>

<div class="todo__content">
    <form class="todo__form">
        @csrf
        <div class="form__item">
                <input class="form__item-input"type="text" name="content">
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr>
                <th class="todo-table__border todo-table__header" colspan="3">Todo</th>
            </tr>
            <tr class="todo-table__content">
                <form class="todo__form-content">
                @csrf
                    <td class="todo-table__border todo-table__text">
                        <input class="todo-input__text" type="text" name="todo" value="test" />
                    </td>
                    <td class="todo-table__border todo-button">
                        <button class="todo-button__update">更新</button>
                    </td>
                    <td class="todo-table__border todo-button">
                        <button class="todo-button__delete">削除</button>
                    </td>
                </form>
            </tr>
            <tr class="todo-table__content">
                <form class="todo__form-content">
                @csrf
                    <td class="todo-table__border todo-table__text">
                        <input class="todo-input__text" type="text" name="todo" value="test2" />
                    </td>
                    <td class="todo-table__border todo-button">
                        <button class="todo-button__update">更新</button>
                    </td>
                    <td class="todo-table__border todo-button">
                        <button class="todo-button__delete">削除</button>
                    </td>
                </form>
            </tr>
            
        </table>
    </div>
</div>

@endsection
