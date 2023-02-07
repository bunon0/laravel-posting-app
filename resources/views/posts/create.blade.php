<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>新規投稿</title>
</head>

<body>
  <header>
    <nav>
      <div><a href="{{ route('posts.index') }}">投稿アプリ</a></div>
    </nav>
  </header>

  <main>
    <article>
      <div>
        <h1>新規投稿</h1>
        @if ($errors->any())
          <div>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div><a href="{{ route('posts.index') }}">&lt; 戻る</a></div>
      </div>

      <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
          <label for="title">タイトル</label>
          <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
          <label for="content">本文</label>
          <textarea name="content" id="content">{{ old('content') }}</textarea>
        </div>
        <button type="submit">投稿</button>
      </form>
    </article>
  </main>

  <footer>
    <p>&copy; 投稿アプリ ALL rights reserved.</p>
  </footer>

</body>

</html>
