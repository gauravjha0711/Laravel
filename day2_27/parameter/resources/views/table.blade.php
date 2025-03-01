<h1 style="text-align: center;">Table</h1>
<div>
    <table border="1" align="center">
        <tr>
            <th>Number</th>
            <th>Result</th>
        </tr>
        @for($i = 1; $i <= 10; $i++)
        <tr>
            <td>{{ $number }} * $i = </td>
            <td>{{ $number *$i}}</td>
        </tr>
        @endfor
    </table>
</div>