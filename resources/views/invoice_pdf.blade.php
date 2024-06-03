<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-700">
    <div class="max-w-4xl mx-auto bg-white p-6 mt-10 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold">Invoice</h1>
                <p class="text-gray-600">Invoice number: {{$invoice->inv_num}}</p>
                <p class="text-gray-600">Client Name: {{ $invoice->client_name}}</p>
                <p class="text-gray-600">Invoice Date: {{$invoice->inv_date}}</p>
                <p class="text-gray-600">Due Date: {{ $invoice->due_date}}</p>
                <p class="text-gray-600">Invoicer Email: {{$invoice->email}}</p>
                <p class="text-gray-600">PO number: {{ $invoice->po_num}}</p>
            </div>
        </div>

        <div class="mb-6">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="border-2 border-black">Serial no</th>
                        <th class="border-2 border-black">Product name</th>
                        <th class="border-2 border-black">Description</th>
                        <th class="border-2 border-black">Unit cost</th>
                        <th class="border-2 border-black">Quantity</th>
                        <th class="border-2 border-black">Tax</th>
                        <th class="border-2 border-black">Line total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td class="text-center border-2 border-black">{{ $item->id}}</td>
                        <td class="text-center border-2 border-black">{{ $item->item_name }}</td>
                        <td class="text-center border-2 border-black">{{ $item->desc }}</td>
                        <td class="text-center border-2 border-black">{{ $item->cost }}</td>
                        <td class="text-center border-2 border-black">{{ $item->quan }}</td>
                        <td class="text-center border-2 border-black">{{ $item->tax }}</td>
                        <td class="text-center border-2 border-black">{{ $item->line_total }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex items-center justify-between">
            <div>
                <h4 class="text-red-500 font-3xl text-center">Thanks for your business</h4>
            </div>
            <div align="right">
                <h1 class="text-red-500 font-3xl">SubTotal: {{$invoice->line_total}}</h1>
                <h1 class="text-red-500 font-3xl">Grand total: {{$invoice->grand_total}}</h1>
                <h1 class="text-red-500 font-3xl">Total tax: {{$invoice->total_tax}}</h1>
            </div>
        </div>
    </div>
</body>
</html>
