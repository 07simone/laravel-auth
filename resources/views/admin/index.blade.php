


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>titolo</th>
                        <th>autore</th>
                        <th>Descrizione</th>
                        <th>Immagine</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $posts as $post)
                        <tr>
                            <td>
                                {{$post->Titolo}}
                            </td>
                            <td>
                                {{$post->Autore}}
                            </td>
                            <td>
                                {{$post->Descrizione}}
                            </td>
                            <td>
                                {{$post->img}}
                            </td>
                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
