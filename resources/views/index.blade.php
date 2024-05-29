@extends('layouts.main')

@section('content')



<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    telepon
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    RIVALDI AKBAR
                </th>
                <td class="px-6 py-4">
                    KP. DANGDEUR
                </td>
                <td class="px-6 py-4">
                    081232456765
                </td>
                <td class="px-6 py-4">
                    Rivaldyy@gmail.com
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ELGIN AL-WAFI DAULIYAH
                </th>
                <td class="px-6 py-4">
                    KP. CINANGSI
                </td>
                <td class="px-6 py-4">
                    089923123456
                </td>
                <td class="px-6 py-4">
                    elginhengker@gmail.com
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ASEP KENALPHOT
                </th>
                <td class="px-6 py-4">
                    KP. UWESRAPOPO
                </td>
                <td class="px-6 py-4">
                    089923123233
                </td>
                <td class="px-6 py-4">
                    asepkenal@gmail.com
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    WAHYU IMANBEGETE
                </th>
                <td class="px-6 py-4">
                    KP. CIRAMBE
                </td>
                <td class="px-6 py-4">
                    089213123456
                </td>
                <td class="px-6 py-4">
                    imutbegete@gmail.com
                </td>
            </tr>

            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    JAJANG KECHE
                </th>
                <td class="px-6 py-4">
                   KP. CINTA KANDAS
                </td>
                <td class="px-6 py-4">
                    083278678432
                </td>
                <td class="px-6 py-4">
                    jajangkeche@gmail.com
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
