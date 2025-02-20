<!DOCTYPE html>
<html>

<head>
    <title>Feedback Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            /* Adjust font size to fit more content */
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            /* Reduce padding for tighter spacing */
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h2>Feedback Data</h2>
    <table>
        <thead>
            <tr>
                <th>Reference No</th>
                <th>Name</th>
                <th>Class</th>
                <th>Boards</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Father's Name</th>
                <th>Father's Mobile</th>
                <th>Mother's Name</th>
                <th>Mother's Mobile</th>
                <th>Email</th>
                <th>Feedback</th>
                <th>Submitted On</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedback as $item)
            <tr>
                <td>{{ $item->reference_no }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->class }}</td>
                <td>{{ $item->boards }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->mobile }}</td>
                <td>{{ $item->father_name }}</td>
                <td>{{ $item->father_mobile }}</td>
                <td>{{ $item->mother_name }}</td>
                <td>{{ $item->mother_mobile }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->feedback }}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>