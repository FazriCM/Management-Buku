@include('layout.header')

<h3>Detail Penerbit</h3>
<table>
    <tbody>
        <tr>
            <td width="130px">Nama Penerbit</td>
            <td width="2px">:</td>
            <td>{{ $penerbit->nama_penerbit }}</td>
        </tr>
    </tbody>
</table>
@include('layout.footer')
