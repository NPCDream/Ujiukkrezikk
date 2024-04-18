<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Rezik</title>
    <style>
        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(255, 255, 255, 0)
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: blueviolet;
            color: yellow;
            margin-bottom: 10px;
            border:20px;
            border-radius: 10px;
            box-shadow: ;
        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 40px;
            background-color: red;
            color:orange;
            margin-bottom: 10px;
            border: 20px;
            border-radius: 10px;
            box-shadow: ;
        }
        input[type="number"]{
            border: none;
            text-align;

        }
    </style>
</head>
<body>
    <h1><center>KALKULATOR REZIK</center></h1>
    <center>
        <form action="{{ route('proses.store') }}" method="post">
        @csrf
        <table border="1" width=500>
            <tr>
                <td colspan="2"><input type="number" name="a" id=""></td>
                <td colspan="2" rowspan="2"><input type="reset" value="reset" name="op"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="number" name="b" id=""></td>
            </tr>
            <tr>
                <td colspan="4">hasil</td>
            </tr>
            <tr>
                <td><input type="submit" value="+" name="op"></td>
                <td><input type="submit" value="-" name="op"></td>
                <td><input type="submit" value="/" name="op"></td>
                <td><input type="submit" value="x" name="op"></td>
            </tr>
            <td colspan="4">
                Nama:Varezik Nur
                <br>
                Kelas:XII PPLG 2
            </td>
            </table>
        </form>
    </center>
</body>
</html>
