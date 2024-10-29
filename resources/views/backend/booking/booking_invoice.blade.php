<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facture</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: small;
        }
        th {
            background-color: #007bff;
            color: white;
            padding: 10px;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        .invoice-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
        }
        .invoice-header h2 {
            font-size: 26px;
            margin: 0;
        }
        .invoice-details, .invoice-summary {
            background-color: white;
            padding: 20px;
            margin-top: 10px;
        }
        .invoice-summary {
            border-top: 2px solid #007bff;
        }
        .font {
            font-size: 15px;
        }
        .thanks {
            text-align: center;
            color: #007bff;
            font-size: 16px;
            margin-top: 30px;
            font-family: serif;
        }
        .authority {
            float: right;
            text-align: center;
            margin-top: 30px;
        }
        .authority p {
            margin: 0;
            font-size: 14px;
        }
        .authority h5 {
            margin: 0;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="invoice-header">
    <table>
        <tr>
            <td>
                <h2><strong>Hotel</strong></h2>
            </td>
            <td align="right">
                <pre class="font">
Hotel Sérénité Suite
Email: support@suite.com
Mob: 77 111 74 20
Saly En face auchan
                </pre>
            </td>
        </tr>
    </table>
</div>

<div class="invoice-details">
    <table>
        <thead>
            <tr>
                <th>Type Chambre</th>
                <th>Total Chambre</th>
                <th>Prix</th>
                <th>Date Entrée / Sortie</th>
                <th>Total Nuits</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$editData->room->type->name}}</td>
                <td>{{$editData->number_of_rooms}}</td>
                <td>{{$editData->actual_price}} Fcfa</td>
                <td><span class="badge bg-primary">{{$editData->check_in}}</span> / <span class="badge bg-warning text-dark">{{$editData->check_out}}</span></td>
                <td>{{$editData->total_night}}</td>
                <td>{{$editData->actual_price * $editData->number_of_rooms}} Fcfa</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="invoice-summary">
    <table>
        <tr>
            <td><strong>Sous-total:</strong></td>
            <td align="right">{{$editData->subtotal}} Fcfa</td>
        </tr>
        <tr>
            <td><strong>Réduction:</strong></td>
            <td align="right">{{$editData->discount}} Fcfa</td>
        </tr>
        <tr>
            <td><strong>Total Général:</strong></td>
            <td align="right">{{$editData->total_price}} Fcfa</td>
        </tr>
    </table>
</div>

<div class="thanks">
    <p>Merci pour votre réservation !</p>
</div>

<div class="authority">
    <p>-----------------------------------</p>
    <h5>Signature d'Autorité:</h5>
</div>

</body>
</html>
