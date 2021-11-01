<table class="table">

    <tr>
        <th> ID </th>
        <th> NAMA LENGKAP </th>
        <th> TEMPAT LAHIR </th>
        <th> TANGGAL LAHIR </th>
        <th> EMAIL </th>
        <th> NOMOR HANDPHONE </th>
        <th> DEPARTEMENT </th>
        <th> ACTION </th>
    </tr>
    @foreach ($data as $item )
        <tr>
            <td> {{ $item->id }}</td>
            <td> {{ $item->full_name }}</td>
            <td> {{ $item->birth_place }}</td>
            <td> {{ $item->birth_date }}</td>
            <td> {{ $item->email }}</td>
            <td> {{ $item->hp }}</td>
            <td> {{ $item->departement }}</td>
            <td> <button id="btnEditKaryawan" class="btn btn-warning" onclick="show({{ $item->id }})"> EDIT </button>
                <button class="btn btn-danger" onclick="destroy({{ $item->id }})"> DELETE </button>
            </td>

        </tr>
        
    @endforeach
</table>

