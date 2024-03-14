<html>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $dataku) 
    <tr>
        <td class="my-9 px-9 text-xl font-serif">{{ $dataku['id'] }}</td>
        <td class="my-9 px-9 text-xl font-serif">{{ $dataku['nama'] }}</td>
        <td class="my-9 px-9 text-xl font-serif">{{ $dataku['harga'] }}</td>
    </tr>
@endforeach

    </tbody>
</table>
</html>
