<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV View</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td, table th {
        padding: 8px;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #f2f2f2;
    }

    input[type="text"] {
        padding: 8px;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    a {
        color: #337ab7;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<body>


<label>Your mail:</label>
<input type="text" name="busmail" value="{{ session('mails') }}">

<table border="2">
    <tr>
        <td>Job Title</td>
        <td>Candidate Email</td>
        <td>CV View</td>
        <td>CV Download</td>
        <td>Time</td>
    </tr>

    @php
        $filteredData = $dataa->where('business_mail', session('mails'));
    @endphp

    @foreach($filteredData as $item)
        <tr>
            <td>{{ $item->Job_Title }}</td>
            <td>{{ $item->candidate_mail }}</td>
            <td>{{ $item->file_data }}</td>
            <td><a target="_blank" href="{{ asset('storage/' . $item->file_data) }}">Download</a></td>
            <td>{{ $item->Time }}</td>
        </tr>
    @endforeach
</table>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
  <title>Job Portal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
      color: #333;
    }

    td {
      color: #666;
    }

    td a {
      text-decoration: none;
      color: #337ab7;
      font-weight: bold;
    }

    td a:hover {
      color: #23527c;
    }
  </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TRDC9VYF7M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TRDC9VYF7M');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1996841609387194"
            crossorigin="anonymous"></script>
</head>
<body>
  <h1>Job Portal</h1>
  <label>Your mail:</label>
<input type="text" name="busmail" value="{{ session('mails') }}">
  <table>
    <thead>
      <tr>
        <th>Job Title</th>
        <th>Candidate Email</th>
        <th>Candidate Profile</th>
        <th>CV View</th>
        <th>Time</th>
      </tr>
    </thead>
    @php
        $filteredData = $dataa->where('business_mail', session('mails'));
    @endphp

    @foreach($filteredData as $item)
    <tbody>
      <tr>
        <td>{{ $item->Job_Title }}</td>
        <td><a href="profile2?mail={{ $item->candidate_mail }}">{{ $item->candidate_mail }}</a></td>
        <td>View Profile</td>
        <td><a target="_blank" href="{{ asset('storage/' . $item->file_data) }}">View</a></td>
        <td>{{ $item->Time }}</td>
      </tr>

    </tbody>
    @endforeach
  </table>
</body>
</html>

