<!DOCTYPE html>
<html>

<head>
    <title>Data for {{ $formName }}</title>
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
    <h2>Submissions for {{ $formName }}</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                @if(!empty($submissions))
                @foreach(array_keys($submissions[0]) as $fieldName)
                <th>{{ ucfirst(str_replace('_', ' ', $fieldName)) }}</th>
                @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($submissions as $index => $submission)
            <tr>
                <td>{{ $index + 1 }}</td>
                @foreach($submission as $fieldValue)
                <td>{{ $fieldValue }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>