@extends('layouts.app')

@section('head')
    <title>H2Opnieuw | Dashboard</title>
    <meta name="title" content="H2Opnieuw | Dashboard" />
    <meta name="description" content="On this dashboard you can see all details of your water saving system of H2Opnieuw. And you can find out how much water you saved today." />
    <meta property="og:title" content="H2Opnieuw | Dashboard" />
    <meta property="og:description" content="On this dashboard you can see all details of your water saving system of H2Opnieuw. And you can find out how much water you saved today." />
@endsection

@section('main')
    <div class="mx-auto container">
        <h1 class="mb-4 text-center">Dashboard</h1>
        <div class="rounded-lg overflow-x-auto overflow-y relative border mx-2 mb-4 scroll bg-gray-50">
            <table class="table-auto text-gray-600 w-full text-left overflow-scroll">
                <thead class="text-gray-900 border-b sticky top-0">
                    <tr class="bg-gray-200">
                        <th scope="col" class="py-3 px-6 h3">Waterlevel</th>
                        <th scope="col" class="py-3 px-6 h3">Leakage</th>
                        <th scope="col" class="py-3 px-6 h3">Valve status</th>
                        <th scope="col" class="py-3 px-6 h3">Temperature</th>
                        <th scope="col" class="py-3 px-6 h3">Date</th>
                    </tr>
                </thead>
                <tbody class="striped">
                    @foreach ($data as $item)
                        <tr class="border-b hover">
                            <td scope="row" class="py-4 px-6">{{ $item->waterlevel }} %</td>
                            <td class="py-4 px-6">{{ $item->leakage }}</td>
                            <td class="py-4 px-6">{{ $item->valve_status }}</td>
                            <td class="py-4 px-6">{{ $item->temperature }}</td>
                            <td class="py-4 px-6">{{ $item->create_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
