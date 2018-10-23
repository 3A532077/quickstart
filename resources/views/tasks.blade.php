<?php
/**
 * Created by PhpStorm.
 * User: adminer
 * Date: 2018/10/23
 * Time: 下午 12:50
 */
@extends('layouts.app')

@section('content')
    …
    <!-- 顯示驗證錯誤 -->
    @include('common.errors')

    <!-- 新任務的表單 -->
    <form …>
        …
    </form>

    <!-- 目前任務 -->
    @if (count($tasks) > 0)
        …
        <tbody>
        @foreach ($tasks as $task)
            <tr>
                <!-- 任務名稱 -->
                <td class="table-text">
                    <div>{{ $task->name }} </div>
                </td>
                <td>
                    <!-- 代辦：刪除按鈕 -->
                </td>
            </tr>
        @endforeach
        </tbody>
        ….
    @endif

@endsection
