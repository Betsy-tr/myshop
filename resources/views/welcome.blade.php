<div>
    <h2>CATEGORIES</h2>
    
    <ul>
        @forelse ( $categories as $itemCategorie )
            
            <li>
                <a href="{{route('filtre.categorie', $itemCategorie)}}">
                    {{$itemCategorie->name}}
                </a>  
            </li>
        @empty
                
        @endforelse
        
    </ul>

    <h2>PRODUITS</h2>

    <ul>
        @forelse ( $produits as $itemProduit )
            <li>
                {{$itemProduit->name}}
                {{$itemProduit->prix}} €

                <a href="{{route('accueil.detail', $itemProduit)}}">
                    Voir plus
                </a>

            </li>
        @empty
                
        @endforelse
        
    </ul>


</div>