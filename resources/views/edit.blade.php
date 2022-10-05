@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        編集
        <form action={{ route('destroy') }} method="POST">
            @csrf
            <input type="hidden" value="{{ $edit_memo['id'] }}" name="memo_id" />
            <button type="submit">削除</button>
        </form>
    
    </div>
    <form class="card-body" action={{ route('update') }} method="POST">
        @csrf
        <input type="hidden" value="{{ $edit_memo['id'] }}" name="memo_id" />
        <div class="form-group">
            <textarea class="form-control" name="content" rows="3" placeholder="ここにメモを入力">{{ $edit_memo['content'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
@endsection