@extends('index')

@section('title')
    {{__("Блокнот писателя")}}
@endsection


@section('content')
<div class="block_main">
    
    <div class="block_publications_main">
        <h3 class="text_title_publication">{{__("Публикации")}}</h3>

        <div class="card_publication border_light">

            <div class="card_publication_block">
            <div class="card_publication_title">Pfujkjdjr</div>
            <div class="card_publication_author">author</div>
        
        </div>
        <div class="border_light"></div>

            <div class="card_publication_block">
                <div class="card_publication_description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quisquam esse, maiores dolores libero aspernatur atque id quam fuga, 
                    assumenda enim consequuntur omnis blanditiis voluptatum non repellat labore? Non, 
                    ipsum necessitatibus?
                </div>
                <div class="">
                    <div class="card_publication_block_likes"></div>
                <button class="card_publication_block_button">
                    <a>{{__("Читать")}}</a>
                </button>
                </div>
                
        </div>
        </div>

    </div>

    <div class="board_block">
        <div class="board_block_title">
            {{__("Доска объявлений")}}
        </div>

        <div class="board">


            <div class="board_card_block">
                <div class="board_card">

                    <div class="border_light"></div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection