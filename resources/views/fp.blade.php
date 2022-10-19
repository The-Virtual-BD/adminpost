@extends('layouts.app')
@section('title')
    Flight Planner
@endsection
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div id="main" class="main-content flex-1 bg-gray-100 pb-24 md:pb-5">

        <div class="shadow flex justify-between items-center">
            <div class="p-4  text-2xl">
                <h1 class="font-bold pl-2">Flight Planner</h1>
            </div>
            <div class="p-4">
                <button id="showCreateModal" class="py-1 px-2 rounded bg-blue-500 text-white">Create Plan</button>
            </div>
        </div>
        <div class="p-4 w-full">
            <table id="fptable" class="display text-center text-xs">
                <thead>
                    <tr class="uppercase">
                        <th>Request Date</th>
                        <th>LEG</th>
                        <th>Flight No</th>
                        <th>Origin</th>
                        <th>Departure</th>
                        <th>Departure, LT</th>
                        <th>Arrival, LT</th>
                        <th>Flight Time</th>
                        <th>Equipment</th>
                        <th>Change</th>
                        <th>Connect</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>16.06.2022</td>
                        <td>1</td>
                        <td>EK405</td>
                        <td>MIM</td>
                        <td>NAS</td>
                        <td>17.06.2022 18:00</td>
                        <td>17.06.2022 22:00</td>
                        <td>04:00</td>
                        <td>77W</td>
                        <td>N</td>
                        <td>0</td>
                        <td class="flex">

                            <a href="" target="_blank"
                                class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                    class="iconify" data-icon="carbon:view-filled"></span></a>
                            <a href=""
                                class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                    class="iconify" data-icon="dashicons:edit"></span></a>
                            <button type="button"
                                class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                    class="iconify" data-icon="bi:trash-fill"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>16.06.2022</td>
                        <td>1</td>
                        <td>EK405</td>
                        <td>MIM</td>
                        <td>NAS</td>
                        <td>17.06.2022 18:00</td>
                        <td>17.06.2022 22:00</td>
                        <td>04:00</td>
                        <td>77W</td>
                        <td>N</td>
                        <td>0</td>
                        <td class="flex">

                            <a href="" target="_blank"
                                class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                    class="iconify" data-icon="carbon:view-filled"></span></a>
                            <a href=""
                                class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                    class="iconify" data-icon="dashicons:edit"></span></a>
                            <button type="button"
                                class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                    class="iconify" data-icon="bi:trash-fill"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>16.06.2022</td>
                        <td>1</td>
                        <td>EK405</td>
                        <td>MIM</td>
                        <td>NAS</td>
                        <td>17.06.2022 18:00</td>
                        <td>17.06.2022 22:00</td>
                        <td>04:00</td>
                        <td>77W</td>
                        <td>N</td>
                        <td>0</td>
                        <td class="flex">

                            <a href="" target="_blank"
                                class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                    class="iconify" data-icon="carbon:view-filled"></span></a>
                            <a href=""
                                class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                    class="iconify" data-icon="dashicons:edit"></span></a>
                            <button type="button"
                                class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                    class="iconify" data-icon="bi:trash-fill"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>16.06.2022</td>
                        <td>1</td>
                        <td>EK405</td>
                        <td>MIM</td>
                        <td>NAS</td>
                        <td>17.06.2022 18:00</td>
                        <td>17.06.2022 22:00</td>
                        <td>04:00</td>
                        <td>77W</td>
                        <td>Y</td>
                        <td>0</td>
                        <td class="flex">

                            <a href="" target="_blank"
                                class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                    class="iconify" data-icon="carbon:view-filled"></span></a>
                            <a href=""
                                class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                    class="iconify" data-icon="dashicons:edit"></span></a>
                            <button type="button"
                                class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                    class="iconify" data-icon="bi:trash-fill"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>16.06.2022</td>
                        <td>1</td>
                        <td>EK405</td>
                        <td>MIM</td>
                        <td>NAS</td>
                        <td>17.06.2022 18:00</td>
                        <td>17.06.2022 22:00</td>
                        <td>04:00</td>
                        <td>77W</td>
                        <td>Y</td>
                        <td>0</td>
                        <td class="flex">

                            <a href="" target="_blank"
                                class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                    class="iconify" data-icon="carbon:view-filled"></span></a>
                            <a href=""
                                class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                    class="iconify" data-icon="dashicons:edit"></span></a>
                            <button type="button"
                                class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                    class="iconify" data-icon="bi:trash-fill"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>16.06.2022</td>
                        <td>1</td>
                        <td>EK405</td>
                        <td>MIM</td>
                        <td>NAS</td>
                        <td>17.06.2022 18:00</td>
                        <td>17.06.2022 22:00</td>
                        <td>04:00</td>
                        <td>77W</td>
                        <td>Y</td>
                        <td>0</td>
                        <td class="flex">

                            <a href="" target="_blank"
                                class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                    class="iconify" data-icon="carbon:view-filled"></span></a>
                            <a href=""
                                class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                    class="iconify" data-icon="dashicons:edit"></span></a>
                            <button type="button"
                                class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                    class="iconify" data-icon="bi:trash-fill"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>16.06.2022</td>
                        <td>2</td>
                        <td>EK405</td>
                        <td>MIM</td>
                        <td>NAS</td>
                        <td>17.06.2022 18:00</td>
                        <td>17.06.2022 22:00</td>
                        <td>04:00</td>
                        <td>77W</td>
                        <td>Y</td>
                        <td>1</td>
                        <td class="flex">
                            <a href="" target="_blank"
                                class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                    class="iconify" data-icon="carbon:view-filled"></span></a>
                            <a href=""
                                class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                    class="iconify" data-icon="dashicons:edit"></span></a>
                            <button type="button"
                                class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                    class="iconify" data-icon="bi:trash-fill"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>16.06.2022</td>
                        <td>2</td>
                        <td>EK405</td>
                        <td>MIM</td>
                        <td>NAS</td>
                        <td>17.06.2022 18:00</td>
                        <td>17.06.2022 22:00</td>
                        <td>04:00</td>
                        <td>77W</td>
                        <td>N</td>
                        <td>1</td>
                        <td class="flex">
                            <a href="" target="_blank"
                                class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                    class="iconify" data-icon="carbon:view-filled"></span></a>
                            <a href=""
                                class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                    class="iconify" data-icon="dashicons:edit"></span></a>
                            <button type="button"
                                class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                    class="iconify" data-icon="bi:trash-fill"></span></button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
@endsection
@section('script')
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/vacancy.js') }}"></script>
    <script>
        $('#fptable').DataTable();
    </script>
@endsection
