<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Artikelübersicht</title>
</head>
<body>

<h1>Artikelübersicht</h1>

<!-- Suchformular -->
<form method="GET" action="{{ route('articles.index') }}">
    <input type="text" name="search" placeholder="Artikel suchen" value="{{ request('search') }}">
    <button type="submit">Suchen</button>
</form>

<!-- Artikeltabelle -->
<table border="1">
    <thead>
    <tr>
        <th>Bild</th>
        <th>Name</th>
        <th>Preis (EUR)</th>
        <th>Beschreibung</th>
        <th>Ersteller</th>
        <th>Erstellungsdatum</th>
    </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
    <tr>
        <td>
            @php
            $imageUrl = asset("images/articles/{$article->id}.jpg");
            @endphp
            <img src="{{ $imageUrl }}" alt="Artikelbild" width="50">
        </td>
        <td>{{ $article->ab_name }}</td>
        <td>{{ number_format($article->ab_price / 100, 2, ',', '.') }} €</td>
        <td>{{ $article->ab_description }}</td>
        <td>{{ $article->creator_name }}</td>
        <td>{{ date('d.m.Y', strtotime($article->ab_createdate)) }}</td>
    </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>

