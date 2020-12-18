<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/handsontable@8.2.0/dist/handsontable.full.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/handsontable@8.2.0/dist/handsontable.full.min.css" rel="stylesheet"
          media="screen">
</head>
<body class="antialiased">
<div>
    <div>
        Template:
        <select id="template">
            <option selected>------</option>
            @foreach($templates as $template)
                <option value="{{ $template->id }}">{{ $template->name }}</option>
            @endforeach
        </select>

        <button id="load">Load</button>

        ...

        <button id="save">Save</button>
    </div>
    <br>
    <div id="example1console"></div>
    <div id="example1"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    let exampleConsole = document.getElementById('example1console');
    let load = document.getElementById('load');
    let save = document.getElementById('save');
    let handsontable;


    function init() {
        handsontable = new Handsontable(document.getElementById('example1'), {
            data: [[]],
            colWidths: 150,
            width: '100%',
            height: 800,
            rowHeights: 23,
            rowHeaders: true,
            colHeaders: true,
            multiColumnSorting: true,
            filters: true,
            minRows: 500,
            minCols: 20,
            licenseKey: 'non-commercial-and-evaluation'
        });
    }

    Handsontable.dom.addEvent(load, 'click', function () {
        $.ajax({
            url: '/load-template/' + $('#template').val(),
        }).done(function (result) {
            console.log(result);
            let arr = result;

            arr.map(function (row) {
                if (row.regex) {
                    row.validator = new RegExp(row.regex);
                }

                return row;
            });

            if (arr.length < 20) {
                let length = arr.length;

                for (let i = 0; i < (20 - length); i++) {
                    arr.push([]);
                }
            }

            handsontable = new Handsontable(document.getElementById('example1'), {
                data: [[]],
                columns: arr,
                colWidths: 150,
                width: '100%',
                height: 800,
                rowHeights: 23,
                rowHeaders: true,
                colHeaders: true,
                multiColumnSorting: true,
                filters: true,
                dropdownMenu: true,
                minRows: 500,
                minCols: 20,
                licenseKey: 'non-commercial-and-evaluation'
            });
        });
    });

    Handsontable.dom.addEvent(save, 'click', function () {
        let data;

        data = {
            data: handsontable.getData().filter(function (row) {
                return row.join().replace(/,/g, '').length !== 0;
            }),
            _token: '{{ csrf_token() }}',
        };

        $.ajax({
            url: '/save-template/' + $('#template').val(),
            method: 'POST',
            data: data,
        }).done(function (result) {
            $('#example1console').html('Saved!');

            handsontable.loadData([[]]);
        });
    });

    init();
</script>
</body>
</html>
