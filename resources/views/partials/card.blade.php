<div class="px-2 py-2">
    <a href="#" class="flex flex-col items-center bg-white border border-blue-500 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        
        <div class="aspect-square shadow-xl p-8">
            <img
            class="object-cover object-center transform overflow-hidden duration-300 hover:scale-105 hover:shadow-lg"
            src="{{Storage::url($itemProduit->image)}}"
            alt=""
        />
        </div>
        
            <div class="flex flex-col justify-between p-4 leading-normal">
                
                <h4 class="mb-2 text-2xl font-serif tracking-tight text-blue-500 dark:text-white">{{$itemProduit->name}}</h4>
                <p class="mb-3 font-serif text-gray-700 dark:text-gray-400">{{$itemProduit->description}}</p>
                <p class="mb-3 font-serif text-blue-700 dark:text-gray-400">{{$itemProduit->prix}}€ </p>
            </div>
    </a>
</div>