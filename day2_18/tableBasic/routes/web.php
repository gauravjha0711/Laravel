<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "
    <table border='1'>
    <tr>
    <td>Name</td>
    <td>Gaurav Kumar</td>
    <td>Adarsh Singh</td>
    </tr>
    <tr>
    <td>Registration No</td>
    <td>12210400</td>
    <td>12207186</td>
    </tr>
    </table>";
});
