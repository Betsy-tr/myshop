<!DOCTYPE html>
<html lang="en">

    <div class="pl-44 py-4">

        <div class="text-center max-w-sm bg-white border border-blue-500 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div>
                <img
                    class="object-cover object-center transform overflow-hidden duration-300 hover:scale-105 hover:shadow-lg"
                    src="{{Storage::url($produit->image)}}"
                    alt=""
                />
            </div>

            
              
    
            <div class="p-5">
        
                <h2 class="mb-2 text-2xl font-serif tracking-tight text-blue-500 dark:text-white">{{$produit->name}}</h2>
        
                <p class="mb-3 font-serif text-gray-700 dark:text-gray-400">{{$produit->description}}</p>

                <p class="mb-3 font-serif text-blue-700 dark:text-gray-400">{{$produit->prix}}€ </p>

                <p class="mb-3 font-serif text-gray-700 dark:text-gray-400">CATEGORIE : {{$produit->categorie->name}}</p>

            
        
            </div>

            <a href="{{route('addtocart', $produit)}}">
                Panier
            </a>

            <h3>Produits similaires</h3>

            @forelse ($produits as $itemProduit )
                <li>
                   {{$itemProduit->name}}
                </li>
            @empty
                
            @endforelse

        </div>
    </div>

</body>
</html>