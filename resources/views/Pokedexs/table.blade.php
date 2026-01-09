<h1>Pokedex Lists</h1>
    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>type</td>
            <td>species</td>
            <td>height</td>
            <td>weight</td>
            <td>hp</td>
            <td>attack</td>
            <td>defense</td>
            <td>image_url</td>
        </tr>
        </thead>

        <?php foreach ($pokedexs as $item) {?>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->NAME }}</td>
                <td>{{ $item->TYPE }}</td>
                <td>{{ $item->species }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->attack }}</td>
                <td>{{ $item->defense }}</td>
                <td><img src="{{ $item->image_url }}" alt="{{ $item->name }}"
                            class="img-fluid rounded-3 shadow-sm border bg-white"
                            style="width: 100px; height: 100px; object-fit: contain;"></td>

                <td>
                    
                    <a class="btn btn-warning" href="{{ url('/pokedexs/' . $item->id . '/edit') }}">
                        แก้ไข 
                    </a>
                    <form style="display:inline" action="{{ url('/pokedexs/' . $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">ลบ</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>