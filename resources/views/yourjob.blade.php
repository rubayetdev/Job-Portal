

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
<input type="text" name="busmail" value="{{ session('mails') }}" readonly>
  <table>
    <thead>
      <tr>
        <th>Job Title</th>
        <th>Vaccancies</th>
        <th>Employment Time</th>
        <th>Deadline</th>
        <th>Delete</th>
      </tr>
    </thead>
    @php
        $filteredData = $dataa->where('business_mail', session('mails'));
    @endphp

    @foreach($filteredData as $item)
    <tbody>
      <tr>
        <td>{{ $item->job_title }}</td>
        <td>{{ $item->vaccacines }}</a></td>
        <td>{{ $item->empstatus }}</td>
        <td>{{ $item->Deadline }}</td>
        <td><a href="{{route('deletepost',['busmail'=>session('mails'),'job_Title'=>$item->job_title])}}">Delete</a></td>
      </tr>

    </tbody>
    @endforeach

  </table>
</body>
</html>

