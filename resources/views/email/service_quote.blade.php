<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>New Assistance Application </title>
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      font-size: 24px;
    }

    p {
      font-size: 16px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #fff;
    }

    th {
      background-color: #333;
    }

  </style>
</head>
<body>
  <div class="container">
    <h1>New Service Quote</h1>
    <p>Hello,</p>
    <p>We would like to inform you that there has been a new user quote on your website. Please see the details below:</p>

    <table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$mail['RequiredServices'][0]}}</td>
          <td>{{$mail['RequiredServices'][1]}}</td>
          <td>{{$mail['RequiredServices'][2]}} </td>
          <td>{{ now()->toDateTimeString() }}</td>
        </tr>
      </tbody>
    </table>

        <p>Thank you!</p>
  </div>

  # <h3 style="margin-top: 5px;" >Required Services.</h3>

  <ul>

    @foreach ($mail as $key => $value)

    @if ($value)

    <li>
        <span>{{ucwords(str_replace('_',' ',strtolower($key)))}}</span>
    </li>

    @endif
    <br>
    @endforeach


  </ul>
</body>
</html>
