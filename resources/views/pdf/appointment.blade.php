<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; font-size: 24px; font-weight: bold; }
        .section { margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid black; padding: 10px; text-align: left; }
    </style>
</head>
<body>

    <div class="header">Appointment Details</div>

    <div class="section">
        <strong>Patient Name:</strong> {{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}<br>
        <strong>Appointment Date:</strong> {{ $appointment->from }} - {{ $appointment->to }}<br>
        <strong>Doctor:</strong> {{ $appointment->doctor->first_name }} {{ $appointment->doctor->last_name }}<br>
    </div>

    <div class="section">
        <h3>Prescription</h3>
        <table>
            <thead>
                <tr>
                    <th>Prescription</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $appointment->prescription->prescription }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="section">
        <h3>Lab Tests</h3>
        <table>
            <thead>
                <tr>
                    <th>Test Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointment->labTests as $labTests)
                <tr>
                    <td>{{ $labTests->lap_test }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>
